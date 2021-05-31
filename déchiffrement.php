<?php
$alphabet ="abcdefghijklmnopqrstuvwxyz";
$messageAChiffer = $_POST["message2"];
$cle = $_POST["decalage2"];
$longueurAlphatbet = strlen($alphabet);

$longueurDuMessageClair = strlen($messageAChiffer);
$chainechiffree = [];

// boucle pour//
for($i=0; $i<$longueurDuMessageClair; $i++){

    $j = strpos($alphabet, substr($messageAChiffer, $i, 1));
    $j -= $cle; 

    
    //echo $alphabet[$j];

    $chainechiffree[$i] = $alphabet[$j];
}

// Transforme le tableau en chaine de carractères //
    $new = implode($chainechiffree);

    
    setcookie("resultat2", $new, time() + 5 , "/");
    setcookie("cle2", $cle, time() + 5 , "/");
    setcookie("msg2", $messageAChiffer, time() + 5 , "/");

    header ('location:http://cesar.test');

?>