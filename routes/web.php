<?php
use Illuminate\Support\Facades\Route;
//donnnee necessaire a un article
function getArticleData(){
  return DB::select('SELECT owner.name, card.title, card.texte, card.carte_color, card.texte_color FROM owner, card WHERE card.id_owner = owner.ID');
}
//verification des donnnee
function verifie($tb = array()){
	$etat;
 foreach($tb as $data){
	if(!empty($data) && isset($data)){
		$etat = true;
       }
	else{
		$etat= false;
		break;
	 }
	}
	return $etat;
}

//::::LES ROUTES::::
Route::get('/', function () {
    return view('welcome')->with('data',getArticleData());
});

Route::post('/', function () {

     $id_owner = DB::select("SELECT id FROM owner WHERE name=? ",[$_POST['owner']]);
     $data =[
       'title'=> $_POST['title'],
        'id_owner'=> $id_owner[0]->id,
        'texte'=>$_POST['content'],
        'carte_color'=>$_POST['carte_color'],
        'texte_color'=>$_POST['texte_color']
     ];
    if(verifie($data)){
     DB::table('card')->insert($data);
   }
   else{
    echo"<script>alert('donnée invalide');</script>";
   }

    return view('welcome')->with('data',getArticleData());
});
