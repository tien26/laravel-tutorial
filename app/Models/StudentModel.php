<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'students';
    protected $fillable = ['name', 'gender', 'nim', 'class_id', 'image'];

    public function class()
    {
        return $this->belongsTo(ClassStudentsModel::class);
    }

    public function eskuls()
    {
        return $this->belongsToMany(EskulModel::class, 'student_eskul', 'student_id', 'eskul_id');
    }
}
