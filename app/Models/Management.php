<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Role;

class Management extends Model
{
    use HasFactory;

    protected $fillable = [
        'management_matrix_card',
        'management_year',
        'management_role_id',
    ];

    public function role(){
        return $this->hasOne(Role::class);
    }
}
