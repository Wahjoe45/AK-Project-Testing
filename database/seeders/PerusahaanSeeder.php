<?php

namespace Database\Seeders;

use App\Models\perusahaan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        try {
            DB::beginTransaction();

            perusahaan::create([
                'namaPerusahaan' => 'areakerja',
                'email' => 'areakerja@gmail.com',
                'teleponPerusahaan' => '0878787878',
                'password' => Hash::make('12345678'),
                'alamat' => 'Jln Kenangan No 194'
            ]);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
}
