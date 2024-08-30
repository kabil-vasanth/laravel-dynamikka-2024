<?php

namespace App\Models;
use App\Models\Grade;
use App\Models\Student;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function grades()
    {
        return $this->belongsToMany(Grade::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

}
