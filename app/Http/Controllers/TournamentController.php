<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Tournament;
use App\Http\Requests\StoreTournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use http\Env\Request;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Tournament::all();
        return view('tournament.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Team $team)
    {
        $tournament = Tournament::create([
            'team_id'=>$team->id,
        ]);
        return redirect()->back();
    }
    public function create(StoreTournamentRequest $request)
    {
        $tournaments = Tournament::all();
        $teams = Team::all();
        $scores=[];
        foreach ($tournaments as $tournament) {
            $id=$tournament->team_id;
            $scores[$tournament->team->title]=$request->$id;
        }
        if ($tournaments[0]->games==0) {
            if ($scores['team 1']>$scores['team 4']){
                $teams[1]->teams()->attach(0);
            }elseif ($scores['team 1']<$scores['team 4']){
                return 13;
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tournament $tournament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTournamentRequest $request, Tournament $tournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $tournament)
    {
        //
    }
}
