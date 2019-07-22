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

	// (ttl, img, fch, cnt, asy) = ('$ttl', '$img', '$fch', '$cnt', '$asy')
	try {
		$qry=$conn2->prepare(
			"UPDATE
			news
			SET
			ttl = '$ttl', img = '$img', fch = '$fch', cnt = '$cnt', asy = '$asy', del = $del
			WHERE (
			pky=$pky
		);");
		$qry->execute();
	} catch (PDOException $e) {echo 'Error: '.$e->getMessage()." file: ".$e->getFile()." line: ".$e->getLine(); exit;}

	header("Location: ../admin/index.php?editNews=success");
}
