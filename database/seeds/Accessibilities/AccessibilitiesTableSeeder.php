<?php

use App\Models\Properties\Accessibilities\Accessibility;
use Illuminate\Database\Seeder;

/**
 * Class AccessibilitiesTableSeeder.
 */
class AccessibilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     */
    public function run()
    {
    
        Accessibility::create([
            'accessibility' => 'Elevator', 
        ]);

        Accessibility::create([
            'accessibility' => 'Lift',   
        ]);

        Accessibility::create([
            'accessibility' => 'Wheel Chair Ramp',  
        ]);

        Accessibility::create([
            'accessibility' => 'Handicap Parking',
        ]);

        Accessibility::create([
            'accessibility' => 'Open Yard',
        ]);

        Accessibility::create([
            'accessibility' => 'Stairway',   
        ]);


    

       
    }
}
