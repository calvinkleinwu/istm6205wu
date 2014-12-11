<?php
    include 'include/update.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Post</title>
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

    <!-- Update Form -->
    <section id="new application form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Update Job Post</h2>
                    <span>Kaichang Wu</span>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form role="form" action="update.php?id=<?php echo  $id?>" method="post">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Position Name</label>
                                <input type="text" class="form-control" placeholder="Position Name" id="jname" name="jname" 
                                value="<?php echo !empty($jname)?$jname:''; ?>" 
                                required data-validation-required-message="Please enter the Positionname.">
                                <p class="help-block text-danger"></p>
                            </div> 
                        </div> 
                        <div class="row control-group">   
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Employer Information</label>
                                <input type="text" class="form-control" placeholder="Employer" id="employer" name="employer" 
                                value="<?php echo !empty($employer)?$employer:''; ?>" 
                                required data-validation-required-message="Please enter the employer name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">    
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Position Description</label>
                                <input type="text" class="form-control" placeholder="Job Description" id="jdescription" name="jdescription" 
                                value="<?php echo !empty($jdescription)?$jdescription:'';?>" 
                                required data-validation-required-message="Please provide job description.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                              <lable>Position Type</lable>
                              <input type="radio" name="jtype" <?php if (isset($jtype) && $jtype=="Full-Time") echo "checked";?> value="Full-Time"> Full-Time
                            
                              <input type="radio" name="jtype" <?php if (isset($jtype) && $jtype=="PART-Time") echo "checked";?> value="Part-Time"> Part-Time
                           
                              <input type="radio" name="jtype" <?php if (isset($jtype) && $jtype=="Internship") echo "checked";?> value="Internship"> Internship
                                
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input type="checkbox" id=" visarqment" name="visarqment" <?php if (isset($visarqment) && $visarqment=="Internship") echo "checked";?> 
                                value="H1B Required" required data-validation-required-message="Please specify VISA requirement.">Require H1B Now or Future
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Location</label>
                                <select class="form-control" name="location">
                                    <option name="location" <?php if (isset($location) && $location=="Virginia") echo "checked";?> value="Virginia">Virginia</option>
                                    <option name="location" <?php if (isset($location) && $location=="DC") echo "checked";?> value="DC">DC</option>
                                    <option name="location" <?php if (isset($location) && $location=="Maryland") echo "checked";?> value="Maryland">Maryland</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Submit</button>
                                <a class="btn btn-info btn-lg"href="index.php">Cancel</a>
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
    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="public/js/jqBootstrapValidation.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="public/js/jobboard.js"></script>
</body>
</html>