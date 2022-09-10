<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EskulModel extends Model
{
    use HasFactory;
    protected $table = 'eskuls';
    protected $fillable = ['name'];

    public function students()
    {
        return $this->belongsToMany(StudentModel::class, 'student_eskul', 'eskul_id', 'student_id');
    }
}
