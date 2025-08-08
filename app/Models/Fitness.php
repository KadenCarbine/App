<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitness extends Model
{
    /** @use HasFactory<\Database\Factories\FitnessFactory> */
    use HasFactory;

    protected $table = 'fitness';

    protected $fillable = ['weight'];
}
