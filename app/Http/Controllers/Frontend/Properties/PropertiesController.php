<?php

namespace App\Http\Controllers\Frontend\Properties;

use App\Models\Properties\Property;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

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
        $now = Carbon::now()->toDateTimeString();
        return view('frontend.properties.allproperties.index')->with([
            'properties' => $properties,
            'now' => $now
            ]);
    }
}
