<?php

namespace App\Http\Services\Backend;

use App\Models\Wilayah;
use Illuminate\Support\Str;

class WilayahService
{

    public function select(){
        return Wilayah::latest()->paginate(10);
    }
    public function getFirstBy(string $column, string $value)
    {
        return Wilayah::where($column, $value)->firstOrFail();
    }


    public function create(array $data)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Wilayah::create($data);
    }

    public function update(array $data, string $uuid)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Wilayah::where('uuid', $uuid)->update($data);
    }

    public function delete(string $uuid)
    {
        return Wilayah::where('uuid', $uuid)->delete();
    }
}
