<?php

namespace App\Http\Services\Backend;

use App\Models\Obat;
use Illuminate\Support\Str;

class ObatService
{

    public function select(){
        return Obat::latest()->paginate(10);
    }
    public function getFirstBy(string $column, string $value)
    {
        return Obat::where($column, $value)->firstOrFail();
    }


    public function create(array $data)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Obat::create($data);
    }

    public function update(array $data, string $uuid)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Obat::where('uuid', $uuid)->update($data);
    }

    public function delete(string $uuid)
    {
        return Obat::where('uuid', $uuid)->delete();
    }
}

