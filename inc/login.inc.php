<?php session_start();


if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	// $uid = mysqli_real_escape_string($conn, $_POST['uid']);
	// $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	// Error handlers
	// Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	} else {
		if ($uid == "idemo" && $pwd == "1234") {
			// Log in the user here
			$_SESSION['pky'] = 1;
			$_SESSION['uid'] = $uid;

			header("Location: ../admin/index.php?login=success");
			exit();
		}
	}
} else {
	header("Location: ../index.php?login=error");
	exit();
}
