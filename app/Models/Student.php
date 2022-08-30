<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table ='students';
    public $fillable = [
        'firstname',
        'secondname',
        'age',
        'gender',
        'class',
        'phonenumber',
        'Address'
    ];
    public $timestamps = false;
}
