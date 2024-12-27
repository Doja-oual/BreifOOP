<?php
require_once '../Model.php';


class Players{




    public function showPlayers($table){
        $r=Model::show($table) ; 
        return $r;
    }
     public function creat($table,$data){
        $d=Model::addPlayers($table,$data);
        return $d;

     }
     public function Modifie($table,$id,$data){
        $U=Model::update($table,$id,$data);
        return $U;

     }
     public function supprime($table,$id){
        $S=Model::delete($table,$id);
        return $S;
     }


}


 




$player=new Players();

$r=$player->showPlayers('joueur');
print_r($r);

$e=$player->creat('joueur',[
    'JoueureName' => 'doja',
        'Position' => 'Attaquant',
        'Rating' => 95,
        'Pace' => 91,
        'Shooting' => 93,
        'Passing' => 85,
        'Dribbling' => 90,
        'Defending' => 42,
        'Physical' => 78,
]);

var_dump($e);

$u=$player->Modifie('joueur',28,[
    'JoueureName' => 'ibrahim',
        'Position' => 'Attaquant',
        'Rating' => 95,
        'Pace' => 91,
        'Shooting' => 93,
        'Passing' => 85,
        'Dribbling' => 90,
        'Defending' => 42,
        'Physical' => 78,
]);


$s=$player->supprime('joueur',19);







?>