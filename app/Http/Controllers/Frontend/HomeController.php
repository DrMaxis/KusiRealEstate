<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Properties\Property;
use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $properties = Property::all();
        return view('frontend.index')->with('properties', $properties);
    }
}
