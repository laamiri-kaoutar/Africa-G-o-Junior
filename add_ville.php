<?php 

require 'include/database.php';

  
    $name = $_POST['name'];
    $type = $_POST['type'];
    $image = $_POST['image'];
    $payID = $_POST['payID'];


    if (!empty($name) && !empty($type) &&!empty($image)   ) {

        $result = mysqli_query($conn,"INSERT INTO ville VALUES (null,'$payID', '$name', '$type ', '$image')");

        
        if (!$result) {
            die("Error inserting data: " . mysqli_error($conn));
        } else {
            header('Location: index.php');
        }
    } else {

        echo "Please full fill all the fiels";
    
    }