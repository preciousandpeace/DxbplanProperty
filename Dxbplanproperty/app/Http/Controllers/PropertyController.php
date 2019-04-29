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
    	$layouts = Layout::all();

    	$top4 = Layout::orderBy('created_at', 'desc')->take(4)->get();

        return view('landing-page', [
        	'layouts'		=> $layouts,
			'top4'			=> $top4
		]);
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

        $count  = 0;
        $count1  = 0;
        $count1sub  = 0;

		$property = Property::where('layout_id', (int)$propertyName->id)->firstOrFail();

        return view('property', [
            'properties' 			=> $property,
			'propertyDetails'		=> $propertyDetails,
			'count'					=> $count,
			'count1'				=> $count1,
			'count1sub'				=> $count1sub,
        ]);
    }

    public function getPrivatePolicy()
    {
        return view('private');
    }
}
