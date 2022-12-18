<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'branch_id',
        'staff_id',
        'department',
        'phone_number',
        'status'
    ];


}
