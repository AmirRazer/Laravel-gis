<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKategori extends Model
{
    //  protected $fillable = ['kategori_id', 'name'];

    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class);
    // }
     protected $fillable = ['name', 'kategori_id', 'created_at', 'updated_at'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function spots()
    {
        return $this->hasMany(Spot::class);
    }
}
