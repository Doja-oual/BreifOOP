<?php 
// class Car
// { //des propreite
//  public $color;
//  public $weight;
//  private $year;

//   function set_color($color)
//   {
//     $this->color =$color;
//    }


//   function get_color()
//      {
//     return $this->color;
//      }
  

// }

//object $mycar
// $myCar= new Car();
// $myCar->color ='red';
// $myCar->set_color('red');

// //Direct via $apple->color.	
// echo $myCar->color;
// //Indirect via get_name().
// echo $myCar->get_color();
// echo "<br>";
// echo "COLOR :" .$myCar->get_color();



//public
// class Person {
//     public $name;

//     public function setName($name) {
//         $this->name = $name; // Accessible ici.
//     }
// }

// $person = new Person();
// $person->name = "Alice"; // Accessible depuis l'extérieur de la classe.
// echo $person->name;

// //privat
// class Person {
//     private $name;

//     public function setName($name) {
//         $this->name = $name; // Accessible ici.
//     }

//     public function getName() {
//         return $this->name; // Accessible ici.
//     }
// }

// $person = new Person();
// // $person->name = "Alice"; // Erreur : accès interdit depuis l'extérieur.
// $person->setName("Alice"); // Possible via une méthode publique.
// echo $person->getName();   // Possible via une méthode publique.

// //exemlpe 



class Fruit {
  public $name;
  public $color;

  function __construct($name,$color) {
    $this->name = $name;
    $this->color =$color;
  }
  function get_name() {
    return $this->name;

  }
  function get_color(){
    return $this->color;
  }
}

$apple = new Fruit("Apple","red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

// encapulation in oop

   class User{

    private  $name;

     public function  setName($name){
        $this->name =  $name;
     }
     public function getName(){
        return $this->name;
     }
}
$user=new User();
$user->setName("khadija");
 echo $user->getName();




 // ABSRUCTION  
 abstract class parentClass{
    abstract public function SomeMethode();
 }

?>


