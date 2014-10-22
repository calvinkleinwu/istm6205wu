<html>
<head>
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
	<section class="success" id="gallery">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<span>The Position You Are Intrested in is\:</span>
					<p><?php echo $_POST["name"]; ?></p>
				</div>
				<div class="col-lg-8 col-lg-offset-2">
					<span>Then the Employer is</span>
					<p><?php echo $_POST['employer']; ?></p>
				</div>
				

			</div>
		</div>
	</section>
</body>
</html>
