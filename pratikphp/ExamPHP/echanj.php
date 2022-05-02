<?php

// $enregistrement=[];
// $action = null;

// while(true){
//     $id = readline('antre ID : ');
//     $name = readline('antre name: ');
//     $age= readline('antre laj');

//     if($id=='' || $name=='' || $age == "" ){
//         echo "gen yn pwob nou pap f anyen";
//     }else{
//         $enregistrement[] = [$id, $name, $age];
//         $action = readline('wap anrejistre yn lot moun..: ');
//         if($action == 'n'){
//             break;
//         }
//     }

// }

//($enregistrement);

 $enregistrement = [
     [
         'id' => 001,
         'name'=> "dano",
         'age'=> 100
     ],
     [
        'id' => 002,
        'name'=> "andy",
        'age'=> 1000
     ],
     [
        'id' => 00,
        'name'=> "lag",
        'age'=> 10000
     ]
     ];

     $divize = array_chunk($enregistrement, 2);
     print_r($divize);

$nom = array_column($enregistrement, "name");
print_r($nom);


?>