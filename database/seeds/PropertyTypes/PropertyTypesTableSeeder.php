<?php

use App\Models\Properties\Types\Property\PropertyType;
use Illuminate\Database\Seeder;

/**
 * Class PropertyTypesTableSeeder.
 */
class PropertyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     */
    public function run()
    {
    
        PropertyType::create([
            'type' => 'Residential',
            /* 'slug' => slugify('Studio Unwanted Homes'), */
        ]);

        PropertyType::create([
            'type' => 'Commercial',
           /*  'slug' => slugify('Antwi Real Estate'), */
        ]);

        PropertyType::create([
            'type' => 'Industrial',
            /* 'slug' => slugify('Pacific North Properties'), */
        ]);

        PropertyType::create([
            'type' => 'SOHO',
            /* 'slug' => slugify('Williams Real Estate'), */
        ]);

        PropertyType::create([
            'type' => 'Forclosure',
           /*  'slug' => slugify('Kayla & Sons Real Estate'), */
        ]);

        PropertyType::create([
            'type' => 'Private Apartment',
           /*  'slug' => slugify('Kayla & Sons Real Estate'), */
        ]);
        PropertyType::create([
            'type' => 'Apartment',
           /*  'slug' => slugify('Kayla & Sons Real Estate'), */
        ]);

        PropertyType::create([
            'type' => 'Cottage',
           /*  'slug' => slugify('Kayla & Sons Real Estate'), */
        ]);

        PropertyType::create([
            'type' => 'Flat',
           /*  'slug' => slugify('Kayla & Sons Real Estate'), */
        ]);

        PropertyType::create([
            'type' => 'condominium',
           /*  'slug' => slugify('Kayla & Sons Real Estate'), */
        ]);

        PropertyType::create([
            'type' => 'House',
           /*  'slug' => slugify('Kayla & Sons Real Estate'), */
        ]);

       


       


    

       
    }
}
