<?php

namespace App\Http\Controllers\Voyager;

use App\Layout;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataRestored;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadImagesDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class LayoutController extends VoyagerBaseController
{
	use BreadRelationshipParser;

	/**
	 * POST BRE(A)D - Store data.
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(Request $request)
	{
		dd($request);
		$request['slug']= str_replace(' ','_', strtolower($request->name));
		$request->validate([
			'slug' => 'required|unique:layouts',
		]);

		$slug = $this->getSlug($request);

		$dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

		// Check permission
		$this->authorize('add', app($dataType->model_name));

		// Validate fields with ajax
		$val = $this->validateBread($request->all(), $dataType->addRows)->validate();
		$data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());

		event(new BreadDataAdded($dataType, $data));

		return redirect()
			->route("voyager.{$dataType->slug}.index")
			->with([
				'message'    => __('voyager::generic.successfully_added_new')." {$dataType->display_name_singular}",
				'alert-type' => 'success',
			]);
	}
}
