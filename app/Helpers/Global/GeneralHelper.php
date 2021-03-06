<?php

if (!function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

if (!function_exists('gravatar')) {
    /**
     * Access the gravatar helper.
     */
    function gravatar()
    {
        return app('gravatar');
    }
}

if (!function_exists('home_route')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function home_route()
    {
        if (auth()->check()) {
            if (auth()->user()->can('view backend')) {
                return 'admin.dashboard';
            }

            return 'frontend.user.dashboard';
        }

        return 'frontend.index';
    }
}

if (!function_exists('slugify')) {

    /**
     * Transform the string to a slugified SEO friendly string
     *
     * @param $string
     *
     * @return String $string
     * 
     * @credit rorypicko
     */
    function slugify($string)
    {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }
}


if (!function_exists('contentImage')) {
    function contentImage($path)
    {
        return  $path != null && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('img/frontend/placeholders/no-img.jpg');
    }
}

if (!function_exists('propertyImage')) {
    function propertyImage($path)
    {
        return  $path != null && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('img/frontend/placeholders/prop-no-img.jpg');
    }
}
