<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\User;
use App\Models\Connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirstController extends Controller
{
    public function index(){
        $songs = Song::all();
        //$s = Song::find(1); // select * from songs where id=1;
        //$s->delete(); DELETE from songs where id=1

        //$s = new Song;
        //$s->title = "ma nouvelle chanson";
        //$s->url = "https://efrzjguyga3A9H2.fr";
        //$s->note = 15;
        //$s->save(); INSERT INTO Songs Values(...................)

        //$s = Song::find(2);
        //$s->note = 12;
        //$s->save(); Update Songs set note=12 where id=2


        return view("firstcontroller.index" , ['songs' => $songs]);
    }
    Public function about(){
        $user = User::findOrFail(Auth::user()->id);
        $follow = Auth::user()->IfollowThem()->toggle(Auth::user()->id);
        return view("firstcontroller.about", ["user"=>$user], ["follow" => $follow]);
    }

    public function article($id){
        $s = Song::find(1); // select * from songs where id=1;

        return view("firstcontroller.article", ["id" => $id, "s" => $s]);
    }
    public function nouvellechanson(){
        return view("firstcontroller.nouvellechanson");
    }

    public function storechanson(Request $request){


        $name = $request -> file("song")-> hashName();
        $request->file('song')->move("songs/".Auth::id(), $name);
        $request -> validate([
                'title' =>'required|max:50|min:3',
                'note' => 'required|integer|min:0',
                'song' => 'required|mines:ogg,mp3'
            ]
        );
        $s = new Song();
        $s->url = "/songs/".Auth::id()."/$name";

        $s->title = $request->input("title");
        $s->note = $request->input("note");
        $s->user_id = Auth::id();
        $s -> save();
        return redirect('/');
    }

    public function users($id){
        $user = User::findOrFail($id);
        return view("firstcontroller.users", ["user"=>$user]);
    }

    public function suivre($id){
        $user = User::findOrFail($id);
        Auth::user()->IfollowThem()->toggle($id);
        return back();
    }
}
