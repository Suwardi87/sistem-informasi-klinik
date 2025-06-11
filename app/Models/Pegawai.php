<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'uuid',
        'user_id',
        'nama',
        'nip',
        'jabatan',
        'telepon',
        'alamat',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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
