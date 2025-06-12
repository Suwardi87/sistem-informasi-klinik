<?php

namespace App\Models;

use App\Models\Pasien;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungans';
    protected $guarded = ['id'];

     public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}

