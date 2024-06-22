<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dématérialisation du curriculum</title>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>" ></script>
	<scrpit type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>" ></scrpit>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<body style="background-color: bisque">

		<nav class="btn-info btn-primary">


			<div class="btn btn-primary"  style="width: 1500px">
				<div class="container-header">
					<h2 style="background: darkslategray; padding-right:150px" > Page de consultation des normes</h2>
				</div>
			</div>
		</nav>

		<div style="padding-right: 40px">
			<button><a href="http://127.0.0.1/curriculum/index.php/inspecteur/C_inspecteur/retour">Retour</a></button></br>
		</div>

		<div class="container">

				<h2><?php echo $norme->cycle;?></h2>
				<h2><?php echo $norme->serie;?></h2>
				<h2><?php echo $norme->classe;?></h2>
				<h2><?php echo $norme->matiere;?></h2>
				<h2><?php echo $norme->description;?></h2>
				<h2><?php echo $norme->date_ajout;?></h2>
			</div>
		</div>


</body>
</html>
