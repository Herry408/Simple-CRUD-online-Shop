<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Sistem Admin Tokio</title>
    <link rel="shortcut icon" type="icon" href="../gambar/LOGO.png">
    <meta name="viewport" content="width=device-width,intial-scale=1">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="login1.css">
</head>
<body>

    <div class="container">
        <h3>LOGIN SISTEM ADMINISTRATOR</h3><br>
                <form method="post" action="ceklogin.php">
                <input type="text" name="username" class="form-control"
                placeholder="Username" required autofocus>
                <br>
                <input type="password" name="password" class="form-control"
                placeholder="Password" required>

                <br>

                <button class="btn btn-lg btn-success btn-block"
                type="submit">Log in</button>
        </form>

        
    </div>
</body>
</html>