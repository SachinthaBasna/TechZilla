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

<!-- Body -->

<body class="body" id="body" onload="loadproduct();">
    <input type="checkbox" id="hamburger" />
    <?php include "navbar.php"; ?>

    <div class="container-fluid mt-5 d-flex justify-content-center flex-column align-items-center">
        <h1 class="text-light text-center mt-5">All Products</h1>
        <div class="search-bar search d-flex align-items-center justify-content-around">
            <input type="text" class="form-control col-5" placeholder="Search Product" id="searchBar">
            <button class="" onclick="searchProduct();">Search</button>
        </div>
        <div class="row col-12 d-flex justify-content-center mt-5">
            <div class="product-cards text-center col-10 d-flex justify-content-center flex-wrap" id="productDetails">

            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>