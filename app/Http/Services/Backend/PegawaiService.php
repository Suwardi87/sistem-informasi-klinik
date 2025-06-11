<?php

namespace App\Http\Services\Backend;

use App\Models\Pegawai;
use Illuminate\Support\Str;

class PegawaiService
{

    public function select(){
        return Pegawai::latest()->paginate(10);
    }
    public function getFirstBy(string $column, string $value)
    {
        return Pegawai::where($column, $value)->firstOrFail();
    }


    public function create(array $data)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Pegawai::create($data);
    }

    public function update(array $data, string $uuid)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Pegawai::where('uuid', $uuid)->update($data);
    }

    public function delete(string $uuid)
    {
        return Pegawai::where('uuid', $uuid)->delete();
    }
}
