<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    use HasFactory;
    protected $table = "employee";
    protected $fillable = [
        'name',
        'email',
        'admission_date',
    ];
}