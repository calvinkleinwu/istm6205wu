<?php
	require 'include/functions.php';
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
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: index.php");
	}
?>
<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
	<title>Lab8 All Data</title>
	<!-- Custom CSS -->
    <link href="public/css/jobboard.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="public/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>

	<!-- Content Section -->
	<section id="delete-form">
		<div class="container">
			<div class="col-lg-12 text-center">
                    <h2>Delete Form</h2>
                    <hr>
            </div>
            <div class="row">
            	<div class="col-lg-8 col-lg-offset-2">
            		<form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id;?>"/>
                      <p class="alert alert-error">Are you sure to delete ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a class="btn" href="index.php">No</a>
                        </div>
                    </form>
            	</div>
            </div>		
    	</div>
    </section>
