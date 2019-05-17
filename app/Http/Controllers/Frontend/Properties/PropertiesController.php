<?php

namespace App\Http\Controllers\Frontend\Properties;

use App\Models\Properties\Property;
use App\Http\Controllers\Controller;

/**
 * Class PropertiesController.
 */
class PropertiesController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index() {

        $properties = Property::all();
        return view('frontend.properties.allproperties.index')->with('properties' , $properties);
    }
}
