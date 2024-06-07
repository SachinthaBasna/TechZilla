<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lines.css">
    <title>TechZilla - Reset Password</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="body">
    <div class="p-5 container mt-5 col-12 d-flex justify-content-center align-items-center flex-column">

        <!-- Reset Password -->
        <div class="col-10 p-4 text-light ">
            <h1 class="text-light text-bold">Reset Password</h1>

            <div class="d-none">
                <input type="text" id="vcode" value="<?php echo ($_GET["vcode"]) ?>" />
            </div>
            <div class="mt-2 row">
                <label for="form-label">Password</label>
                <input type="password" class="form-control" id="np"/>
            </div>

            <div class="mt-2 row">
                <label for="form-label">Re-enter Password</label>
                <input type="password" class="form-control" id="np2"/>
            </div>

            <div class="d-none" id="msgDiv">
                <div class="msg1 alert alert-danger mt-2" id="msg" role="alert">
                </div>
            </div>

            <div class="mt-4 row justify-content-center row">
                <button class="btn btn-success" onclick="resetPassword();">Update</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>