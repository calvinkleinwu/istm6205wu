<!DOCTYPE html>
<?php
     
    require 'functions.php';
 
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
        
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO jobposts (jname,employer,jdescription,jtype,visarqment,location) values(?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array($jname,$employer,$jdescription,$jtype,$visarqment,$location));
            Database::disconnect();
            header("Location: index.php");
        }
    }
?>