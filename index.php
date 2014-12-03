<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
	<title>Catch UJob</title>
    <!-- Bookmark Logo -->
    <link rel="shortcut icon" href="public/img/profile.png">
	<!-- Custom CSS -->
    <link href="public/css/freelancer.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="public/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Catch UJOB</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="">Documents</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Labs</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<!-- Jobtable Section -->
	<section id="job-table">
		<div class="container">
			<div class="col-lg-12 text-center">
                    <h2>ALL OPPORTUNITIES</h2>
                    <span>Kaichang Wu</span>
                    <hr class="star-primary">
            </div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Position</th>
							<th>Employer</th>
							<th>Description</th>
							<th>Job Type</th>
							<th>Visa Requirement</th>
							<th>Location</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include 'include/functions.php';
						$pdo = Database::connect();
						$sql = 'SELECT * FROM jobposts ORDER BY id DESC';
						foreach ($pdo->query($sql) as $row){
							echo '<tr>';
							echo '<td>'.$row['jname'] . '</td>';
							echo '<td>'.$row['employer'] .'</td>';
							echo '<td>'.$row['jdescription'] .'</td>';
							echo '<td>'.$row['jtype'] .'</td>';
							echo '<td>'.$row['visarqment'] .'</td>';
							echo '<td>'.$row['location'] .'</td>';
							echo '<td><a class="btn btn-success btn-sm" href="read.php?id='.$row['id'].'">Read</a></td>';
							echo '<td><a class="btn btn-warning btn-sm" href="update.php?id='.$row['id'].'">Update</a></td>';
							echo '<td><a class="btn btn-primary btn-sm" href="delete.php?id='.$row['id'].'">Delete</a></td>';
							echo '</tr>';
						}
						Database::disconnect();
						?>
					</tbody>
				</table>
			</div>
			<div class="form-group col-xs-12">
                    <a href="create.php"><button type="submit" class="btn btn-success btn-lg">Create</button></a>
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
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <script src="public/js/jquery-1.11.0.js"></script>
     <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="public/js/jobboard.js"></script>
</body>
</html> 