<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::insert([
            ['name' => 'Poles and Wax', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cuci Interior', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
