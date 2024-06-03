<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;
     protected $guarded = [];
    protected $fillable = ['name', 'kabupaten_id'];
    protected $table = 'kecamatan';
    protected $primaryKey = 'id';

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }
     public function spots()
    {
        return $this->hasMany(Spot::class);
    }
}
