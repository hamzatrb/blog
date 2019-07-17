<?php //fichier connexion_bdd.php
$dns    	= 'mysql:host=localhost;dbname=blog';
$user  		= 'root';
$passwd		= '';

$pdo = new PDO

			($dns, $user, $passwd,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);


$pdo->exec('SET NAMES utf8');





?>