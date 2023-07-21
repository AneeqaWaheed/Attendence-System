<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendence extends Model
{
    public function student()
    {
        return $this->belongsTo(student::class);
    }
    use HasFactory;
    protected $fillable = [
'status',
'student_id'
    ];
}
