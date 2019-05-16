<?php

use App\Models\Properties\Tenures\Tenure;
use Illuminate\Database\Seeder;

/**
 * Class TenuresTableSeeder.
 */
class TenuresTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     */
    public function run()
    {
    
        Tenure::create([
            'tenure' => 'Freehold', 
        ]);

        Tenure::create([
            'tenure' => 'Leasehold',   
        ]);

  
    

       
    }
}
