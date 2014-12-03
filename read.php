<?php
    include 'include/read.php';
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
	    <meta charset="utf-8">
		<title>View a Job</title>
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
		<section class="success" id="gallery">
            <div class="container">
                    <div class="row">
                    	<div class="col-lg-12 text-center">
                        	<h3>View Job Opportunity</h3>
                    	</div>
                    </div>
                    
                    <div class="row" >
		                      <div class="col-lg-8 col-lg-offset-2 result">
		                        <h3>Position Name</h3>
		                        <div class="controls">
		                            <label class="checkbox">
		                                <?php echo $data['jname'];?>
		                            </label>
		                        </div>
		                      </div>
		                      <div class="col-lg-8 col-lg-offset-2">
		                        <h3>Employer</h3>                       <div class="controls">
		                            <label class="checkbox">
		                                <?php echo $data['employer'];?>
		                            </label>
		                        </div>
		                      </div>
		                      <div class="col-lg-8 col-lg-offset-2">
		                        <h3>Job Description</h3>
		                        <div class="controls">
		                            <label class="checkbox">
		                                <?php echo $data['jdescription'];?>
		                            </label>
		                        </div>
		                      </div>
		                      <div class="col-lg-8 col-lg-offset-2">
		                        <h3>Job Type</h3>                       <div class="controls">
		                            <label class="checkbox">
		                                <?php echo $data['jtype'];?>
		                            </label>
		                        </div>
		                      </div>
		                      <div class="col-lg-8 col-lg-offset-2">
		                        <h3>Visa Requiremen</h3>
		                        <div class="controls">
		                            <label class="checkbox">
		                                <?php echo $data['visarqment'];?>
		                            </label>
		                        </div>
		                      </div>
		                      <div class="col-lg-8 col-lg-offset-2">
		                        <h3>Location</h3>                       <div class="controls">
		                            <label class="checkbox">
		                                <?php echo $data['location'];?>
		                            </label>
		                        </div>
		                      </div>
		                      <div class="col-lg-8 col-lg-offset-2">
	                    		 <a class="btn btn-primary" href="index.php">Back</a>
	                		  </div>
                    </div>
	    	</div> 
	    	<!-- /container -->
		</section>
		<!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>2008 Columbia Pike<br>Arlington, VA 22204</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/heyiscalvin" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/114691613281662292074/posts/p/pub" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/amcalvinw" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/pub/calvin-wu/59/b37/663" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/calvinkleinwu" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Share the Site</h3>
                        <p>Feel Free to contact me, if you like this site just <a href="#">Share</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Kaichang Wu 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
    <script src="/public/js/jquery-1.11.0.js"></script>
     <!-- Bootstrap Core JavaScript -->
    <script src="/public/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/public/js/jobboard.js"></script>
 	</body>
</html>

