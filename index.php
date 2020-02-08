<?php
	if (isset($_GET['par'])) {
		if(file_exists("img/$_GET[par]")){
		unlink("img/$_GET[par]");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Galería php</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-3">
		<div class="page-header text-center">
		  <h1>Galería de imágenes <small>con PHP</small></h1>
		  <h2><small>Proyecto de los 3 Mosqueteros</small></h2>
		</div>
	</div>
</div>		
		
<div class=row>
	<div class="col-md-5 col-md-offset-3">
		<form enctype="multipart/form-data" method="post" action="upload.php" class="form-group">
			<div class="form-group">
				<p>Elige un archivo
				<input type="file" name="user-file"></p>
				<div class="helper-text">Elige una imágen jpg (máximo 600kb)</div>
				<button type="submit" class="btn btn-primary">Cargar</button>
				<div class="helper-text">
					<small>
						<?php 
						isset($_GET['msj']) ? print $_GET['msj'] : print '';
						 ?>
					 </small>
				</div>
			</div>
		</form>
	</div>
</div>
<hr>
<div class="col-md-12">
		
	<?php
		$patron='%\.(gif|jpe?g|png)$%i';
		$imgs = dir('img');
		while (($img = $imgs->read()) !== false) {
		
			if ( preg_match($patron, $img ) === 1 ) {
				echo "<a href='index.php?par=$img'> <img src='img/$img' class='img-thumbnail'></a>"; 
			}
		}
	?>
		
</div>

</body>
</html>