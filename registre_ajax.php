<?php

include 'application/connexion_bdd.php';


if(!empty($_POST['titre']) && !empty($_POST['contenu']))

{

$req = $pdo->prepare('insert into ajax values("",?,?)');


$req->execute(array($_POST['titre'],$_POST['contenu']));


echo "succes";
	
}
else 

echo "false";





?>