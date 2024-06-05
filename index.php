<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="lines.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="icon" href="Resources/">
  <title>TechZilla</title>
</head>

<?php
include "connection.php";

session_start();
if (isset($_SESSION["u"])) {



  ?>

  <!-- Body -->

  <body class="body" id="body" onload="loadproduct(0);">

    <input type="checkbox" id="hamburger" />

    <a href="#body">
      <div class="back-to-top d-flex justify-content-center align-items-center"><i class="fa-solid fa-arrow-up"></i></div>
    </a>
    <!-- Lines -->
    <div class="lines">
      <div class="horizontal"></div>
      <div class="horizontal2"></div>
      <div class="horizontal3"></div>
      <div class="horizontal4"></div>
      <div class="vertical"></div>
      <div class="vertical2"></div>
    </div>
    <!-- Lines -->

    <?php
    include "navBar.php";
    ?>

    <!-- Hero Section -->
    <div class="hero">
      <div class="hero-text">
        <h1>Welcome to techZilla</h1>
        <h3>Power up your play!</h3>
      </div>

      <div class="search-bar mt-4">
        <input type="text" placeholder="Search Product" id="searchBar" />
        <a href="#product1"><button class="mt-4" onclick="searchProduct();">Search</button></a>
      </div>
    </div>
    <!-- Hero Section -->

    <?php
    include "imageSlider.php";
    ?>

    <!-- Featured Products -->
    <div class="ft-products mt-5 text-center">
      <h1 id="product1">Featured Products</h1>
      <div class="header">
        <div class="product-cat mt-4 d-flex justify-content-center">
          <div class="active d-flex align-items-center justify-content-center">
            Pre Build PCs
          </div>
          <div class="d-flex align-items-center justify-content-center">
            Workstation PCs
          </div>
          <div class="d-flex align-items-center justify-content-center">
            Gaming PCs
          </div>
          <div class="d-flex align-items-center justify-content-center">
            Laptops
          </div>
        </div>
      </div>
    </div>
    <div class="row col-12 d-flex justify-content-center mt-5">
      <div class="product-cards text-center col-12 d-flex justify-content-center flex-wrap" id="productDetails">

      </div>
    </div>
    </div>




    </div>



    <div class=" row brands-wrapper row text-center d-flex  mt-5">
      <h1 class="">Our Brands</h1>
      <div class="brands col-12"></div>
    </div>


    <div class="row d-flex col-12 justify-content-center">
      <div class="footer mt-5 row col-8 gap-5">
        <div class="col-5 mt-4">
          <img src="Resources/Logo.png" class="img-fluid" />
          <div class="logo">

            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quisquam voluptas ad
              neque vero harum, odio culpa vel architecto doloremque obcaecati ducimus distinctio blanditiis, at
              repudiandae quod in veniam delectus!</p>

            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quisquam voluptas ad
              neque vero harum, odio culpa vel architecto doloremque obcaecati ducimus distinctio blanditiis, at
              repudiandae quod in veniam delectus!</p>
          </div>
        </div>

        <div class="col-3 mt-4  gap-5">
          <h2 class="text-white">Map</h2>
          <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quisquam voluptas ad
            neque vero harum, odio culpa vel architecto doloremque obcaecati ducimus distinctio blanditiis, at repudiandae
            quod in veniam delectus!</p>
        </div>

        <div class="col-2 mt-4  gap-5">
          <div class="map">
            <h2 class="text-white">Map</h2>
            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quisquam voluptas ad
              neque vero harum, odio culpa vel architecto doloremque obcaecati ducimus distinctio blanditiis, at
              repudiandae quod in veniam delectus!</p>
          </div>
        </div>
      </div>


      <script src="script.js"></script>
  </body>

  </html>















  <!-- Guest -->
  <?php
} else {
  ?>
  <!-- Body -->

  <body class="body" id="body" onload="loadproduct(0);">

    <input type="checkbox" id="hamburger" />

    <a href="#body">
      <div class="back-to-top d-flex justify-content-center align-items-center"><i class="fa-solid fa-arrow-up"></i></div>
    </a>
    <!-- Lines -->
    <div class="lines">
      <div class="horizontal"></div>
      <div class="horizontal2"></div>
      <div class="horizontal3"></div>
      <div class="horizontal4"></div>
      <div class="vertical"></div>
      <div class="vertical2"></div>
    </div>
    <!-- Lines -->

    <?php
    include "navBar.php";
    ?>

    <!-- Hero Section -->
    <div class="hero">
      <div class="hero-text">
        <h1>Welcome to techZilla</h1>
        <h3>Power up your play!</h3>
      </div>

      <div class="search-bar mt-4">
        <input type="text" placeholder="Search Product" id="searchBar" />
        <a href="#product1"><button class="mt-4" onclick="searchProduct();">Search</button></a>
      </div>
    </div>
    <!-- Hero Section -->

    <?php
    include "imageSlider.php";
    ?>

    <!-- Featured Products -->
    <div class="ft-products mt-5 text-center">
      <h1 id="product1">Featured Products</h1>
      <div class="header">
        <div class="product-cat mt-4 d-flex justify-content-center">
          <div class="active d-flex align-items-center justify-content-center">
            Pre Build PCs
          </div>
          <div class="d-flex align-items-center justify-content-center">
            Workstation PCs
          </div>
          <div class="d-flex align-items-center justify-content-center">
            Gaming PCs
          </div>
          <div class="d-flex align-items-center justify-content-center">
            Laptops
          </div>
        </div>
      </div>
    </div>
    <div class="row col-12 d-flex justify-content-center mt-5">
      <div class="product-cards text-center col-12 d-flex justify-content-center flex-wrap" id="productDetails">

      </div>
    </div>
    </div>




    </div>



    <div class=" row brands-wrapper row text-center d-flex  mt-5">
      <h1 class="">Our Brands</h1>
      <div class="brands col-12"></div>
    </div>


    <div class="row d-flex col-12 justify-content-center">
      <div class="footer mt-5 row col-8 gap-5">
        <div class="col-5 mt-4">
          <img src="Resources/Logo.png" class="img-fluid" />
          <div class="logo">

            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quisquam voluptas ad
              neque vero harum, odio culpa vel architecto doloremque obcaecati ducimus distinctio blanditiis, at
              repudiandae quod in veniam delectus!</p>

            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quisquam voluptas ad
              neque vero harum, odio culpa vel architecto doloremque obcaecati ducimus distinctio blanditiis, at
              repudiandae quod in veniam delectus!</p>
          </div>
        </div>

        <div class="col-3 mt-4  gap-5">
          <h2 class="text-white">Map</h2>
          <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quisquam voluptas ad
            neque vero harum, odio culpa vel architecto doloremque obcaecati ducimus distinctio blanditiis, at repudiandae
            quod in veniam delectus!</p>
        </div>

        <div class="col-2 mt-4  gap-5">
          <div class="map">
            <h2 class="text-white">Map</h2>
            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quisquam voluptas ad
              neque vero harum, odio culpa vel architecto doloremque obcaecati ducimus distinctio blanditiis, at
              repudiandae quod in veniam delectus!</p>
          </div>
        </div>
      </div>


      <script src="script.js"></script>
  </body>

  </html>


  <?php
}
?>