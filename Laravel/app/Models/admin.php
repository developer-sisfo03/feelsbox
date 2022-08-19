<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $guarded = [
        'id',
    ];

    public function konsultasi(){
        return $this->belongsTo(konsultasi::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function psikolog(){
        return $this->belongsTo(psikolog::class);
    }

    public function tes_mental(){
        return $this->belongsTo(tes_mental::class);
    }
}
