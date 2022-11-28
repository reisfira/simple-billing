<?php

namespace App\Models\Masterfile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesman extends Model
{
    use HasFactory;

    protected $table = 'salesman';
    protected $fillable = [
        'code',
        'name',
        'description',
    ];
}
