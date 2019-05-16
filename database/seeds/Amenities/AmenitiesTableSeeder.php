<?php

use App\Models\Properties\Amenities\Amenity;
use Illuminate\Database\Seeder;

/**
 * Class AmenitiesTableSeeder.
 */
class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     */
    public function run()
    {
    
        Amenity::create([
            'amenity' => 'Wireless Internet', 
        ]);

        Amenity::create([
            'amenity' => 'Air Conditioning',   
        ]);

        Amenity::create([
            'amenity' => 'TV',  
        ]);

        Amenity::create([
            'amenity' => 'Hot Tub',
        ]);

        Amenity::create([
            'amenity' => 'Gym',
        ]);

        Amenity::create([
            'amenity' => 'Washer',   
        ]);


        Amenity::create([
            'amenity' => 'Heating',   
        ]);


        Amenity::create([
            'amenity' => 'Kitchen',   
        ]);


        Amenity::create([
            'amenity' => 'Dryer',   
        ]);


        Amenity::create([
            'amenity' => 'Internet',   
        ]);


        Amenity::create([
            'amenity' => 'Indoor Fireplace',   
        ]);

    
        Amenity::create([
            'amenity' => 'Smoking Allowed',   
        ]);


        Amenity::create([
            'amenity' => 'Buzzer/Wireless Intercom',   
        ]);


       
    }
}
