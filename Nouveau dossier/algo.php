<?php

var_dump($_POST);
// si la TOTOest côché alors on affiche ouvrir//
// si (TOTO ET TATA  et est côché) alors:echo "TOTO et TATA sont cochés";
// sisnon si (TOTO ou TATA est côché) alors on verifie si c'est TOTO ou si TATA 
// si (TOTO est côché) alors on affiche le texte de TOTO
// sinon  on affiche le text de TATA 
// sinon on affiche aucun des deux//
if(isset($_POST["toto"]) && isset ($_POST ["tata"])){
    echo "toto et tata sont côché";
}
    else if (isset($_POST["toto"]) || isset($_POST ["tata"])){
        if(isset ($_POST["toto"])){
            echo "toto est côché";
        }
        else{
            echo "tata est côché";
        }
    } 
    else{ echo "Aucun des deux n'a été côché";
    }   
?>