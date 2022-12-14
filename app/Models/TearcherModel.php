<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TearcherModel extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $fillable = ['name'];

    public function class()
    {
        return $this->hasOne(ClassStudentsModel::class, 'id');
    }
}
