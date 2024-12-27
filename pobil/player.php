

<?php
// require_once 'config/config.php';
require_once 'ClassePlayer.php';


$database= new Database();
$db=$database->getConnection();

$player= new Player($db);


//  $player->addPlayers([
//     'JoueureName' => 'Kristyano',
//     'Position' => 'Attaquant',
//     'Rating' => 95,
//     'Pace' => 91,
//     'Shooting' => 93,
//     'Passing' => 85,
//     'Dribbling' => 90,
//     'Defending' => 42,
//     'Physical' => 78,

// ]);
  

?>