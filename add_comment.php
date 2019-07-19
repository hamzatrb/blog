<?php

include 'application/connexion_bdd.php';

//if(isset($_POST['ajouter'])) a cause de ajax
//{
	if(!empty($_POST['pseudo']) && !empty($_POST['commentaire']) && !empty($_POST['idpost']))
	{
		
		
		$req_add_comnt = $pdo->prepare('insert into comment values("",?,?,NOW(),?)');
		

		$req_add_comnt->execute(array($_POST['pseudo'],$_POST['commentaire'],$_POST['idpost']));

		//echo "comment ajouter";

	}
	else
	{
		//echo "aucune input envoye";
	}


	$req = $pdo->prepare('	SELECT * from comment where 


						 	Post_Id = ? 

						');


	$req->execute(array($_POST['idpost']));


	$comment = $req->fetchAll();

	$comments = json_encode($comment);// pour convertir le tableau en format json 

	echo $comments;


//}
//else 

//echo "donnees post non envoye";

//header('location:show_post.php?id='.$_POST['idpost']);







