<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingatlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategoria',
        'leiras',
        'hirdetesDatuma',
        'tehermentes',
        'ar',
        'kepUrl'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // getValamiAttribute
    protected $appends = ['kategoriaNev'];

    public function getKategoriaNevAttribute()
    {
        return Kategoria::find($this->kategoria)->nev;
    }

    public function kategoriaja()
    {
        return $this->belongsTo(Kategoria::class, 'kategoria', 'id');
        // nála van a fk belongsTo
        // egy rekord mutat rá hasOne
        // több rekord hasMany (több rendelése van pl egy személynek)
    }
}
