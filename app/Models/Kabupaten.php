<?php

namespace App\Models;

use App\Models\Provinsi;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupatens';
    protected $guarded = ['id'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }
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
