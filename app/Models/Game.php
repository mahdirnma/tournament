<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'team1_id',
        'team2_id',
        'team1_goals',
        'team2_goals',
        'week',
        'winner',
    ];
}
