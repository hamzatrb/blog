<?php

include 'application/connexion_bdd.php';

//requete de selection pour afficher l'article dans le formulaire (value)

$req = $pdo->prepare('SELECT Id,  Title,Contents, Author_Id, Category_Id
					  FROM post 
					  WHERE Id = ?'
					);

$req->execute(array($_GET['id']));

$edit_post = $req->fetch();



//requete update de modification 

if(isset($_POST['ajouter']))

{

	$update_post = $pdo->prepare('	UPDATE post
									SET Title = ?, Contents = ?, Author_Id = ?, Category_Id = ?
									WHERE Id = ?  '
								);		


	$update_post->execute(array(
									$_POST['titre'],
									$_POST['article'],
									$_POST['auteur'],
									$_POST['categorie'],
									$_GET['id']
							   )
						 );

header('location:edit_post.php?id='.$_GET['id']);

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



$template = 'edit_post';

include 'layout.phtml';



?>