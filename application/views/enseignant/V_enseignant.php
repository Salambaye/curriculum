<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
	<title>Dématérialisation du curriculum</title>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>" ></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<body>

	<nav class="btn-info btn-primary">


		<div class="btn btn-primary"  style="width: 1500px">
			<div class="container-header">
				<h2 style="background: darkslategray; padding-right:150px" > Bienvenue cher enseignant </h2>
			</div>
		</div>
	</nav>

	<div style="padding-right: 40px">
		<button><a href="http://127.0.0.1/curriculum/index.php/enseignant/C_enseignant">Retour</a></button></br>
		<button><a href="http://127.0.0.1/curriculum/index.php/welcome">Retour à la page d'accueil</a></button>
	</div>

	<!--div style="padding: 50px"-->
		<!--?php echo anchor('enseignant/C_enseignant/voir_normes', 'Etudier les normes', ['class' => 'btn btn-success btn-lg']); ?-->
		<!--?php echo anchor('enseignant/C_enseignant/ajout_cours', 'Etablir les contenus', ['class' => 'btn btn-primary btn-lg']);?-->
	<!--/div-->

	<div style="padding: 50px">
		<ul class="menu">
			<li>
				<a href="C_enseignant/voir_normes">Etudier les normes</a>
			</li>
			<li>
				<a href="C_enseignant/ajout_cours">Etablir les contenus</a
			</li>
		</ul>
	</div>




	<style>
		body{
			background-image: url('https://sunugox.info/wp-content/uploads/2017/10/ed10-735x400.jpg');
			background-size: 100%;
		}

		.menu {
			display: flex;              /* Transformation en flexbox */
			padding:0;                  /* Suppression des marges internes */
			/*background-color: #ccc;     /* Ajout de la couleur d'arrière-plan */
			justify-content: center     /* Alignements des liens dans le menu */
		}

		.menu li {
			list-style-type: none ;       /* Suppression des puces */
		}

		.menu a {
			display:block;                /* Transformation en block */
			min-width: 500px;             /* Largeur minimale des liens */
			font-size: 25px;
			height: 50px;
			margin: 0.3rem;               /* Marges externes (1 valeurs = 4 directions) */
			padding: 0.4rem 0;            /* Marges internes (2 valeurs = haut/bas et gauche/droite)*/
			text-align: center;           /* Centrage du texte */
			background-color: #1ABC9C;    /* Couleur d'arrière-plan */
			color: #fff;                  /* Couleur du texte */
			text-decoration: none;        /* Suppression du soulignement */
			border: 1px solid #fff;       /* Ajout d'une bordure */
			border-radius: 4px;           /* Arrondis des bordures */
			transition: all 1s ;          /* Ajout des effets de transition */
		}

		.menu a:hover {
			background-color: #ed2794;
			color: #ffe843;
			border-color: #ffe843;
		}


	</style>


