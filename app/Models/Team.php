<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'title',
        'description',
        'is_active',
    ];

    public function tournament()
    {
        return $this->hasOne(Tournament::class);
    }

    public function teams() : BelongsToMany
    {
        return $this->belongsToMany(Team::class,'team_team','team1_id','team2_id')
            ->withPivot([
                'team1-goals',
                'team2-goals',
                'week',
                'winner'
            ]);
    }
}
