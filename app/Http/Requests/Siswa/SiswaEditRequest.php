<?php

namespace App\Http\Requests\Siswa;

use App\Http\Requests\Request;

/**
 * Class UserCreateRequest
 *
 * @package App\Http\Requests\User
 */
class SiswaEditRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Declaration an attributes
     *
     * @var array
     */
    protected $attrs = [
        'nama'    => 'Nama',
        'sekolah'    => 'Sekolah',
        'kelas'    => 'Kelas',
        'nis'   => 'Nis',
        'jk' => 'Jk',
        'alamat'   => 'Alamat'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama'    => 'required|max:227',
            'sekolah'    => 'required|max:227',
            'kelas'    => 'required|max:227',
            'nis'   => 'required|max:2277',
            'jk' => 'required|max:227',
            'alamat'   => 'required|max:227'
        ];
    }

    /**
     * @param $validator
     *
     * @return mixed
     */
    public function validator($validator)
    {
        return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
    }

}
