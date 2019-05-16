<?php

use App\Models\Agents\Agent;
use Illuminate\Database\Seeder;

/**
 * Class AgentsTableSeeder.
 */
class AgentsTableSeeder extends Seeder
{

    /**
     * Run the database seed.
     */
    public function run()
    {

        Agent::create([
            'first_name' => 'Terry',
            'last_name' => 'Kusi',
            'address' => '123 Fake St.',
            'city' => 'FakaTown',
            'state' => 'Saturn',
            'zip' => '837212',
            'phone' => '+1 234-567-890',
            'fax' => '+1 890-567-234',
            'email' => 'tkusi@kusirealestate.com',
            'about_me' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae est sapien. Morbi nunc sem, accumsan non enim non, tempor vestibulum nibh. Morbi egestas auctor sem at sollicitudin. In pulvinar venenatis hendrerit. Sed hendrerit nulla at sagittis consequat. Nam vel turpis turpis. Donec ullamcorper egestas nisi, nec placerat dolor consequat sit amet.'



        ]);
    }
}
