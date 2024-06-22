<?php
	try {
		$db = new PDO('mysql:host=localhost; dbname=curriculum', 'root', '');
	}
	catch (PDOException $e)
	{
		die('Erreur : '.$e->getMessage());
	}
?>
