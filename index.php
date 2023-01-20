<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/school.jpg">
    <title>PLC - Login_Page</title>
    <link rel="stylesheet" href="css/font-awesome-6-2-1.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-v3-6-3-min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <style>
        body {margin: 0; padding: 0;font-family: Roboto;font: 13px;}
        .wrapper {margin-top: 100px;background-color: white;border-radius: 6px; background-color: grey; color:white}
        h2 {font-size: 40px;font-weight: bold}
    </style>
</head>
<body>
<div class="container d-flex justify-content-center">
    <div class="wrapper shadow p-5">
        <h2 class="text-center fw-bold">Login</h2>
        <p class="text-center">Please fill in your credentials to login.</p>
        <form action="login.php" method="post">
            <div class="form-group mb-3">
                <label for="username">Username</label>
                <input type="text" name="uname" class="form-control" value="" id="username" required>
            </div>    
            <div class="form-group mb-2">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <input type="checkbox" onclick="myFunction()"><span> show password</span>
            </div>
            <div class="form-group mb-3 text-center">
                <input type="submit" class="form-control btn btn-primary btn-block" value="Login">
            </div>
        </form>
    </div>
</div>
</body>
<script>
    function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>