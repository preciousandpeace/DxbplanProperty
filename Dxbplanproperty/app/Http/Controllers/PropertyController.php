<?php

namespace App\Http\Controllers;

use App\Layout;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing-page');
    }

	/**
	 * This will display about us view
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function aboutUs()
	{
		return view('aboutUs');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function contactUs()
	{
		return view('contactUs');
	}

	/**
	 * Get all the properties and categories too
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getAllProperties()
	{

		$name = Layout::where('name', '=', request()->property)->first();
		if (request()->property) {
			$property = Property::where('layout_id', $name->id)->paginate(2);
		} else {

			$property = Property::paginate(2);
		}

		$layouts  = Layout::all();

		return view('properties', [
			'properties' 	=> $property,
			'layouts' 		=> $layouts,
		]);
	}
}
