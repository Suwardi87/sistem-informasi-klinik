<?php

namespace App\Http\Services\Backend;

use App\Models\Tindakan;
use Illuminate\Support\Str;

class TindakanService
{

    public function select(){
        return Tindakan::latest()->paginate(10);
    }
    public function getFirstBy(string $column, string $value)
    {
        return Tindakan::where($column, $value)->firstOrFail();
    }


    public function create(array $data)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Tindakan::create($data);
    }

    public function update(array $data, string $uuid)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Tindakan::where('uuid', $uuid)->update($data);
    }

    public function delete(string $uuid)
    {
        return Tindakan::where('uuid', $uuid)->delete();
    }
}

