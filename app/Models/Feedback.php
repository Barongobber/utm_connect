<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'matrix_card_feedback',
        'comment_on',
        'event_id',
        'feedback',
        'rate_event',
    ];
}
