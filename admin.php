<?php
include 'application/connexion_bdd.php';

$req = $pdo->query(
					'SELECT p.Id, p.Title, p.Contents, a.FirstName , a.LastName, c.Name
					FROM post p 
					INNER JOIN author a 
					ON a.Id = p.Author_Id 
					INNER JOIN category c
					ON c.Id = p.Category_Id
					ORDER by p.id DESC'

				  );


$listPosts = $req->fetchAll();





$template = "admin";

include 'layout.phtml';