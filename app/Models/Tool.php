<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial_number',
        'item_name',
        'brand',
        'status',
        'location',
        'department',
        'assign',
        'tool_image',
    ];




}
