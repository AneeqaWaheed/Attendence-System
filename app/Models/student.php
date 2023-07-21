<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function phone(): HasOne
    {
        return $this->hasOne(attendence::class);
    }
    use HasFactory;
}
