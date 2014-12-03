<?php 
  include 'include/delete.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
      <meta charset="utf-8">
    	<title>Delte Post</title>
      <!-- Bookmark Logo -->
      <link rel="shortcut icon" href="public/img/profile.png">
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
                          <p class="alert alert-error">Are you sure to remove this job opportunity?</p>
                          <div class="form-actions">
                              <button type="submit" class="btn btn-danger">Yes</button>
                              <a class="btn" href="index.php">No</a>
                            </div>
                        </form>
                	</div>
                </div>		
        	</div>
        </section>
    </body>
</html>
