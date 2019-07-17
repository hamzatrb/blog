<?php
include 'application/connexion_bdd.php';


$req = $pdo->query('SELECT p.Id,p.Title, p.Contents,p.CreationTimestamp,a.FirstName, a.LastName
					from post p 
					INNER JOIN author a 
					ON p.Author_Id = a.Id
					ORDER BY  p.Id DESC');

$posts = $req ->fetchAll();

//var_dump($posts);


$template = "index";

include 'layout.phtml'; 


?>