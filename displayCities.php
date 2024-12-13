<?php
require 'include/database.php';
$paysID= $_GET['id'];
$query1 ="SELECT name FROM pays WHERE paysID=$paysID";

$result1= mysqli_query($conn,$query1);
$pays= mysqli_fetch_assoc($result1);



$query ="SELECT * FROM ville WHERE paysID=$paysID";

$result = mysqli_query($conn,$query);
$count = $result->num_rows;
echo $count;
if (!$count) {
    header('Location: index.php');
 }


 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Add new Country</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">


    <style>
      .cities{
       display: flex;
       flex-wrap: wrap;
       gap: 16px;
       width: 100%;
       justify-content: start;
       }
       .cities-container{
       text-align: center ;
       margin-top: 24px ;
       padding: 50px  24px ;
       }

       .cities-container h1 {
        margin-bottom: 40px ;
       }
       .ville_btn {
         display: flex;  
         justify-content: space-between;
        }

    </style>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo_new.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#" class="active">About</a></li>
                        <li><a href="#">Deals</a></li>
                        <li><a href="#">Reservation</a></li>
                        <li><a href="#">Book Yours</a></li>
                    </ul>  
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <main>

  <div class="cities-container">
    <div>
     <h1>Cities of <?= $pays["name"] ?> </h1>
    </div>

    <div class="cities">
      <?php while ($Data = mysqli_fetch_assoc($result)): ?>
            <div class="col">
               <div class="card" style="width: 18rem;">
                 <img src="assets/images/<?= $Data['image']?>" class="card-img-top" alt="city image">
                 <div class="card-body">
                 
                 <div class="ville_btn">
                     <h5 class="card-title"><?= $Data['name']?></h5>
                     <div>
                        <a href="update_ville_form.php?id=<?= $Data["villeID"]?>" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="delete_ville.php?id=<?= $Data["villeID"]?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                     </div>
                 </div>
                </div>
               </div>
            </div>
         <?php endwhile; ?>
    </div>



  </div>

  </main>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 <a href="#">Mama AFRICA</a> Company. All rights reserved. 
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

 

  </body>

</html>
