<?php

use App\Models\Properties\Status\Market\MarketStatus;
use Illuminate\Database\Seeder;

/**
 * Class MarketStatusTableSeeder.
 */
class MarketStatusTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     */
    public function run()
    {
    
        MarketStatus::create([
            'option' => 'Draft',
        ]);

        MarketStatus::create([
            'option' => 'Publ',
        ]);

        MarketStatus::create([
            'option' => 'Leaseback',
        ]);

        MarketStatus::create([
            'option' => 'Sale By Tender',
        ]);

    

       
    }
}
