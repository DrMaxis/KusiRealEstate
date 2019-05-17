<?php

use App\Models\Properties\Types\Listing\ListingType;
use Illuminate\Database\Seeder;

/**
 * Class ListingTypesTableSeeder.
 */
class ListingTypesTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     */
    public function run()
    {
    
        ListingType::create([
            'type' => 'For Sale',
            /* 'slug' => slugify('Studio Unwanted Homes'), */
        ]);

        ListingType::create([
            'type' => 'For Rent',
           /*  'slug' => slugify('Antwi Real Estate'), */
        ]);

        ListingType::create([
            'type' => 'For Lease',
            /* 'slug' => slugify('Kusi Real Estate'), */
        ]);

        ListingType::create([
            'type' => 'For Sale & Rent',
            /* 'slug' => slugify('Williams Real Estate'), */
        ]);

        ListingType::create([
            'type' => 'AirBnb',
           /*  'slug' => slugify('Kayla & Sons Real Estate'), */
        ]);

       


    

       
    }
}
