<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tag' => 'laravel, javascript',
            'company' => 'Acme Crop',
            'location' => 'Youssoufia, MA',
            'email' => 'email@email.com',
            'website' => 'https:://www.acme.com',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium voluptatum natus iusto incidunt. Unde praesentium consectetur, voluptate dolor mollitia minima officia atque, ea doloremque culpa accusamus provident adipisci sint odio.'
        ]);

        Listing::create([
            'title' => 'Full-stack Engineer',
            'tag' => 'laravel, backend, api',
            'company' => 'Stark Industries',
            'location' => 'New York, NYC',
            'email' => 'email2@email.com',
            'website' => 'https:://www.stackindustries.com',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium voluptatum natus iusto incidunt. Unde praesentium consectetur, voluptate dolor mollitia minima officia atque, ea doloremque culpa accusamus provident adipisci sint odio.'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
