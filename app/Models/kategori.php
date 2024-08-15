<?php

namespace App\Models;

use App\Models\DetailKategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable = ['nama'];
     public function detailKategoris()
    {
        return $this->hasMany(DetailKategori::class);
    }
}
