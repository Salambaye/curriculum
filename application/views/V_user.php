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
<body style="background-image: url('https://thumbs.dreamstime.com/z/graphisme-de-livres-cahiers-3053334.jpg');background-size: 100%">

	<nav class="btn-info btn-primary">


		<div class="btn btn-primary"  style="width: 1500px">
			<img src="<?php echo base_url();?>assets/images/logo ministère.png" alt="" style="width:150px;height: 100px; margin-right: 300px">
			<div class="btn-group" role="group" aria-label="Basic example" style="padding-right: 250px">
				<button type="button" class="btn btn-success">Prescolaire</button>
				<button type="button" class="btn btn-info">Elementaire</button>
				<button type="button" class="btn btn-warning">Moyen</button>
				<button type="button" class="btn btn-danger">Secondaire</button>
			</div>
			<img src="<?php echo base_url();?>assets/images/drapeau.png" alt="" style="height:100px;width: 150px; margin-right: 200px">

			<div class="container-header">
				<h2 style="background: #1f1d1d" > Curriculum de l'éducation nationale </h2>
			</div>

	</nav>

	<div style="padding:5%">
		<!--?php echo anchor('agent/C_agent', 'Agent du niveau central', ['class' => 'btn btn-primary btn-lg']);?-->
		<?php echo anchor('inspecteur/C_inspecteur', 'Je suis inspecteur', ['class' => 'btn btn-success btn-lg']);?>
		<?php echo anchor('administration/C_admin', 'Membre de l\'administration', ['class' => 'btn btn-danger btn-lg']);?>
		<?php echo anchor('enseignant/C_enseignant', 'Je suis enseignant', ['class' => 'btn btn-info btn-lg']);?>
		<?php echo anchor('eleve/C_eleve', 'Je suis élève/parent', ['class' => 'btn btn-warning btn-lg']);?>
		<?php echo anchor('welcome', "Retour à la page d'accueil", ['class' => 'btn btn-primary btn-lg']);?>

	</div>





</body>



</html>
