<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 6/2/18
 * Time: 16:02
 */
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2018_webengineering</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body id="home-div">
<nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid"><a class="navbar-brand" href="#"><img src="assets/img/timecatcher-icon.png" class="logo" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/login"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="home.html">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="projects.html">Projects</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="profile.html">Profile</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="settings.html">Settings</a></li>
            </ul>
            <form class="form-inline"><input class="form-control" type="search" placeholder="Search..."></form>
            <form class="form-inline ml-auto">
                <p><a class="btn btn-primary" role="button" href="login.html">Log out</a></p>
            </form>
        </div>
    </div>
</nav>
<h1 class="menu-heading">Settings</h1>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
