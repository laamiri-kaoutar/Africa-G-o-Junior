<?php
require 'include/database.php';
$id= $_GET['id'];

$query ="DELETE FROM ville WHERE villeID=$id";

$result = mysqli_query($conn,$query);

if ($result) {
    echo "deleted succesfuly ";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}else {
    echo "somthing wint wrong";
}