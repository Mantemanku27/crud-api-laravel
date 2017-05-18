<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Siswa
 * @package App\Domain\Entities
 */
class Siswa extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'nama', 'sekolah', 'kelas', 'nis', 'jk', 'alamat',
    ];

}
