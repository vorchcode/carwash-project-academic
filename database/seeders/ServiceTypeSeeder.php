<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceType::insert([
            ['id' => 1, 'name' => 'RGL01', 'description' => 'Layanan reguler dengan lama waktu pengerjaan 1 hari', 'cost' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'RGL02', 'description' => 'Layanan prioritas dengan waktu pengerjaan 2 hari', 'cost' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'EXP04', 'description' => 'Layanan prioritas dengan waktu pengerjaan 4 jam', 'cost' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'EXP07', 'description' => 'Layanan prioritas dengan waktu pengerjaan 7 jam', 'cost' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'EXP07', 'description' => 'Layanan prioritas dengan waktu pengerjaan 10 jam', 'cost' => 10000, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
