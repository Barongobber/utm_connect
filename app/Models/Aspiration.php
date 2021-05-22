<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspiration extends Model
{
    use HasFactory;

    protected $fillable = [
        'matrix_card',
        'posted_on',
        'division_name',
        'aspiration_subject',
        'aspiration_content',
    ];
    
}
