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


  <?php 
    
    require "include/database.php";
    // $id = $_GET['id'];
    $id = 41;
    
    
    
    
    $query ="SELECT * FROM ville WHERE villeID=$id";
    
    $villeresult = mysqli_query($conn, $query);
    
    $ville = mysqli_fetch_assoc($villeresult);
    
    // $paysresult= mysqli_query($conn,"SELECT  name FROM pays where paysID like $ville['paysID']) ");
    // $pays = mysqli_fetch_assoc($paysresult);


    $result = mysqli_query($conn,"SELECT paysID, name FROM pays");
  ?>

  <section>
  <div class="container mt-5">
        <h1 class="text-center mb-4">Add a New City</h1>

        <?php  echo var_dump($ville['paysID'])  ?>

        <form method="post" action="add_ville.php">
            <div class="mb-3">
                <label for="name" class="form-label">City Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter country name" value="<?=$ville['name'] ?>" required>
            </div>

            <div class="mb-3">
                <select name="type" id="type" class="form-select" value="<?=$ville['type'] ?>" aria-label="Default select example">
                    <option selected>select type </option>
                    <option value="ville">ville</option>
                    <option value="capital">capital</option>
                </select>
     
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">curent Image :<?=$ville['image'] ?> </label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <select name="payID" id="payID" class="form-select"  aria-label="Default select example">
                    <option selected>select the country:</option>
                   <?php while($Data = mysqli_fetch_assoc($result)):?>
                     <option value="<?= $Data["paysID"]?>"><?= $Data["name"]?></option>
                     <?php endwhile;?>
                </select>

            </div>

            <input type="submit" class="btn custom-btn " name="add" value="add city" >
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
