

<!DOCTYPE html>
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
					<h2 style="background: darkslategray; padding-right:150px" > Page réservée aux enseignants </h2>
				</div>
			</div>
		</nav>
		<div style="padding-right: 40px">
			<button><a href="http://127.0.0.1/curriculum/index.php/enseignant/C_enseignant/retour">Retour</a></button>
		</div>

		<?php
		//var_dump($_FILES);
		require 'includes/connect_db.php';

		if (!empty($_FILES)){
			$file_name = $_FILES['fichier']['name'];
			$file_extension =strrchr($file_name, ".");

			$file_tmp_name = $_FILES['fichier']['tmp_name'];
			$file_dest = 'assets/cours/'.$file_name;
			$extensions_autorisees = array('.pdf', '.PDF');

			if (in_array($file_extension, $extensions_autorisees)){

				if (move_uploaded_file($file_tmp_name, $file_dest)){
					$req = $db->prepare('INSERT INTO cours(name, file_url) VALUES(?,?)');
					$req->execute(array($file_name, $file_dest));
					echo "Fichier enregistré avec succés";
				}
				else
				{
					echo "Une erreur est survenue lors de l'envoi du fichier";
				}
			}
			else
			{
				echo 'Seuls les fichiers PDF sont autorisés';
			}



		}
		?>



		<div class="col-lg-8">
			<h1> Ajouter un cours</h1>
				<h4 style="color: red"> <i>Seuls les fichiers d'extension PDF sont autorisés</i></h4>
			<form method="POST" enctype="multipart/form-data">
				<input type="file" name="fichier"/> <br>
				<input type="submit" name="Enregistrer le fichier"/>
			</form>
		</div>

		<div class="col-lg-8">

			<h1> Cours enregistrés</h1>
			<?php

				$req = $db->query('SELECT name, file_url FROM cours');
				while ($data = $req->fetch()){
					echo $data['name'].' : Télécharger '.'<a href= "../../../'.$data['file_url'].'">'.$data['name'].'</a> </br>';
				}
			?>
		</div>

		<style>
			body{
				background-color: antiquewhite;
			}


		</style>

		<?php

		?>


	</body>
</html>

