<?php

include 'application/connexion_bdd.php';



if(isset($_GET['id']))
{
	//requete pour afficher l'article 

	$req_post = $pdo->prepare('  SELECT  p.Title,  p.Contents,  p.CreationTimestamp, a.LastName, a.FirstName
								 FROM post p 
								 INNER JOIN author a 
								 ON a.Id = p.Author_Id 
								 WHERE p.Id = ?'

							 );

	$req_post->execute(array($_GET['id']));

	$post = $req_post->fetch();

	//requete pour afficher les commentaire associé à cette article

	$req_commnt = $pdo->prepare('
							SELECT NickName,Contents,CreationTimestamp FROM comment WHERE 
							Post_Id= ?'
						);

	$req_commnt->execute(array($_GET['id']));

	$comments = $req_commnt->fetchAll();

	//requete d'insertion à la base de données 


}









$template = "show_post";

include 'layout.phtml';

