<?php

namespace App\Http\Services\Backend;

use App\Models\Pasien;
use Illuminate\Support\Str;

class PasienService
{

    public function select(){
        return Pasien::latest()->paginate(10);
    }
    public function getFirstBy(string $column, string $value)
    {
        return Pasien::where($column, $value)->firstOrFail();
    }


    public function create(array $data)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Pasien::create($data);
    }

    public function update(array $data, string $uuid)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Pasien::where('uuid', $uuid)->update($data);
    }

    public function delete(string $uuid)
    {
        return Pasien::where('uuid', $uuid)->delete();
    }
}
