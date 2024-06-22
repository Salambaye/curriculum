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
			<h2 style="background: darkslategray; padding-right:150px" > Bienvenue cher élève/parent </h2>
		</div>
	</div>
</nav>

<div style="padding-right: 40px">
	<button><a href="http://127.0.0.1/curriculum/index.php/eleve/C_eleve/retour">Retour</a></button></br>
	<!--button><a href="http://127.0.0.1/curriculum/index.php/welcome">Retour à la page d'accueil</a></button-->
</div>

<div style="padding-right: 100px">
	<a href="../../../assets/cours/programme classe de tle L.pdf">Programme de la classe de terminale L : Télécharger le fichier</a>
	<a href="../../../assets/cours/programme classe de tle S.pdf">Programme de la classe de terminale S : Télécharger le fichier</a>

</div>



	<style>
		body{
			background-image: url('https://sunugox.info/wp-content/uploads/2017/10/ed10-735x400.jpg');
			background-size: 100%;
		}
		a { color: #FF0000;
			display:block;                /* Transformation en block */
			min-width: 50px;             /* Largeur minimale des liens */
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
			transition: all 1s ;          /* Ajout des effets de transition */} /* CSS link color */
		}
		 a:hover {
			background-color: #ed2794;
			color: #ffe843;
			border-color: #ffe843;
		}

	</style>
