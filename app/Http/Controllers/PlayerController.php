<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Player;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gender = Gender::all();
        $role = Role::all();
        $team = Team::all();
        return view('AddMembre', compact('gender', 'role', 'team'));
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

        $store = Role::all();
        // $store->role = $request->role;
        // $store->save();

        $store2 = Team::all();
        // $store2->equipe = $request->equipe;
        // $store2->save();
        
        $store3 = Gender::all();
        // $store3->gender = $request->gender;
        // $store3->save();

        $store4 = new Player;
        $store4->name = $request->name;
        $store4->firstname = $request->firstname;
        $store4->age = $request->age;
        Storage::put('public/img/', $request->file('src'));
        $store4->src = $request->file('src')->hashName();
        $store4->number = $request->number;
        $store4->mail = $request->mail;
        $store4->country = $request->country;
        $store4->role_id = $store->id;
        $store4->team_id = $store2->id;
        $store4->gender_id = $store3->id;
        $store4->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Player::find($id);
        return view("ShowMembre", compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        //
    }
}
