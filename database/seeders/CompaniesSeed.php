<?php

namespace Database\Seeders;


use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CompaniesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com', 

            'website' => Str::random(10) . '.com',
            'logo' => Str::random(10) . '.jpg',
            
            'password' => bcrypt('secret'),
        ]);
    }
}
