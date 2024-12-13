<?php 

require 'include/database.php';
$id = $_GET['id'];




    $query ="SELECT * FROM ville WHERE villeID=$id";
        
    $villeresult = mysqli_query($conn, $query);
    
    $ville = mysqli_fetch_assoc($villeresult);
    var_dump($ville);


  
    $name = $_POST['name'];
    $type = $_POST['type'];
    $image = $_POST['image'];
    $paysID = $_POST['paysID'];

    echo $name;

    var_dump($name != $ville['name']);
    var_dump(!empty($paysID));
    



    if (!empty($name)  &&!empty($paysID)   ) {

        if ($name != $ville['name']) {
            $query = "UPDATE ville set name ='$name' WHERE villeID= $id ";
            $result= mysqli_query($conn ,$query);
            if (!$result) {
                die("Error inserting data: " . mysqli_error($conn));
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                echo "UPDATE  name";
            }
        }

        if ($paysID != $ville['paysID']) {
            $query = "UPDATE ville set paysID ='$paysID' WHERE villeID= $id ";
            $result= mysqli_query($conn ,$query);
            if (!$result) {
                die("Error inserting data: " . mysqli_error($conn));
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                echo "UPDATE  payID";
            }
        }

        if ($type != $ville['type'] && !empty($type) ) {
            $query = "UPDATE ville set type ='$type' WHERE villeID= $id ";
            $result= mysqli_query($conn ,$query);
            if (!$result) {
                die("Error inserting data: " . mysqli_error($conn));
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                echo "UPDATE  type";
            }
        }

        if ($image != $ville['image'] && !empty($image) ) {
            $query = "UPDATE ville set image ='$image' WHERE villeID= $id ";
            $result= mysqli_query($conn ,$query);
            if (!$result) {
                die("Error inserting data: " . mysqli_error($conn));
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                echo "UPDATE  image";
            }
        }
        $id = $ville['paysID'];
        header("Location:displayCities.php?id=$id" );


    } 
