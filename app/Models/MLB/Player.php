<?php

namespace App\Models\MLB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /** @use HasFactory<\Database\Factories\MLB\PlayerFactory> */
    use HasFactory;

    protected $guarded = [];
}
