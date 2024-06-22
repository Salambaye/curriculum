<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dématérialisation du curriculum</title>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>" ></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<div id="container" style="background-image: url('https://thumbs.dreamstime.com/z/graphisme-de-livres-cahiers-3053334.jpg')">
	<!-- zone de connexion -->

	<h2>Page d'authentification</h2>

	<form method="post">

		<label><b>IEN</b></label>
		<input type="text" placeholder="Entrer l'identifiant" name="ien" id="IEN" required>

		<label><b>Mot de passe</b></label>
		<input type="password" placeholder="Entrer le mot de passe" name="password" required>

		<div>
			<input type="submit" id='submit' value='Valider' name="valider" >
			<?php echo anchor('Welcome/se_connecter', 'Retour', ['class'=>'btn btn-info btn-lg']);?>
		</div>
	</form>
</div>

<style>
	body{
		background-image: url("https://previews.123rf.com/images/serezniy/serezniy1108/serezniy110800242/10164510-des-livres-des-cahiers-et-des-crayons-isol%C3%A9-sur-blanc.jpg");
		background-size:50%;
	}

	p {
		margin-top: 0px;
	}


	em {
		font-weight: bold;
		font-style: normal;
		color: #f00;
	}

	#container{
		width:350px;
		margin:0 auto;
		margin-top:10%;
	}
	/* Bordered form */
	form {
		width:100%;
		padding: 30px;
		border: 1px solid #f1f1f1;
		background: #fff;
		box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
	}
	#container h1{
		width: 38%;
		margin: 0 auto;
		padding-bottom: 10px;
	}

	/* Full-width inputs */
	input[type=text], input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}

	/* Set a style for all buttons */
	input[type=submit] {
		background-color: #53af57;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 50%;
	}
	input[type=submit]:hover {
		background-color: white;
		color: #53af57;
		border: 1px solid #53af57;
	}
</style>







