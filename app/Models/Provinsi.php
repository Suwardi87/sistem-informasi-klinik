<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsis';
    protected $guarded = ['id'];


    public static function booted()
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
    public function getRouteKeyName()
{
    return 'uuid';
}
}
