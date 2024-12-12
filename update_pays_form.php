<?php 
require "include/database.php";
// $id = $_GET['id'];
$id = 40;




$query ="SELECT * FROM pays WHERE paysID=$id";

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($result);


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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html" class="active">About</a></li>
                        <li><a href="deals.html">Deals</a></li>
                        <li><a href="reservation.html">Reservation</a></li>
                        <li><a href="reservation.html">Book Yours</a></li>
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


  <section>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Update <?= $data['name'] ?> Country</h1>
        <form method="post" action="update_pays.php?id=<?=$id?>">
            <div class="mb-3">
                <label for="name" class="form-label">Country Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter country name" value="<?= $data['name'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="population" class="form-label">Population</label>
                <input type="number" class="form-control" id="population" name="population" placeholder="Enter population" value="<?= $data['population'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="language" class="form-label">Language</label>
                <input type="text" class="form-control" id="language" name="language" placeholder="Enter official language" value="<?= $data['langues'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Courent Image :<?= $data['image'] ?> </label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" >
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter country description" required><?= $data['description'] ?></textarea>
            </div>

            <input type="submit" class="btn custom-btn " name="add" value="update country" >
            <!-- <button type="submit" class="btn custom-btn" name="add">Add Country</button> -->

        </form>
    </div> 
    
  </section>

 


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