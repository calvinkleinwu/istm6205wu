<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lab 10 jQuery and Ajax</title>
    <link rel="stylesheet" type="text/css" href="stlye.css">
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../public/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
  </head>
  <body>
  <div class="main-banner">
    <div class="content-container fade-in">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
            <p class="sub-title">ISTM 6205 &amp; Lab 10 </p>
            <h2 class="">Ajax Joblist Layout</h2>
            <p class="">by Kaichang Wu 12th Nov 2014</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="form-group col-xs-12">
        <a href="create.php"><button id="add" type="submit" class="btn btn-success btn-lg" >Add More</button></a>
  </div>
  </div>
  
  <!-- database items goes here -->
  <section class="container" id="jobposts">

    <!-- container -->
    <!-- /container -->
  </section>

  <script type="text/javascript">
   
  $(document).ready(function(){
    var url="api.php";
    $.getJSON(url,function(json){
    // loop through the members here
      $.each(json,function(i,job){
        $("#jobposts").append(
          '<div class="col-xs-12 col-md-6 col-lg-4">'+
            '<div class="post-item" id="job-'+job.id+'">'+
              '<div class="image-container">'+
                  '<img width="253" height="167" src="jobdefault.jpg">'+
               '</div>'+
               '<div class="content-container">'+
                  '<h1>'+job.jname+'</h1>'+
                  '<p>Employer: <em>'+job.employer+'</em>'+
                  '<p>Position Description: <em>'+job.jdescription+'</em></p>'+
                  '<p>Special Requirement: <em>'+job.jtype+ "-"+job.visarqment + '</em></p>'+
                  '<p>Location:<em>' + job.location + '</em></p>'+
                  '<hr>'+
               '</div>'+
            '</div>'+
          '</div>'
        );
      });
    });
  });
   
  </script>

  <script src="public/js/jquery-2.1.1.min.js"></script>
  </body>
</html>