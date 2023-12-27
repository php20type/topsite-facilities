<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_services')->insert([
            ['name' => 'Cleaning' , 'status' => 1],
            ['name' => 'Carpeting' , 'status' => 1],
            ['name' => 'Paint work' , 'status' => 1],
            ['name' => 'Plumbing' , 'status' => 1],
        ]);
    }
}
