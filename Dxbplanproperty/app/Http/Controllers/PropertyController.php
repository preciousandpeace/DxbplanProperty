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





	public function index1()
	{
		$pagination = 12;
		$categories = Category::all();

		// this is for query string that is passed in the url
		if (request()->category) {
			// this is the query that joins the table
			$products = Product::with('categories')->whereHas('categories', function ($query) {

				$query->where('slug', request()->category);
			}) ;
//			$categories  	= Category::all();
//			look through for the name in category table
			// The optional help if user pass in category name on url and it doesn't exist
			$categoryName	= optional($categories->where('slug', request()->category)->first())->name;
		} else {

			// take 8 product from product table in random order
			// Pagination, change the Get to Paginate
			$products = Product::take(8);
//			$categories = Category::all();

//			this is adding the category name when you click the button
			$categoryName = 'Clothes';

		}

		//check the query sting coming from the url which is the sort (Low to High) or High to Low
		if (request()->sort === 'low-high') {
			//sortBy is built in method in laravel that sort from high to low or the opposite
			$products = $products->orderBy('price')->paginate(12);
		} elseif (request()->sort === 'high-low') {
			$products = $products->orderBy('price', 'desc')->paginate($pagination);

		} else {
			// if there is no price sorting return just pagination
			$products = $products->paginate($pagination );
		}

		return view('shop')->with([
			'products' 			=> $products,
			'categories'		=> $categories,
			'categoryName'		=> $categoryName
		]);
	}

}
