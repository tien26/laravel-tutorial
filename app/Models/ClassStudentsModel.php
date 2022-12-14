<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassStudentsModel extends Model
{
    use HasFactory;

    protected $table = 'class';
    protected $fillable = ['name', 'teacher_id'];

    public function students()
    {
        return $this->hasMany(StudentModel::class, 'class_id', 'id');
    }

    public function teacher()
    {
        return $this->belongsTo(TearcherModel::class, 'teacher_id', 'id');
    }
}
