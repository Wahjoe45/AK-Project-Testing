<?php

namespace Database\Seeders;

use App\Models\alamatPelamar;
use App\Models\pelamar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PelamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        try {
            DB::beginTransaction();

        $pelamar = pelamar::create([
            'namaPelamar' => 'Andi',
            'email' => 'Andi@gmail.com',
            'teleponPelamar' => '0891234567',
            'password' => Hash::make('12345678'),
        ]);

            alamatPelamar::create([
                'nama_pelamar' => $pelamar->namaPelamar,
                'label' => 'Tempat Kost',
                'alamat' => 'Gg.Sengon No.3',
                'kecamatan' => 'Depok',
                'kota' => 'Yogyakarta',
                'provinsi' => 'Jawa Timur',
                'detail' => 'kost putra muslim dengan pagar hitam',
                'kode' => '61452',
            ]);

        DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
}

