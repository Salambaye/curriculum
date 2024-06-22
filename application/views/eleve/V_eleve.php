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
		<button><a href="http://127.0.0.1/curriculum/index.php/eleve/C_eleve">Retour</a></button></br>
		<button><a href="http://127.0.0.1/curriculum/index.php/welcome">Retour à la page d'accueil</a></button>
	</div>

	<div style="padding: 50px">
		<ul id="menu-demo2">
			<li><a href="#">PRESCOLAIRE</a>
				<ul>
					<li><?php echo anchor('eleve/C_eleve/psection', 'Petite Section');?></li>
					<li><?php echo anchor('eleve/C_eleve/msection', 'Moyenne Section');?></li>
					<li><?php echo anchor('eleve/C_eleve/gsection', 'Grande Section');?></li>


				</ul>
			</li>
			<li><a href="#">ELEMENTAIRE</a>
				<ul>
					<li><?php echo anchor('eleve/C_eleve/gestion_ci', 'CI');?></li>
					<li><?php echo anchor('eleve/C_eleve/gestion_cp', 'CP');?></li>
					<li><?php echo anchor('eleve/C_eleve/gestion_ce1', 'CE1');?></li>
					<li><?php echo anchor('eleve/C_eleve/gestion_ce2', 'CE2');?></li>
					<li><?php echo anchor('eleve/C_eleve/gestion_cm1', 'CM1');?></li>
					<li><?php echo anchor('eleve/C_eleve/gestion_cm2', 'CM2');?></li>
				</ul>
			</li>
			<li><a href="#">MOYEN</a>
				<ul>
					<li><?php echo anchor('eleve/C_eleve/gestion_sixieme', 'Sixième');?></li>
					<li><?php echo anchor('eleve/C_eleve/gestion_cinquieme', 'Cinquième');?></li>
					<li><?php echo anchor('eleve/C_eleve/gestion_quatrieme', 'Quatrième');?></li>
					<li><?php echo anchor('eleve/C_eleve/gestion_troisieme', 'Troisième');?></li>
				</ul>
			</li>
			<li><a href="#">SECONDAIRE</a>
				<ul>
					<li><?php echo anchor('eleve/C_eleve/gestion_seconde', 'Seconde');?></li>
					<li><?php echo anchor('eleve/C_eleve/gestion_premiere', 'Première');?></li>
					<li><?php echo anchor('eleve/C_eleve/gestion_terminale', 'Terminale');?></li>

				</ul>
			</li>
		</ul>
	</div>

<!--br><br><br>
	<br><br><br>
	<br><br><br-->
	<div style="font-family: 'Helvetica Neue'; background-color: #98dbcc">

		<p><h4>La Direction de l’Éducation Préscolaire (DEP), la Direction de l’Enseignement Moyen et Secondaire Général (DEMSG)
			et la Direction de l' Enseignement élémentaire (DEE) ont pour mission, en collaboration avec les services spécialisés :
			de mettre en œuvre la politique concernant l' enseignement prescolaire, élémentaire, moyen et secondaire en matière de
			programmes, de méthodes, de structures, d'allocation de ressources et effectifs, d’organiser l’animation et le contrôle
			pédagogiques et administratifs de tous les établissements ,  de coordonner les actions entreprises pour ou par ces établissements
			en matière de formation de personnels de l'éducation, de centraliser et de diffuser la documentation, d’exploiter les rapports
			d’animation et de contrôle pédagogiques et administratifs ainsi que les rapports périodiques des établissements d’éducation
			préscolaire en vue de déterminer toutes les actions propres à promouvoir le fonctionnement des établissements.

		</h4></p>

	</div>



	<style>
		body{
			background-image: url('https://sunugox.info/wp-content/uploads/2017/10/ed10-735x400.jpg');
			background-size: 100%;
		}
		#menu-demo2, #menu-demo2 ul{
			padding:0;
			margin:0;
			list-style:none;
			text-align:center;
		}
		#menu-demo2 li{
			display:inline-block;
			position:relative;
			border-radius:8px 8px 0 0;
		}
		#menu-demo2 ul li{
			display:inherit;
			border-radius:0;
		}
		#menu-demo2 ul li:hover{
			border-radius:0;
		}
		#menu-demo2 ul li:last-child{
			border-radius:0 0 8px 8px;
		}
		#menu-demo2 ul{
			position:absolute;
			max-height:0;
			left: 0;
			right: 0;
			overflow:hidden;
			-moz-transition: .8s all .3s;
			-webkit-transition: .8s all .3s;
			transition: .8s all .3s;
			z-index: 1000
		}
		#menu-demo2 li:hover ul{
			max-height:15em;
		}
		/* background des liens menus */
		#menu-demo2 li:first-child{
			background-color: #65537A;
			background-image:-webkit-linear-gradient(top, #65537A 0%, #2A2333 100%);
			background-image:linear-gradient(to bottom, #65537A 0%, #2A2333 100%);
		}
		#menu-demo2 li:nth-child(2){
			background-color: #729EBF;
			background-image: -webkit-linear-gradient(top, #729EBF 0%, #333A40 100%);
			background-image:linear-gradient(to bottom, #729EBF 0%, #333A40 100%);
		}
		#menu-demo2 li:nth-child(3){
			background-color: #F6AD1A;
			background-image:-webkit-linear-gradient(top, #F6AD1A 0%, #9F391A 100%);
			background-image:linear-gradient(to bottom, #F6AD1A 0%, #9F391A 100%);
		}
		#menu-demo2 li:last-child{
			background-color: #CFFF6A;
			background-image:-webkit-linear-gradient(top, #CFFF6A 0%, #677F35 100%);
			background-image:linear-gradient(to bottom, #CFFF6A 0%, #677F35 100%);
		}
		/* background des liens sous menus */
		#menu-demo2 li:first-child li{
			background:#2A2333;
		}
		#menu-demo2 li:nth-child(2) li{
			background:#333A40;
		}
		#menu-demo2 li:nth-child(3) li{
			background:#9F391A;
		}
		#menu-demo2 li:last-child li{
			background:#677F35;
		}
		/* background des liens menus et sous menus au survol */
		#menu-demo2 li:first-child:hover, #menu-demo2 li:first-child li:hover{
			background:#65537A;
		}
		#menu-demo2 li:nth-child(2):hover, #menu-demo2 li:nth-child(2) li:hover{
			background:#729EBF;
		}
		#menu-demo2 li:nth-child(3):hover, #menu-demo2 li:nth-child(3) li:hover{
			background:#F6AD1A;
		}
		#menu-demo2 li:last-child:hover, #menu-demo2 li:last-child li:hover{
			background:#CFFF6A;
		}
		/* les a href */
		#menu-demo2 a{
			text-decoration:none;
			display:block;
			padding:8px 32px;
			color:#fff;
			font-family:arial;
		}
		#menu-demo2 ul a{
			padding:8px 0;
		}
		#menu-demo2 li:hover li a{
			color:#fff;
			text-transform:inherit;
		}
		#menu-demo2 li:hover a, #menu-demo2 li li:hover a{
			color:#000;
		}
	</style>


</body>
