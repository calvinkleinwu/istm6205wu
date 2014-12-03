<?php
    require 'functions.php';
    
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    if ( null == $id ) {
        header("Location: index.php");
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
         
        // validata input
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
        
         
        // updata data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE jobposts SET jname = ?, employer = ?, jdescription = ?, jtype = ?, visarqment = ?,location = ? WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array($jname,$employer,$jdescription,$jtype,$visarqment,$location,$id));
            Database::disconnect();
            header("Location: index.php");
        }
    }
    else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM jobposts WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $jname = $data['jname'];
        $employer = $data['employer'];
        $jdescription = $data['jdescription'];
        $jtype = $data['jtype'];
        $visarqment = $data['visarqment'];
        $location = $data['location'];
        Database::disconnect();
    }
?>