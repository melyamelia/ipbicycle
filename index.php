<?php
session_start();
if(isset($_SESSION['status'])){header("Location:dashboard.php");}

			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){	
					echo "
					<script>
					alert(\"Sabar yaa, Coba cek lagi Username dan Passwornya\");
					</script>
					";
				}else if($_GET['pesan'] == "logout"){
					echo "
					<script>
					alert(\"Anda sudah Logout!!! Terimakasih sudah menggunakan Aplikasinya\");
					</script>
					";
				}
			}
			?>
			
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Login Admin IPBICYCLE</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" action="cek.php" method="post">
  <img class="mb-4" src="image/logo1.jpg" alt="" width="120">
  <h1 class="h4 mb-3 font-weight-normal">Silakan Login</h4>
  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" id="inputEmail" name="username" class="form-control mb-2" placeholder="Username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <!--<input type="checkbox" value="remember-me"> Remember me
    </label> -->
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  <p><a href="index.php" class="btn btn-sm btn-danger btn-block mt-4">Kembali</a></p>
  <p class="mt-5 mb-3 text-muted">&copy; IPBICYLE 2021</p>
</form>


    
  </body>
</html>
