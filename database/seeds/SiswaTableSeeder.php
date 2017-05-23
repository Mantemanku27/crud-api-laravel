<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Menjalankan Seeder Database.
     *
     * @return void
     */
    public function run()
    {
        // Catatan truncate
        DB::table('siswas')->truncate();

        $siswas = [
            ['id' => 1, 'nama' => 'Mustofa bisri', 'sekolah' => 'SMK Negeri 1 Kepanjen', 'kelas' => 'XI RPL 2', 'nis' => '111222333', 'jk' => 'Laki-laki', 'alamat' => 'Jl.Merah kuning hijau NO 27 Pagak', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('siswas')->insert($siswas);
    }
}
