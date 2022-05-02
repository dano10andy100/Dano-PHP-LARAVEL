<?php

class personne{
    public $nom;
    public $prenom;
    public $age;

    public function __construct($nom, $prenom, $age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function danser(){
        echo "$this->nom est entrain de danser".PHP_EOL;
    }
    public function fullname(){
        return sprintf("%s %s", $this->nom,$this->prenom.PHP_EOL);
    }
}

$roc = new personne('roc', 'reyji',250);
$laguerre = new personne('andy', 'dano',168);
$laguerre->danser();
$nomcompletL = $laguerre->fullname();
$nomcompletr = $roc->fullname();

echo $nomcompletL;
echo $nomcompletr;
