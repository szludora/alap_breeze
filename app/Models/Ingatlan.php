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

    public static $kepek = [
        "https://www.google.com/url?sa=i&url=https%3A%2F%2Fingatlan.com%2Fkecskemet-katonatelep%2Felado%2Bhaz&psig=AOvVaw3LQp9zhNoJ2B6jGmwzugq3&ust=1708782335610000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCKi38bLMwYQDFQAAAAAdAAAAABAE",
        "https://ot.ingatlancdn.com/45/4e/32272398_208457552_l.jpg?source=listing_card",
        "https://k1.koltozzbe.hu/img2/640x480/38/c39071d67185c376b175f6d4b62c32.jpg",
        "https://majsahome.hu/uploads/2022-04/ingatlan-1650571158_1.jpg",
        "https://img.jofogas.hu/620x620aspect/Elado_haz__Budapest_11__ker__631052361142676.jpg",
        "https://aranytaller.hu/img/asset/cHJvcGVydGllcy9pbWdfMzcwMS5qcGc=?w=1500&h=1000&fit=cover&s=80b83e835e8755567c0b3854ac36f52a",
        "https://mt.ingatlancdn.com/40/fe/121022736_l_0.jpg?source=listing_card",
        "https://www.otthonajanlo.hu/uploads/hazbank/2023_12/sep_278/14_657b810f22c052869.jpg"
    ];
}
