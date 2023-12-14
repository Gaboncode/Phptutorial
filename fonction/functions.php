<?php

//declare(strict_types = 1);

/* function bonjour ($prenom = null){
    if($prenom==null){
        return null;
    }
    return $prenom; 
}

$salutation = bonjour('jean');
echo 'bonjour '.$salutation; */

function repondre_oui_non($phrase, $resp=null){

    while(true){
        $resp = readline($phrase . "(o)oui / (n)non ");
        if($resp=='o'){
            return true;
        }
        elseif ($resp=='n'){
            return false;
        }
    }
}


/* $creneaux = demander_creneaux();
var_dump($creneaux); */

function demo(string $param){
    var_dump($param);
}


demo(1.2);

require 'functions_creneaux.php';

?>