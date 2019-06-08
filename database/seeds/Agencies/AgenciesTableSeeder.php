<?php

use App\Models\Agencies\Agency;
use Illuminate\Database\Seeder;

/**
 * Class AgenciesTableSeeder.
 */
class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     */
    public function run()
    {
    
        Agency::create([
            'agency' => 'Studio Unwanted Homes',
            'slug' => slugify('Studio Unwanted Homes'),
        ]);

        Agency::create([
            'agency' => 'Antwi Real Estate',
            'slug' => slugify('Antwi Real Estate'),
        ]);

        Agency::create([
            'agency' => 'Pacific North Properties',
            'slug' => slugify('Pacific North Properties'),
        ]);

        Agency::create([
            'agency' => 'Williams Real Estate',
            'slug' => slugify('Williams Real Estate'),
        ]);

        Agency::create([
            'agency' => 'Kayla & Sons Real Estate',
            'slug' => slugify('Kayla & Sons Real Estate'),
        ]);

        Agency::create([
            'agency' => 'MAXSCENE Real Estate',
            'slug' => slugify('MAXSCENE Real Estate'),
        ]);


    

       
    }
}
