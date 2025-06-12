<?php

namespace App\Http\Services\Backend;

use App\Models\Kunjungan;
use Illuminate\Support\Str;

class KunjunganService
{

    public function select(){
        return Kunjungan::latest()->paginate(10);
    }
    public function getFirstBy(string $column, string $value)
    {
        return Kunjungan::where($column, $value)->firstOrFail();
    }


    public function create(array $data)
    {
        $data['slug'] = Str::slug(auth()->user()->nama, '-');
        return Kunjungan::create($data);
    }

    public function update(array $data, string $uuid)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return Kunjungan::where('uuid', $uuid)->update($data);
    }

    public function delete(string $uuid)
    {
        return Kunjungan::where('uuid', $uuid)->delete();
    }
}

