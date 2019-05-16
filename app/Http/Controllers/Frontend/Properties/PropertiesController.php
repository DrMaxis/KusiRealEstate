<?php

namespace App\Http\Controllers\Frontend\Properties;

use App\Http\Controllers\Controller;

/**
 * Class PropertiesController.
 */
class PropertiesController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.properties.index');
    }
}
