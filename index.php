<form method="POST" action="chiffrement.php">
<input type= "text" name="message"/>
<input type= "number" min="0" max="25" value="3" name="decalage"/>
<input type= "text" value="<?php echo $_COOKIE["resultat"]; ?>" disabled/>
<input type="submit" value="envoyer">
</form>

<form method="POST" action="déchiffrement.php">
<input type= "text" value="<?php echo $_COOKIE["msg2"]; ?>" name="message2"/>
<input type= "number" min="0" max="25" value="<?php echo $_COOKIE["cle2"]; ?>" name="decalage2"/>
<input type= "text" value="<?php echo $_COOKIE["resultat2"]; ?>" disabled/>
<input type="submit" value="envoyer">
</form>

