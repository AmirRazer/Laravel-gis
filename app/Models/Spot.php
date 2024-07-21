<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
    // kolom lain...
    'detail_kategori_id',
    // kolom lain...
];

    public function getImageAsset()
    {
        // if ($this->image) {
        //     return asset('storage/imageSpots/' . $this->image);
        // }
        if ($this->image) {
            return asset('upload/spots/' . $this->image);
        }
        return 'https://placehold.co/200?text=No+Image';
    }
     public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class);
    }
    public function detailKategori()
    {
        return $this->belongsTo(DetailKategori::class, 'detail_kategori_id');
    }

}
