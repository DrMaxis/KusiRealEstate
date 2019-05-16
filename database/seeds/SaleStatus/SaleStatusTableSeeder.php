<?php

use App\Models\Properties\Status\Sale\SaleStatus;
use Illuminate\Database\Seeder;

/**
 * Class SaleStatusTableSeeder.
 */
class SaleStatusTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     */
    public function run()
    {
    
        SaleStatus::create([
            'option' => 'Urgent',
        ]);

        SaleStatus::create([
            'option' => 'New Contract',
        ]);

        SaleStatus::create([
            'option' => 'New Lease',
        ]);

        SaleStatus::create([
            'option' => 'Grandfather Pricing',
        ]);

    

       
    }
}
