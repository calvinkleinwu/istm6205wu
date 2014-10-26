<html>
<head>
    <meta charset="utf-8">
	<title>New Application</title>
	<!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
	<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
<section id="new application form">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Add Application</h2>
				<hr class="star-primary">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<form role="form" action="show.php" method="post">
					<div class="form-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Position Name</label>
							<input type="text" class="form-control" placeholder="Position Name" name="name">
						</div>
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Employer Information</label>
							<input type="text" class="form-control" placeholder="Employer" name="employer">
						</div>
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Position Description</label>
                            <input type="text" class="form-control" placeholder="Job Description" name="employer">
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
<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $website = test_input($_POST["website"]);
   $comment = test_input($_POST["comment"]);
   $gender = test_input($_POST["gender"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <br><br>
   E-mail: <input type="text" name="email">
   <br><br>
   Website: <input type="text" name="website">
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>

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