<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lines.css">
    <title>TechZilla - Forget Password</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="body">
    <div class="p-5 container mt-5 col-12 d-flex justify-content-center align-items-center flex-column">

        <!-- Forget Password -->
        <div class="col-10 p-4 text-light ">
            <h1 class="text-light text-bold">Forget Password</h1>

            <div class="mt-2 row">
                <label for="form-label">E mail</label>
                <input type="email" class="form-control" id="e">
            </div>


            <div class="d-none" id="msgDiv">
                <div class="msg1 alert alert-success mt-2" role="alert" id="msg">
                </div>
            </div>

            <div class="mt-4 row justify-content-center row">
                <button class="btn btn-success" onclick="forgetPassword();">Send Email</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>