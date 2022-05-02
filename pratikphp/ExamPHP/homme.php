

<?php

class homme{

    public $nom;
    public $prenom;
    public $age;
    public $classe;
    public $notes=[];


    public function __construct($nom, $prenom, $age, $notes){
      
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->notes = $notes;

    }


    public function moyenne(){
        $sum = 0;
        foreach($notes as $note){
            $sum = $sum + $note;
        }
        return $sum;
    }
}


$laguerre = new homme('andy', 'dano', 150, [10,20,10]);

// echo $laguerre->nom."\n";
// echo $laguerre->age."\n";
$result = $laguerre->notes;

$sum = array_sum($result);

echo $sum;

?>