<?php

use App\Models\Properties\Status\Commercial\CommercialStatus;
use Illuminate\Database\Seeder;

/**
 * Class CommercialStatusTableSeeder.
 */
class CommercialStatusTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     */
    public function run()
    {
    
        CommercialStatus::create([
            'option' => 'Owner Occupied',
        ]);

        CommercialStatus::create([
            'option' => 'Vacant',
        ]);

        CommercialStatus::create([
            'option' => 'Leaseback',
        ]);

        CommercialStatus::create([
            'option' => 'Sale By Tender',
        ]);

    

       
    }
}
