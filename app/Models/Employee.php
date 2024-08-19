<?php

namespace App\Models;
use App\Models\Roll;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function roll()
    {
        return $this->belongsTo(Roll::class);
    }
}
