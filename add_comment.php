<?php

include 'application/connexion_bdd.php';

if(isset($_POST['ajouter']))
{
	if(!empty($_POST['pseudo']) && !empty($_POST['commentaire']) && !empty($_POST['idpost']))
	{
		
		
		$req_add_comnt = $pdo->prepare('insert into comment values("",?,?,NOW(),?)');
		

		$req_add_comnt->execute(array($_POST['pseudo'],$_POST['commentaire'],$_POST['idpost']));

	}
	else
	{
		echo "aucune input envoye";
	}
}
else 

echo "donnees post non envoye";

header('location:show_post.php?id='.$_POST['idpost']);







