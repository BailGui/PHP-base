<?php
/*
qui affiche suivant un chiffre au hasard entre 0 et 10, vous affiche : Si il est de 0 à 3 : EXACTEMENT : "{chiffre} : Nul, étudie la prochaine fois", Si de 4 à 5 : "{chiffre} : Peut mieux faire" , Si de 6 à 7 : "{chiffre} : Bien", Sinon "{chiffre} : Très bien"
 */

$number = mt_rand(0, 10);
$b = "{".$number."} : ";
$message = $number < 4 ? "$b EXACTEMENT" : ($number < 6 ? "$b Peut mieux faire" : ($number < 8 ? "$b Bien" : "$b Très bien"));

echo $message;