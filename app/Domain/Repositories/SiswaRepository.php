<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Siswa;
use App\Domain\Contracts\SiswaInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class SiswaRepository
 * @package App\Domain\Repositories
 */
class SiswaRepository extends AbstractRepository implements SiswaInterface, Crudable
{

    /**
     * @var Siswa
     */
    protected $model;

    /**
     * SiswaRepository constructor.
     * @param Siswa $siswa
     */
    public function __construct(Siswa $siswa)
    {
        $this->model = $siswa;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param int $limit
     * @param int $page
     * @param array $column
     * @param string $field
     * @param string $search
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // query to aql
        return parent::paginate($limit, $page, $column, 'nama', $search);
    }

    /**
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(array $data)
    {
        // execute sql insert
        return parent::create([
            'nama'    => e($data['nama']),
            'sekolah'    => e($data['sekolah']),
            'kelas'    => e($data['kelas']),
            'nis'   => e($data['nis']),
            'jk'   => e($data['jk']),
            'alamat'   => e($data['alamat'])
        ]);

    }

    /**
     * @param $id
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update($id, array $data)
    {
        return parent::update($id, [
            'nama'    => e($data['nama']),
            'sekolah'    => e($data['sekolah']),
            'kelas'    => e($data['kelas']),
            'nis'   => e($data['nis']),
            'jk'   => e($data['jk']),
            'alamat'   => e($data['alamat'])
        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }


    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function findById($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

}
