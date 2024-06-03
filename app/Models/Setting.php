<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;
     protected $table = 'settings';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'gender',
        'phone',
        'alamat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
      public function getImageAsset()
    {
        return asset('upload/profile/'. $this->image);
    }
}
