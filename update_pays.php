<?php 
require "include/database.php";

$id = $_GET['id'];





$query ="SELECT * FROM pays WHERE paysID=$id";

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($result);



$name = $_POST['name'];
$population = $_POST['population'];
$language = $_POST['language'];
$description = $_POST['description'];
$image = $_POST['image'];
$idcontinent = 1;


if (!empty($name) && !empty($population) &&!empty($language) &&!empty($description)  ) {
    if ($name != $data['name'] ) {
        $query = "UPDATE pays set name ='$name' WHERE paysID= $id ";
        $result= mysqli_query($conn ,$query);
        if (!$result) {
            die("Error inserting data: " . mysqli_error($conn));
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "UPDATE  name";
        }
        
    }
    if ($population != $data['population'] ) {
        $query = "UPDATE pays set population ='$population' WHERE paysID= $id ";
        $result=mysqli_query($conn ,$query);
        if (!$result) {
            die("Error inserting data: " . mysqli_error($conn));
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "UPDATE  population";
        }

    }
    if ($language != $data['langues'] ) {
        $query = "UPDATE pays set langues ='$language' WHERE paysID= $id ";
        $result=mysqli_query($conn ,$query);
        if (!$result) {
            die("Error inserting data: " . mysqli_error($conn));
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "UPDATE  language";
        }
        

    }
    if ($description != $data['description'] ) {
        $query = "UPDATE pays set description ='$description' WHERE paysID= $id ";
        $result=mysqli_query($conn ,$query);
        if (!$result) {
            die("Error inserting data: " . mysqli_error($conn));
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "UPDATE  description";
        }

        }
    if ($image != $data['image'] and !empty($image) ) {
        $query = "UPDATE pays set image ='$image' WHERE paysID= $id ";
        $result=mysqli_query($conn ,$query);
        if (!$result) {
            die("Error inserting data: " . mysqli_error($conn));
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "UPDATE  image";
        }

    }

    header('Location: index.php');


 

}
