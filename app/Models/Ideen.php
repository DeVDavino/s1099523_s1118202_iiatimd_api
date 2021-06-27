<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideen extends Model
{
    use HasFactory;
    protected $table = 'ideen';

    public $timestamps = false;

    protected $fillable = [
        'titel',
        'description',
        'categorie',
        'user_id'
    ];
}
