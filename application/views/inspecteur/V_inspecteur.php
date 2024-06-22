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
<body>
	<nav class="btn-info btn-primary">


		<div class="btn btn-primary"  style="width: 1500px">
			<div class="container-header">
				<h2 style="background: darkslategray; padding-right:150px" > Bienvenue cher inspecteur </h2>
			</div>
		</div>
	</nav>

	<div style="padding-right: 40px">
		<button><a href="http://127.0.0.1/curriculum/index.php/inspecteur/C_inspecteur">Retour</a></button></br>
		<button><a href="http://127.0.0.1/curriculum/index.php/welcome">Retour à la page d'accueil</a></button>
	</div>

	<div class="container">
		<?php if ($msg = $this->session->flashdata('msg')) : ;?>
			<?php echo $msg;?>
		<?php endif;?>
		<h2> Voir toutes les normes</h2>
		<h4 style="color: darkblue"><i>Vous pouvez ajouter,consulter,modifier ou supprimer une ou plusieurs normes</i> </h4>

		<?php echo anchor('inspecteur/C_inspecteur/ajouter_norme', 'Ajouter une norme', ['class'=>'btn btn-primary'] ); ?>
		<table class="table table-hover">
			<thead>
			<tr>
				<th scope="col">id</th>
				<th scope="col">Cycle</th>
				<th scope="col">Série</th>
				<th scope="col">Classe</th>
				<th scope="col">Matière</th>
				<th scope="col">Description</th>
				<th width="200px" scope="col">Date d'ajout</th>
				<th scope="col">Action</th>
			</tr>
			</thead>
			<tbody>
				<?php if (count($normes)):?>
					<?php foreach ($normes as $norme) :;?>
						<tr class="table-active">
							<th scope="row"><?php echo $norme->id;?></th>
							<!--td></td-->
							<td><?php echo $norme->cycle;?></td>
							<td><?php echo $norme->serie;?></td>
							<td><?php echo $norme->classe;?></td>
							<td><?php echo $norme->matiere;?></td>
							<td width="500px"><?php echo $norme->description;?></td>
							<td><?php echo $norme->date_ajout;?></td>
							<td style="width: 300px">
								<?php echo anchor("inspecteur/C_inspecteur/consulter_norme/{$norme->id}", 'Consulter', ['class'=>'label label-primary'] ); ?>
								<?php echo anchor("inspecteur/C_inspecteur/modifier_norme/{$norme->id}", 'Modifier', ['class'=>'label label-success'] ); ?>
								<?php echo anchor("inspecteur/C_inspecteur/supprimer_norme/{$norme->id}", 'Supprimer', ['class'=>'label label-danger'] ); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				<?php else:?>
					<tr>
						<td>No records found!</td>
					</tr>

				<?php endif;?>
			</tbody>
	</div>
</html>


<style>
		body{
			background-color: bisque;
		}
	</style>


</body>




