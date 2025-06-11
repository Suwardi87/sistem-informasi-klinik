<?php

namespace App\Http\Services\Backend;

use App\Models\Kabupaten;
use Illuminate\Support\Str;

class KabupatenService
{

    public function select(){
        return Kabupaten::latest()->paginate(10);
    }
    public function getFirstBy(string $column, string $value)
    {
        return Kabupaten::where($column, $value)->firstOrFail();
    }


    public function create(array $data)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Kabupaten::create($data);
    }

    public function update(array $data, string $uuid)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Kabupaten::where('uuid', $uuid)->update($data);
    }

    public function delete(string $uuid)
    {
        return Kabupaten::where('uuid', $uuid)->delete();
    }
}
