<?php

namespace App\Http\Controllers;

use App\Http\Requests\Siswa\SiswaCreateRequest;
use App\Http\Requests\Siswa\SiswaEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\SiswaInterface;

class SiswaController extends Controller
{

    /**
     * @var SiswaInterface
     */
    protected $siswa;

    /**
     * SiswaController constructor.
     * @param SiswaInterface $siswa
     */
    public function __construct(SiswaInterface $siswa)
    {
        $this->siswa = $siswa;
    }

    /**
     * @api {get} api/siswas Request Siswa with Paginate
     * @apiName GetSiswaWithPaginate
     * @apiGroup Siswa
     *
     * @apiParam {Number} page Paginate siswa lists
     */
    public function index(Request $request)
    {
        return $this->siswa->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/siswas/id Request Get Siswa
     * @apiName GetSiswa
     * @apiGroup Siswa
     *
     * @apiParam {Number} id id_siswa
     * @apiSuccess {Number} id id_siswa
     * @apiSuccess {Varchar} name name of siswa
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of siswa
     * @apiSuccess {Number} phone phone of siswa
     */
    public function show($id)
    {
        return $this->siswa->findById($id);
    }

    /**
     * @api {post} api/siswas/ Request Post Siswa
     * @apiName PostSiswa
     * @apiGroup Siswa
     *
     *
     * @apiParam {Varchar} name name of siswa
     * @apiParam {Varchar} email email of siswa
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of siswa
     * @apiSuccess {Number} id id of siswa
     */
    public function store(SiswaCreateRequest $request)
    {
        return $this->siswa->create($request->all());
    }

    /**
     * @api {put} api/siswas/id Request Update Siswa by ID
     * @apiName UpdateSiswaByID
     * @apiGroup Siswa
     *
     *
     * @apiParam {Varchar} name name of siswa
     * @apiParam {Varchar} email email of siswa
     * @apiParam {Varchar} address address of siswa
     * @apiParam {Float} phone phone of siswa
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(SiswaEditRequest $request, $id)
    {
        return $this->siswa->update($id, $request->all());
    }

    /**
     * @api {delete} api/siswas/id Request Delete Siswa by ID
     * @apiName DeleteSiswaByID
     * @apiGroup Siswa
     *
     * @apiParam {Number} id id of siswa
     *
     *
     * @apiError SiswaNotFound The <code>id</code> of the Siswa was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->siswa->delete($id);
    }

}
