<?php
if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';

	$pky = $_POST['pky'];
	$ttl = $_POST['ttl'];
	$img = $_POST['img'];
	$fch = $_POST['fch'];
	$cnt = $_POST['cnt'];
	$asy = $_POST['asy'];
	$del = 0;
	if (isset($_POST['del'])) {
		$del = 1;
	}

	if (isset($_FILES['fl'])) {
		// echo "hay un archivo";
		$fle = $_FILES['fl'];
		$fld = '../img/noticias/';
		$fin = $fld . basename($fle['name']);
		if (move_uploaded_file($fle['tmp_name'], $fin)) {
			// echo "El fichero es válido y se subió con éxito.\n";
			$fin = substr($fin, 2);
			try {
				$qry=$conn2->prepare(
					"UPDATE
					news
					SET
					ttl = '$ttl', img = '$fin', fch = '$fch', cnt = '$cnt', asy = '$asy', del = $del
					WHERE (
					pky=$pky
				);");
				$qry->execute();
				header("Location: ../admin/index.php?editNews=success");
			} catch (PDOException $e) {echo 'Error: '.$e->getMessage()." file: ".$e->getFile()." line: ".$e->getLine(); exit;}
		} else {
				echo "¡Posible ataque de subida de ficheros!\n";
		}
	} else {
		// echo "NO hay un archivo";
		try {
			$qry=$conn2->prepare(
				"UPDATE
				news
				SET
				ttl = '$ttl', fch = '$fch', cnt = '$cnt', asy = '$asy', del = $del
				WHERE (
				pky=$pky
			);");
			$qry->execute();
			header("Location: ../admin/index.php?editNews=success");
		} catch (PDOException $e) {echo 'Error: '.$e->getMessage()." file: ".$e->getFile()." line: ".$e->getLine(); exit;}
	}}
