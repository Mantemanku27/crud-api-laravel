<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Menjalankan Seeder Database.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil Class Siswa dari file SiswaTableSeeder
        $this->call(SiswaTableSeeder::class);
    }
}
