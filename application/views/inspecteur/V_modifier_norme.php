<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dématérialisation du curriculum</title>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>" ></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<body style="background-color: bisque">

		<nav class="btn-info btn-primary">


			<div class="btn btn-primary"  style="width: 1500px">
				<div class="container-header">
					<h2 style="background: darkslategray; padding-right:150px" > Page de modification des normes</h2>
				</div>
			</div>
		</nav>

		<?php echo form_open("inspecteur/C_inspecteur/change_norme/{$norme->id}", ['class'=>'form-horizontal']); ?>
		<fieldset>
			<legend style="font-family: 'Arial Black'; font-size: xx-large">Modifier la norme</legend>
			<div class="form-group">
				<label for="inputEmail" class="col-md-2 control-label">Cycle</label>
				<div class="col-xs-5">
					<?php echo form_input(['name'=>'cycle', 'placeholder'=>'Cycle', 'class'=>'form-control', 'value'=>set_value('cycle', $norme->cycle)]);?>
				</div>
				<div class="col-xs-5">
					<?php echo form_error('cycle', '<div class="text-danger">', '</div>');?>

				</div>
			</div>


			<div class="form-group">
				<label for="inputEmail" class="col-md-2 control-label">Série</label>
				<div class="col-xs-5">
					<?php echo form_input(['name'=>'serie', 'placeholder'=>'Serie', 'class'=>'form-control', 'value'=>set_value('cycle', $norme->serie)]);?>
				</div>
				<div class="col-xs-5">
					<?php echo form_error('serie', '<div class="text-danger">', '</div>');?>

					<h5 class="text-danger">Le champ Série est obligatoire, mettez aucune si le cycle est différent de secondaire</h5>'
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-md-2 control-label">Classe</label>
				<div class="col-xs-5">
					<?php echo form_input(['name'=>'classe', 'placeholder'=>'Classe', 'class'=>'form-control', 'value'=>set_value('cycle', $norme->classe)]);?>
				</div>
				<div class="col-xs-5">
					<?php echo form_error('classe', '<div class="text-danger">', '</div>'); ?>
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="col-md-2 control-label">Matiere</label>
				<div class="col-xs-5">
					<?php echo form_input(['name'=>'matiere', 'placeholder'=>'Matiere', 'class'=>'form-control', 'value'=>set_value('cycle', $norme->matiere)]);?>
				</div>
				<div class="col-xs-5">
					<?php echo form_error('matiere', '<div class="text-danger">', '</div>'); ?>
				</div>
			</div>


			<div class="form-group">
				<label for="textArea" class="col-md-2 control-label">Description</label>
				<div class="col-xs-5">
					<?php echo form_textarea(['name'=>'description', 'placeholder'=>'Description', 'class'=>'form-control', 'value'=>set_value('cycle', $norme->description)]);?>
					<?php echo form_error('description', '<div class="text-danger">', '</div>');?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-10 col-md-offset-2">
					<?php echo  anchor('inspecteur/C_inspecteur/retour', 'Retour', ['class'=>'btn btn-primary']); ?>
					<?php echo  form_submit(['name'=>'submit', 'value'=>'Enregistrer les modifications', 'class'=>'btn btn-primary']); ?>

				</div>
			</div>
		</fieldset>
		<?php echo form_close(); ?>





</body>
</html>

