<?php 
    $conn=mysqli_connect("localhost", "root", "", "complaints");
    if(!$conn){
        die("Could not connect to the database!".mysqli_connect_error());
    }
    //echo '<pre>';//
    //print_r($_FILES);//

    $catName=$_POST['category'];

    $target="uploads/".basename($_FILES['image']['name']);
    
    $ext=pathinfo($target,PATHINFO_EXTENSION);

    //if($ext!="jpg" && $!="jpeg" && $ext!="png" && $ext!="pdf" && $ext!="doc" && $ext!="docx")// This code allows file types listed in code
    
    //the code below only allows pdf files//
    if($ext!="pdf"){
        echo '<div class="alert alert-danger">Only pdf files are allowed!</div>';
        //The code above can be used to specify type of alert. Remember to override alert-primary class in index.php
        //echo 'Only pdf files are allowed!';
    }
    else if($_FILES['image']['size']>3000000){
        echo '<div class="alert alert-danger">File size is too big!</div>';
        //echo 'File size is too big!';
    }
    else if(file_exists($target)){
        echo '<div class="alert alert-danger">File chosen is already uploaded!</div>';
        //echo 'File chosen is already uploaded';
    }
    else if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        mysqli_query($conn, "INSERT INTO file_upload(name,file_path)VALUES('$catName','$target')");
        echo '<div class="alert alert-success">File uploaded succesfully!</div>';
        //echo 'File uploaded succesfully!';
    }
    else{
        echo 'Failed to upload!';
    }

?>