<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Call Class Siswa dari file SiswaTableSeeder
        $this->call(SiswaTableSeeder::class);
    }
}
