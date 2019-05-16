<?php

use App\Models\Properties\Utilites\Utility;
use Illuminate\Database\Seeder;

/**
 * Class UtilitiesTableSeeder.
 */
class UtilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     */
    public function run()
    {
    
        Utility::create([
            'utility' => 'Wireless Internet', 
        ]);

        Utility::create([
            'utility' => 'Air Conditioning',   
        ]);

        Utility::create([
            'utility' => 'TV',  
        ]);

        Utility::create([
            'utility' => 'Hot Tub',
        ]);

        Utility::create([
            'utility' => 'Gym',
        ]);

        Utility::create([
            'utility' => 'Washer',   
        ]);


        Utility::create([
            'utility' => 'Heating',   
        ]);


        Utility::create([
            'utility' => 'Kitchen',   
        ]);


        Utility::create([
            'utility' => 'Dryer',   
        ]);


        Utility::create([
            'utility' => 'Internet',   
        ]);


        Utility::create([
            'utility' => 'Indoor Fireplace',   
        ]);

    
        Utility::create([
            'utility' => 'Smoking Allowed',   
        ]);


        Utility::create([
            'utility' => 'Buzzer/Wireless Intercom',   
        ]);


  
    

       
    }
}
