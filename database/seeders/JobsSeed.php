<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class JobsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'title' => Str::random(10),
            'description' => Str::random(1000),
            'local' => 'São Paulo / SP',
            'title' => Str::random(10),
            'remote' => 'no',
            'type' => 3,
            'company_id' => 1,
        ]);
    }
}
