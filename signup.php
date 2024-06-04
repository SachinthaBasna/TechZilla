<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lines.css">
    <title>Sign In / Register</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="body">
    <input type="checkbox" id="hamburger" />
    <nav>
        <label for="hamburger"><i
                class="fa-solid fa-ellipsis-vertical nav-icon d-flex justify-content-center"></i></label>
        <div class="logo">
            <a href="index.php"><img src="Resources/Logo.png" alt="" /></a>
        </div>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="products.php">Shop</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
        <div class="cart_wishlist">
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-solid fa-heart"></i>
        </div>
    </nav>




    <div class="container mt-5 col-12 d-flex justify-content-center align-items-center flex-column">

        <!-- Register -->
        <div class="signUp col-10 p-4 text-light ">
            <h1 class="text-light text-bold">Register</h1>
            <div class="mt-2 row">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname">
            </div>

            <div class="mt-2 row">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname">
            </div>

            <div class="mt-2 row">
                <label for="mobile">mobile</label>
                <input type="text" class="form-control" id="mobile">
            </div>


            <div class="mt-2 row">
                <label for="uname">User Name</label>
                <input type="text" class="form-control" id="uname">
            </div>

            <div class="mt-2 row">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email">
            </div>

            <div class="mt-2 row">
                <label for="pw">Password</label>
                <input type="password" class="form-control" id="pw">
            </div>

            <div class="d-none" id="msgDiv1">
                <div class="msg1 alert alert-success mt-2" id="msg1" role="alert">
                </div>
            </div>

            <div class="mt-4 row justify-content-center row">
                <button class="btn btn-success" onclick="register();">Register</button>

            </div>

            <div class="mt-2 row justify-content-center">
                <p class="mt-3 text-center">Already Have Account??</p>
                <button class="btn btn-success"><a href="signIn.php" class="text-light text-decoration-none" target="_blank">Sign In</a></button>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>