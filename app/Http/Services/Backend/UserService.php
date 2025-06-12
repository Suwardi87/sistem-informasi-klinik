<?php

namespace App\Http\Services\Backend;

use App\Models\User;
use Illuminate\Support\Str;

class UserService
{

    public function select(){
        return User::latest()->paginate(10);
    }
    public function getFirstBy(string $column, string $value)
    {
        return User::where($column, $value)->firstOrFail();
    }


    public function create(array $data)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return User::create($data);
    }

    public function update(array $data, string $uuid)
    {
        $data['slug'] = Str::slug($data['nama'], '-');
        return User::where('uuid', $uuid)->update($data);
    }

    public function delete(string $uuid)
    {
        return User::where('id', $uuid)->delete();
    }
}
