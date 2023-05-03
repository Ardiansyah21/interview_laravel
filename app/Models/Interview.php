<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'age',
        'no_tlp',
        'last_education',
        'education_name',
        'cv_file',
    ]; 
}
