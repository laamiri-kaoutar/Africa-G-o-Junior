<?php 
require "include/database.php";
$id = $_GET['id'];





$query ="SELECT * FROM pays WHERE paysID=$id";

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($result);



// echo $data['name'] ;
// echo "<br>";
// echo $data['population'] ;
// echo "<br>";
// echo $data['langues'] ;
// echo "<br>";
// echo $data['image'] ;
// echo "<br>";
// echo $data['description'] ;
// echo "<br>";


$name = $_POST['name'];
$population = $_POST['population'];
$language = $_POST['language'];
$description = $_POST['description'];
$image = $_POST['image'];
$idcontinent = 1;

// echo $name;
// echo "<br>";
// echo $population ;
// echo "<br>";
// echo $language ;
// echo "<br>";
// echo $image;
// echo "<br>";
// echo $description ;
// echo "<br>";

if (!empty($name) && !empty($population) &&!empty($language) &&!empty($description)  ) {
    if ($name != $data['name'] ) {
        $query = "UPDATE pays set name ='$name' WHERE paysID= $id ";
        mysqli_query($conn ,$query);
        echo "UPDATE  name";
    }
    if ($population != $data['population'] ) {
        $query = "UPDATE pays set population ='$population' WHERE paysID= $id ";
        mysqli_query($conn ,$query);
        echo "UPDATE  population";

    }
    if ($language != $data['langues'] ) {
        $query = "UPDATE pays set langues ='$language' WHERE paysID= $id ";
        mysqli_query($conn ,$query);
        echo "UPDATE  language";

    }
    if ($description != $data['description'] ) {
        $query = "UPDATE pays set description ='$description' WHERE paysID= $id ";
        mysqli_query($conn ,$query);
        echo "UPDATE  description";

        }
    if ($image != $data['image'] and !empty($image) ) {
        $query = "UPDATE pays set image ='$image' WHERE paysID= $id ";
        mysqli_query($conn ,$query);
        echo "UPDATE  image";
    }

    

 

}
