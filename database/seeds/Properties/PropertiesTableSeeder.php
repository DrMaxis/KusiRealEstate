<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Properties\Property;

/**
 * Class PropertiesTableSeeder.
 */
class PropertiesTableSeeder extends Seeder
{

    /**
     * Run the database seed.
     */
    public function run()
    {



        $now = Carbon::now()->toDateTimeString();
        Property::create([


            'head_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae est sapien. Morbi nunc sem, accumsan non enim non, tempor vestibulum nibh. Morbi egestas auctor sem at sollicitudin. In pulvinar venenatis hendrerit. Sed hendrerit nulla at sagittis consequat. Nam vel turpis turpis. Donec ullamcorper egestas nisi, nec placerat dolor consequat sit amet.',
            'main_description'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae est sapien. Morbi nunc sem, accumsan non enim non, tempor vestibulum nibh. Morbi egestas auctor sem at sollicitudin. In pulvinar venenatis hendrerit. Sed hendrerit nulla at sagittis consequat. Nam vel turpis turpis. Donec ullamcorper egestas nisi, nec placerat dolor consequat sit amet.',
            'utility_description'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae est sapien. Morbi nunc sem, accumsan non enim non, tempor vestibulum nibh. Morbi egestas auctor sem at sollicitudin. In pulvinar venenatis hendrerit. Sed hendrerit nulla at sagittis consequat. Nam vel turpis turpis. Donec ullamcorper egestas nisi, nec placerat dolor consequat sit amet.',
            'accessibility_description'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae est sapien. Morbi nunc sem, accumsan non enim non, tempor vestibulum nibh. Morbi egestas auctor sem at sollicitudin. In pulvinar venenatis hendrerit. Sed hendrerit nulla at sagittis consequat. Nam vel turpis turpis. Donec ullamcorper egestas nisi, nec placerat dolor consequat sit amet.',
            'slug' => slugify('123 AnotherFake St'),
            'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae est sapien. Morbi nunc sem, accumsan non enim non, tempor vestibulum nibh. Morbi egestas auctor sem at sollicitudin. In pulvinar venenatis hendrerit. Sed hendrerit nulla at sagittis consequat. Nam vel turpis turpis. Donec ullamcorper egestas nisi, nec placerat dolor consequat sit amet.',
            'mls_id' => 'CA41',
            'property_type' => 'Residential',
            'listing_type' => 'For Rent',
            'commercial_status' => 'Owner Occupied',
            'market_status' => 'Sale By Tender',
            'sale_status' => 'New Contract',
            'agency' => 'Kusi Real Estate',
            'home_size' => 6598.00,
            'land_size' => 16598.00,
            'asking_price' => 599000,
            'rental_price' => 3500,
            'buy_now_price' => 610000,
            'down_payment' => 500,
            'price-details' => 'This is an example of a text phrase related to the price details',
            'available_date' => $now,
            'address' => '123 AnotherFake St',
            'city' => 'Valverdia',
            'state' => 'Saturn',
            'zip' => '837223',
            'zone' => 'Jine',
            'county' => 'Vue',
            'country' => 'USA',
            'tenure' => '12 months',
            'minimum_lease' => '6 months',
            'number_of_cars' => 8,
            'garage_car_space' => 4,
            'garage_size' => 1320,
            'bedrooms' => '6 1/2',
            'bathrooms' => '7 1/2',
            'beds' => 4,
            'featured' => 1,
            'year_built' => 2018

        ]);
    }
}
