<?php
function validar($file){
	if($file['user-file']['type'] == 'image/jpeg' || $file['user-file']['type'] == 'image/png') {
	} else {
		return false;
	}
	if ($file['user-file']['size'] > 600000) {
		return false;
	}
	return true;
}

if (validar($_FILES)) {
	$path = 'img/';
	$file = $path.basename($_FILES['user-file']['name']);
	
	if (move_uploaded_file($_FILES['user-file']['tmp_name'], $file)) {
		//header('location: index.php');
		echo "Funciona wachin";
	}
}else{
	echo "Error no anda";
}


//var_dump($_FILES);
?>