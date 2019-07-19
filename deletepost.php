<?php  

include 'application/connexion_bdd.php';

$req_delete = $pdo->prepare('
							DELETE from post 
							where Id= ?'
							);

$resultat = $req_delete->execute(array($_GET['id']));

echo $resultat;

header('location:admin.php');



?>