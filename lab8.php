<html>
<head>
    <meta charset="utf-8">
	<title>Lab8 New Job Post</title>
	<!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/lab8.css">
	<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- PHP Form Validation Code -->
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr =  "";
    $name = $employer = $description = $positiontype = $visarqment = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["name"])) {
         $nameErr = "Name is required";
       } else {
         $name = test_input($_POST["name"]);
         // check if name only contains letters and whitespace
         if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
           $nameErr = "Only letters and white space allowed"; 
         }
       }
       if (empty($_POST["employer"])) {
         $employer = "";
       } else {
         $employer = test_input($_POST["employer"]);
       }

       if (empty($_POST["description"])) {
         $description = "";
       } else {
         $description = test_input($_POST["description"]);
       }

       if (empty($_POST["visarqment"])) {
         $visarqmentErr = "";
       } else {
         $gender = test_input($_POST["visarqment"]);
       }
    }

    function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    ?>
    <!-- Input Form -->
    <section id="new application form">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 text-center">
    				<h2>Post New Job</h2>
                    <span>Kaichang Wu</span>
    				<hr class="star-primary">
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-8 col-lg-offset-2">
    				<form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    					<div class="form-group">
    						<div class="form-group col-xs-12 floating-label-form-group controls">
    							<label>Position Name</label>
    							<input type="text" class="form-control" placeholder="Position Name" name="name" value="<?php echo $name; ?>">
                                <span class="error">* <?php echo $nameErr;?></span>
    						</div>
    						<div class="form-group col-xs-12 floating-label-form-group controls">
    							<label>Employer Information</label>
    							<input type="text" class="form-control" placeholder="Employer" name="employer" value="<?php echo $employer; ?>">

    						</div>
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Position Description</label>
                                <input type="text" class="form-control" placeholder="Job Description" name="description" value="<?php echo $description; ?>">
                            </div>
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Position Type</label>
                                <select class="form_control" placeholder="Position Type" name="positiontype" "<?php echo $positiontype ?>">
                                    <option value="Full-Time">Full-Time</option>
                                    <option value="Part-Time">Part-Time</option>
                                    <option value="Internship">Internship</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input type="checkbox" name="visarqment" value="H1B Required" <?php if (isset($visarqment)) echo "checked";?>>Require H1B Now or Future
                            </div>
    						<div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                                </div>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- Result printout area -->
    <section class="success" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <label>The Position You Are Intrested in is:</label>
                        <p><?php echo $_POST["name"]; ?></p>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <label>Then the Employer is</label>
                        <p><?php echo $_POST['employer']; ?></p>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <label>Job Description</label>
                        <p><?php echo $_POST['description']; ?></p>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <label>Position Type</label>
                        <p><?php echo $_POST['positiontype']; ?></p>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <label>Visa Requirement</label>
                        <p><?php echo $_POST['visarqment']; ?></p>
                    </div>

                </div>
            </div>
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
     <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
</body>
</html> 