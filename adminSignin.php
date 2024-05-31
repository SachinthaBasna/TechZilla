<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SignIn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css" />
</head>

<body class="body d-flex justify-content-center align-items-center text-light">
    <div class="mt-5 col-3">
        <h2 class="text-center">Admin Login</h2>

        <div class="mt-5">
            <label for="form-label" class="text-bold" >Username: </label>
            <input type="text" class="form-control" placeholder="Ex: John Doe" id="un"/>
        </div>

        <div class="mt-3">
            <label for="form-label" class="text-bold">Password: </label>
            <input type="password" class="form-control mb-3" placeholder="Ex: ********" id="pw"/>
        </div>

        <div class="alert alert-danger mt-2 d-none"></div>

        <div>
            <button class="btn btn-light col-12" onclick="adminSignIn();">Login</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>