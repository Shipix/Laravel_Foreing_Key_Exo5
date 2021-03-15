<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Player;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        // $validation = $request->validate([
        //     "name"=>'required|min:3|max:40',
        //     "firstname "=>'required|min:3|max:40',
        //     "age"=>'numeric|min:18|max:99',
        //     "number"=>'numeric|min:1|max:7',
        // ]);

        $nbrJoueur = count(DB::table('players')->where('team_id', $request->team_id)->get());
        $store = new Player;
        $store->name = $request->name;
        $store->firstname = $request->firstname;
        $store->age = $request->age;
        Storage::put('public/img/', $request->file('src'));
        $store->src = $request->file('src')->hashName();
        $store->number = $request->number;
        $store->mail = $request->mail;
        $store->country = $request->country;
        $store->gender_id = $request->request->get('gender_id');
        $store->role_id = $request->request->get('role_id');
        $store->team_id = $request->request->get('team_id');

        if ($store->teams->number > $nbrJoueur) {
            $store->save();
            return redirect()->back();
        } else {
            return redirect()->back()->with('status', "L'équipe est au complet !");;
        }        
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
    public function edit($id)
    {
        $edit = Player::find($id);
        $gender = Gender::all();
        $role = Role::all();
        $team = Team::all();
        // dd($edit);
        return view('editMembre', compact('edit', 'gender', 'role', 'team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Player::find($id);
        $update->name = $request->name;
        $update->firstname = $request->firstname;
        $update->age = $request->age;
        Storage::delete('public/img/'.$update->src); 
        Storage::put('public/img/', $request->file('src'));
        $update->src = $request->file('src')->hashName();
        $update->number = $request->number;
        $update->mail = $request->mail;
        $update->country = $request->country;
        $update->gender_id = $request->request->get('gender_id');
        $update->role_id = $request->request->get('role_id');
        $update->team_id = $request->request->get('team_id');
        $update->save();
        return redirect()->back();
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
