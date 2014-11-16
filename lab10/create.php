<?php
require_once('config.php');
//CREATE DATABASE
try {
    $conn = new PDO("mysql:dbname=" . ";host=" . SERVER, USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // create databse
    $sql = "CREATE DATABASE istm6205lab9";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<span>LAB 9 Database created successfully</span><br>";
    }
catch(PDOException $e)
    {
    $createtable = true;
    }
$conn = null;



//try to CREATE TABLE in the database that i just created
//once i click the "createtable" button

if ($createtable) {
    try {
    $conn = new PDO("mysql:dbname=" .DATABASE .";host=" .SERVER, USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE JobPosts(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        jname VARCHAR(40) NOT NULL,
        employer VARCHAR(50) NOT NULL,
        jdescription TEXT,
        jtype VARCHAR(30) NOT NULL,
        visarqment VARCHAR(20) NOT NULL,
        location VARCHAR(20) NOT NULL
        )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<br>Table JobPosts created successfully";
    }
catch(PDOException $e)
    {
    $createtablestatus ="Table JobPosts already existed";
    }

$conn = null;
    
}

if ( !empty($_POST)) {
        // keep track validation errors
        $jnameError = null;
         
        // keep track post values
        $jname = $_POST['jname'];
        $employer = $_POST['employer'];
        $jtype = $_POST['jtype'];
        $jdescription = $_POST['jdescription'];
        $visarqment = $_POST['visarqment'];
        $location = $_POST['location'];
         
        // validate input
        $valid = true;
        if (empty($jname)) {
            $jnameError = 'Please enter Name';
            $valid = false;
        }
         
        if (empty($employer)) {
            $employer = '';
        } 
         
        if (empty($jdescription)) {
            $jdescription = '';
        } 

        if (empty($jtype)) {
            $jtype = '';
        } 

        if (empty($visarqment)) {
            $visarqment = '';
        }
        if ($valid) {
            try {   
            $conn = new PDO("mysql:dbname=" .DATABASE .";host=" .SERVER, USERNAME, PASSWORD);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO jobposts(jname,employer,jdescription,jtype,visarqment,location) values(?, ?, ?, ?, ?, ?)";
            $q = $conn->prepare($sql);
            $q->execute(array($jname,$employer,$jdescription,$jtype,$visarqment,$location));
            $insertstatus = "Congratulations Your Insert Successful";
            $query= true;
            }
            catch(PDOException $e)
            {
            echo $sql . "<br>Sorry" . $e->getMessage() ;
            }

            $conn = null;
            header("Location: lab10client.php");
        }
}


?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lab #9</title>
        <!-- Myown CSS -->
        <link href="../public/css/jobboard.css" rel="stylesheet" type="text/css">
        <!-- Bottstrap CSS -->
        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
        <!-- Special Fonts Style -->
        <link href="../public/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    </head>
    <body>
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
                        <form role="form" action="create.php" method="post">
                            <div class="form-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Position Name</label>
                                    <input type="text" class="form-control" placeholder="Position Name" name="jname" value="<?php echo !empty($jname)?$jname:''; ?>">
                                    
                                </div> 
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Employer Information</label>
                                    <input type="text" class="form-control" placeholder="Employer" name="employer" value="<?php echo !empty($employer)?$employer:''; ?>">
                                </div>

                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Position Description</label>
                                    <input type="text" class="form-control" placeholder="Job Description" name="jdescription" value="<?php echo !empty($jdescription)?$jdescription:'';?>">
                                </div>
                                
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <lable>Position Type</lable>
                                  <input type="radio" name="jtype" <?php if (isset($jtype) && $jtype=="Full-Time") echo "checked";?> value="Full-Time"> Full-Time
                                
                                  <input type="radio" name="jtype" <?php if (isset($jtype) && $jtype=="PART-Time") echo "checked";?> value="Part-Time"> Part-Time
                               
                                  <input type="radio" name="jtype" <?php if (isset($jtype) && $jtype=="Internship") echo "checked";?> value="Internship"> Internship
                                    
                                </div>
                                
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <input type="checkbox" name="visarqment" <?php if (isset($visarqment) && $visarqment=="Internship") echo "checked";?> value="H1B Required" >Require H1B Now or Future
                                </div>
                                
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Location</label>
                                    <select class="form-control" name="location">
                                        <option name="location" <?php if (isset($location) && $location=="Virginia") echo "checked";?> value="Virginia">Virginia</option>
                                        <option name="location" <?php if (isset($location) && $location=="DC") echo "checked";?> value="DC">DC</option>
                                        <option name="location" <?php if (isset($location) && $location=="Maryland") echo "checked";?> value="Maryland">Maryland</option>
                                    </select>
                                </div>
                                <div class="form-group col-xs-12">
                                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                                        <a class="btn btn-primary btn-lg" href="lab10client.php">See All</a>
                                </div>
                            </div>
                        </form>
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
        <script src="../public/js/jquery-1.11.0.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../public/js/bootstrap.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../public/js/jobboard.js"></script>
    </body>
</html>
