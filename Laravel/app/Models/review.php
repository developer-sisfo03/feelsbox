<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function konsultasi()
    {
        return $this->belongsTo(konsultasi::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
