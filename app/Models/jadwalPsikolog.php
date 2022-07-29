<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalPsikolog extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function psikolog() 
    {
        return $this->hasMany(psikolog::class);
    }
}
