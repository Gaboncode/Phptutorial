<?php


/* $mot = readline("entre votre mot :");//parfait

if(strtolower($mot) !== strrev(strtolower($mot))){
    echo "$mot est un palindrome";
}else{
    echo "$mot n'est pas un palindrome";
}

$table = [10, 11, 12, 13];
echo "\n";
echo count($table);
echo "\n";
echo array_sum($table);
echo "\n";
echo array_sum($table)/count($table) ; */

$insultes = ['merde', 'con'];
$phrase = readline("entrez une phrase : ");
foreach($insultes as $insulte){
    //$firstchar = $insulte[0];
    $nbchar = str_repeat('*', strlen($insulte)-1);
    $phrase = str_replace($insulte,  $insulte[0].$nbchar, $phrase);
   
}
echo $phrase;
?> 