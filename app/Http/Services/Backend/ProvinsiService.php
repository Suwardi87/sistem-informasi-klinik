<?php

namespace App\Http\Services\Backend;

use App\Models\Provinsi;
use Illuminate\Support\Str;

class ProvinsiService
{

    public function select(){
        return Provinsi::latest()->paginate(10);
    }
    public function getFirstBy(string $column, string $value)
    {
        return Provinsi::where($column, $value)->firstOrFail();
    }


    public function create(array $data)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Provinsi::create($data);
    }

    public function update(array $data, string $uuid)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Provinsi::where('uuid', $uuid)->update($data);
    }

    public function delete(string $uuid)
    {
        return Provinsi::where('uuid', $uuid)->delete();
    }
}
