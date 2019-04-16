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

//	/**
//	 * Get all the properties and categories too
//	 *
//	 * @return \Illuminate\Http\Response
//	 */
//	public function properties()
//	{
//
//		return view('properties');
//	}

    public function getAllProperties()
    {
    	$layouts = Layout::all();

        return view('properties', [
        	'layouts'	=>	$layouts
		]);
    }

    public function getProperty($name)
    {
        $propertyName = Layout::where('slug', '=', $name)->firstOrFail();

        $propertyDetails = Layout::where('slug', $propertyName->slug)->firstOrFail();

		$property = Property::where('layout_id', (int)$propertyName->id)->get();
        return view('property', [
            'properties' 			=> $property,
			'propertyDetails'		=> $propertyDetails
        ]);
    }
}
