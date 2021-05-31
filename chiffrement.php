<?php
$alphabet ="abcdefghijklmnopqrstuvwxyz";
$messageAChiffer = $_POST["message"];
$cle = $_POST["decalage"];
$longueurAlphatbet = strlen ($alphabet);

$longueurDuMessageClair = strlen ($messageAChiffer);
$chainechiffree = [];

// boucle pour//
for($i=0; $i<$longueurDuMessageClair; $i++){

    $j = strpos($alphabet, substr($messageAChiffer, $i, 1));
    $j += $cle; 

    //echo $j;//
    while($j+1>$longueurAlphatbet){
        $j = $j -$longueurAlphatbet;

    }
    
    //echo $alphabet[$j];

    $chainechiffree[$i] = $alphabet[$j];
}

// Transforme le tableau en chaine de carractères //
    $new = implode($chainechiffree);

    
    setcookie("resultat", $new, time() + 5 , "/");
    header ('location:http://cesar.test');

?>