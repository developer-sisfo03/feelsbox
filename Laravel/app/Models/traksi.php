<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traksi extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function tes_mental(){
        return $this->belongsTo(tesMental::class);
    }

    public function psikolog(){
        return $this->belongsTo(psikolog::class);
     }
}
