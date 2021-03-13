<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('home', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store2 = new Country;
        $store2->country = $request->country;
        $store2->continent = $request->continent;
        $store2->save();

        $store = new Team;
        $store->equipe = $request->equipe;
        $store->number = $request->number;
        $store->country_id = $store2->id;
        $store->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Team::find($id);
        $joueur = $show->players;
        return view("ShowTeam", compact("show", "joueur"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Team::find($id);
        return view('editTeam', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Team::find($id);
        $update->equipe = $request->equipe;
        $update->country = $request->country;
        $update->city = $request->city;
        $update->number = $request->number;
        $update->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Team::find($id);
        $destroy->delete();
        return redirect('/');
    }
}
