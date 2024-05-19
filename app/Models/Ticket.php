<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat',
        'desc',
        'price',
        'priority',
        'userId',
    ];
}
