<?php
session_start();

if (!isset($_SESSION['data'])) {
    header("Location: fb-login.php");
}
$data = $_SESSION['data'];
?>

<html>
    <head>
        <title>Welcome, <?php echo $data['name']; ?></title>
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
            <ul class="navbar-nav ml-auto">
                <li class="navbar-item" style="cursor: pointer">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3"></div>
                <div class="col-md-3" style="margin-top: 10px">
                    <div class="card" style="width:500px; height: 520px">

                        <div class="card-body">

                            </h4><img height="50px" width="50px"  src="<?php echo $data['picture']['url']; ?>" alt="Card image">
                            <h4 class="card-title"><b>ID:</b><?php echo $data['id']; ?>
                                <h4 class="card-title"><b>Name: </b><?php echo $data['name']; ?></h4>
                                <h4 class="card-title"><b>Age: </b><?php echo $data['age_range']['min']; ?></h4>
                                <h4 class="card-title"><b>Gender: </b><?php echo $data['gender']; ?></h4>
                                <h4 class="card-title"><b>Email: </b><?php echo $data['email']; ?></h4>
                                <h4 class="card-title"><b>Locale: </b><?php echo $data['locale']; ?></h4>
                                <h4 class="card-title"><b>Email: </b><?php echo $data['email']; ?></h4>
                                <h4 class="card-title"><b>Profile Verified?: </b><?php
                                    if ($data['verified'] == 1) {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?></h4>
                                <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>


    </body>
</html>