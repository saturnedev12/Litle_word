<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = DB::select('SELECT owner.name, card.title, card.texte FROM owner, card WHERE card.id_owner = owner.ID');
    return view('welcome')->with('data',$data);
});
Route::post('/', function () {
     $id_owner = DB::select("SELECT id FROM owner WHERE name=? ",[$_POST['owner']]);
     $val =[
       $_POST['title'],
       $id_owner[0]->id,
       $_POST['content']
     ];
     //dd($val);
     DB::insert("INSERT INTO card(title, id_owner, texte) VALUES(?,?,?)",$val);

    $data = DB::select('SELECT owner.name, card.title, card.texte FROM owner, card WHERE card.id_owner = owner.ID');
    return view('welcome')->with('data',$data);
});
