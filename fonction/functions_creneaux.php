<?php

function demander_creneaux(){
    while (true) {
        # code...
        $creneau_horaire[] = demander_creneau();
        if(repondre_oui_non('Voulez vous continuer') == false){
            return $creneau_horaire;
        }
    }
    
}

function demander_creneau( $phrase = 'Veuillez entrer un creneau horaire :'){


        while(true){
            $debut = (int)readline("Heure de debut du creneau horaire: ");
            if($debut >= 0 && $debut <=23){
                break;
            }
        }
        while(true){
            $fin = (int)readline("Heure de fin du creneau  horaire: ");
            if($fin >=0 && $fin <= 23 && $fin > $debut ) {
                break;
            }
        }
       return [$debut, $fin]; 
   
}