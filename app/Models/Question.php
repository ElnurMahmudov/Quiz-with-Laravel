<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['question',
                         'image',
                         'A',
                         'B',
                         'C',
                         'D',
                         'correct_answer'
                         ];

    use HasFactory;
}
