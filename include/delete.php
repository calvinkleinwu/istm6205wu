<?php
	require 'functions.php';
	$id = 0;

	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}

	if ( !empty($_POST['id'])) {

		$id = $_POST['id'];

		//delete data
		$pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM jobposts  WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($id));
        Database::disconnect();
        header("Location: index.php");
	}
?>