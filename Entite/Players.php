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








?>