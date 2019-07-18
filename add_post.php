<?php

include 'application/connexion_bdd.php';

if(isset($_POST['ajouter']))

{
	if (!empty($_POST['titre']) && !empty($_POST['article']) && !empty($_POST['auteur']) && !empty($_POST['categorie']))
	{

		$req = $pdo->prepare('insert into post values ("",?,?,NOW(),?,?)');


		$req->execute(array($_POST['titre'],$_POST['article'],$_POST['auteur'],$_POST['categorie']  ));

	}
	

  
}

//liste des categories

$req_categorie = $pdo->query('
								SELECT * FROM category

				            ');

$categories = $req_categorie->fetchAll();


//liste des auteurs

$req_author = $pdo->query('
							SELECT * FROM author
						 ');

$authors = $req_author->fetchAll();


$template = "add_post";

include 'layout.phtml';







?>


