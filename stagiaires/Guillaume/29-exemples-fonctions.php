<?php

/* 
Pour créer une fonction, on utilise le mot clef function 
Suivi du nom de la fonction (règles de nommage des variables sans le &)
suivie des (){}
*/

function helloWorld(){
    return "Hello World !";
}

// une fonction n'est exécutée que lorsqu'on l'appelle 

echo helloWorld(); 

function lanceDe(int $faces):array|bool{
    $array = array();
    for($i=1; $i<=$faces;$i++){
        $array[$i] = $i;
     
  }
  return $array;
}

var_dump(lanceDe(6));