<?php

namespace App\Models;

use App\Models\Provinsi;
use App\Models\Kabupaten;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table = 'wilayahs';

    protected $fillable = [
        'uuid',
        'provinsi_id',
        'kabupaten_id',
    ];

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }
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
