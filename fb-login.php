<?php
session_start();
if(isset($_SESSION['data'])){
    header("Location: index.php");
}

require_once 'config.php';
$redirect_url = "http://localhost/fb-callback.php";
$permissions = ['email'];
$login_url = $helper->getLoginUrl($redirect_url, $permissions);
?>

<html>
    <head>
        <title>Facebook Login</title>
        <!-- Latest compiled and minified CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    </head>

    <body
          style="background: url(images/cover.jpg) no-repeat center center fixed;
          background-repeat: no-repeat; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;">
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">
                <h3>TrustCheckr</h3>
            </a>

<!--             Links 
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Facebook</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Instagram</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Foursquare</a>
                </li>
            </ul>-->
        </nav>

        <div style="text-align: center; margin-right: 15%">
            <button style="position: absolute; top:45%; cursor: pointer; height: 80px; width: 200px" class="btn btn-outline-primary" type="button" onclick="window.location = '<?php echo $login_url ?>';
                    ">Login with Facebook</button>
        </div>

    </body>
</html>