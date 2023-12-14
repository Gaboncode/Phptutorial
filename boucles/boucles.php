<?php

/*
1- remplir les créneaux horaires

*/

$creneaux =[];
//$testOK =true; pour démarrer la boucle while qui suit, on part du principe qu'il veut remplir au moins une fois;            

while(true) {
    $debut = (int)readline("entrer l'heure du debut : ");//on demande l'heure de debut
    $fin = (int)readline("entrer l'heure de fin ");//on demande l'heure de fin
    if($debut >= $fin) {// on doit s'assurer que l'horaire de fin est toujours plus grande que celle du debut
        echo "sorry, l'heure de debut doit être inferieure à l'heure de fin , veuillez recommencer \n";
/*         $debut = (int)readline("entrer l'heure du debut : ");
        $fin = (int)readline("entrer l'heure de fin "); */
    }else {
        $creneaux[] = [$debut,$fin];
        $test = true;
      while($test){
            $more = readline("inserer un nouveau creneau N/n pour NON : ");
            if($more === 'N' || $more ==='n' ){
                $test = false;
            }

        }
       //$more = readline("d'autres creneaux horaires, inserer o pour OUI et n pour NON : ");//s'avoir si on veut encore inserer un nouveau creneau
        if($more === 'n' || $more === 'N'){
            break;
        }
    }
}

/* $horaire =(int) readline("à quelle heure voulez vous allez faire vos courses : ");
$val =false;
foreach($creneaux as $creneau ){
    if($horaire>=$creneau[0] && $horaire<=$creneau[1]){
        $val = true;
        break;
    }

}
if($val){
    echo "Super, le magasin est ouvert ";
}
else{
    echo " sorry, le magasin est fermé ";
} */
echo "les magasin est ouvert de ";

foreach($creneaux as $key => $creneau){
    if($key > 0){
        echo "et de ";
    }
    echo "{$creneau[0]}h à {$creneau[1]}h ";
}

?>