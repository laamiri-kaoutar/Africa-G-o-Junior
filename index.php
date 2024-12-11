<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>MAMA Us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

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
                        <li><a href="#">Home</a></li>
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

  <!-- ***** Main Banner Area Start ***** -->
  <div class="about-main-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
            <div class="blur-bg"></div>
            <h4>Explore AFRICA</h4>
            <div class="line-dec"></div>

            <div class="qouting">
                <p class="qoute">“ We are all children of Africa, and none of us is better or more important than the other. This is what Africa could say to the world: it could remind it what it is to be human.”</p>
                <p class="auther">Alexander Mccall Smith</p>
                <div class="line-dec"></div>
            </div>
     

            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
  

  <section id="section-1">
    <div class="content-slider">
      <div id="top-banner-1" class="banner">
        <div class="banner-inner-wrapper header-text">
          <!-- this is what i want  -->
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-user"></i>
                      <h4><span>Population:</span><br>1.4 b</h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-globe"></i>
                      <h4><span>Territory:</span><br>30.37 m KM<em>2</em></h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <i class="fa fa-home"></i>
                      <h4><span>countries:</span><br>54</h4>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6">
                      <div class="main-button">
                        <a href="#">Know More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






<section class="countries-section">

    <?php 
     require 'include/database.php';
     $result = mysqli_query($conn,"SELECT * FROM pays");
    ?>

    <h2>AFRICA COUNTRIES</h2>

    <div class="adding_btns">
      <a href="add_pays.php" class="btn btn-outline-success">add new country</a>
      <a href="form_ville.php" class="btn btn-outline-danger">add new city</a>
    </div> 
    <div class="visit-country">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="items">
                <div class="row">
                <?php while($Data = mysqli_fetch_assoc($result)):?>
                 <div class="col-lg-12">
                     <div class="item">
                       <div class="row">
                         <div class="col-lg-4 col-sm-5">
                           <div class="image">
                             <img src="assets/images/<?= $Data["image"]?>" alt="">
                           </div>
                         </div>
                         <div class="col-lg-8 col-sm-7">
                           <div class="right-content">
                             <h4><?= $Data["name"]?></h4>
                             <span>Africa</span>
                             <div class="main-button">
                               <a href="about.html">update</a>
                             </div>
                             <p><?= $Data["description"]?></p>
                             <ul class="info">
                               <li><i class="fa fa-user"></i> <?= $Data["population"]?> M People</li>
                               <li><i class="fa fa-globe"></i> <?= $Data["langues"]?></li>
                               <li><i class="fa fa-home"></i> $1.100.200</li>
                             </ul>
                             <div class="text-button">
                               <a href="displayCities.php?id=<?= $Data["paysID"]?>">Explore cities <i class="fa fa-arrow-right"></i> </a>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 <?php endwhile;?> 
                  <!-- <div class="col-lg-12">
                    <div class="item">
                      <div class="row">
                        <div class="col-lg-4 col-sm-5">
                          <div class="image">
                            <img src="assets/images/country-01.jpg" alt="">
                          </div>
                        </div>
                        <div class="col-lg-8 col-sm-7">
                          <div class="right-content">
                            <h4>SWITZERLAND</h4>
                            <span>Europe</span>
                            <div class="main-button">
                              <a href="about.html">update</a>
                            </div>
                            <p>Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website. You can use this layout for your commercial work.</p>
                            <ul class="info">
                              <li><i class="fa fa-user"></i> 8.66 Mil People</li>
                              <li><i class="fa fa-globe"></i> 41.290 km2</li>
                              <li><i class="fa fa-home"></i> $1.100.200</li>
                            </ul>
                            <div class="text-button">
                              <a href="about.html">Explore cities <i class="fa fa-arrow-right"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="item">
                      <div class="row">
                        <div class="col-lg-4 col-sm-5">
                          <div class="image">
                            <img src="assets/images/country-02.jpg" alt="">
                          </div>
                        </div>
                        <div class="col-lg-8 col-sm-7">
                          <div class="right-content">
                            <h4>CARIBBEAN</h4>
                            <span>North America</span>
                            <div class="main-button">
                              <a href="about.html">update</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            <ul class="info">
                              <li><i class="fa fa-user"></i> 44.48 Mil People</li>
                              <li><i class="fa fa-globe"></i> 275.400 km2</li>
                              <li><i class="fa fa-home"></i> $946.000</li>
                            </ul>
                            <div class="text-button">
                              <a href="about.html">Explore cities <i class="fa fa-arrow-right"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>



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

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>





