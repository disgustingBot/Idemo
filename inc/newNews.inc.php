<?php
function c_log($data){
	echo "<script>console.log(".$data.")</script>";
}
if (isset($_POST['submit'])) {
	include 'dbh.inc.php';

  $ttl = $_POST['ttl'];
  // $img = $_POST['img'];
  $fch = $_POST['fch'];
  $cnt = $_POST['cnt'];
  $asy = $_POST['asy'];
	$fle = $_FILES['fl'];
	// var_dump($fle);



	$fld = '/img/noticias/';
	$fin = $fld . basename($fle['name']);

	// move_uploaded_file($_FILES['fl']['tmp_name'], $fichero_subido);
	var_dump($fin);

	// echo '<pre>';
	if (move_uploaded_file($fle['tmp_name'], $fin)) {
	    echo "El fichero es válido y se subió con éxito.\n";
			$qry=$conn2->prepare("INSERT INTO news (ttl, img, cnt, fch, asy) VALUES ('$ttl', '$fin', '$cnt', '$fch', '$asy');"); $qry->execute();
			header("Location: ../admin/index.php?newNews=success");
	} else {
	    echo "¡Posible ataque de subida de ficheros!\n";
	}

	// echo 'Más información de depuración:';
	// print_r($_FILES);

	// print "</pre>";




  // $qry=$conn2->prepare("INSERT INTO news (ttl, img, cnt, fch, asy) VALUES ('$ttl', '$img', '$cnt', '$fch', '$asy');"); $qry->execute();

	// $header = "../admin/index.php?fle=".$fle;
	// $header = "../admin/index.php?ttl=".$ttl."&img=".$img."&fch=".$fch."&cnt=".$cnt."&asy=".$asy;
	// header("Location: $header");
  // header("Location: ../admin/index.php?newNews=success");
	// c_log($ttl);
	// c_log($img);
	// c_log($fch);
	// c_log($cnt);
	// c_log($asy);
}
