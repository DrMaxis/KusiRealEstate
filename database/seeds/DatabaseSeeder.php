<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'cache',
            'jobs',
            'sessions',
        ]);

        $this->call(AuthTableSeeder::class);
        $this->call(AgenciesTableSeeder::class);
        $this->call(AgentsTableSeeder::class);
        $this->call(ListingTypesTableSeeder::class);
        $this->call(PropertyTypesTableSeeder::class);
        $this->call(PropertiesTableSeeder::class);
        $this->call(CommercialStatusTableSeeder::class);
        $this->call(MarketStatusTableSeeder::class);
        $this->call(SaleStatusTableSeeder::class);
        $this->call(AccessibilitiesTableSeeder::class);
        $this->call(AmenitiesTableSeeder::class);
        $this->call(TenuresTableSeeder::class);
        $this->call(UtilitiesTableSeeder::class);


        Model::reguard();
    }
}
