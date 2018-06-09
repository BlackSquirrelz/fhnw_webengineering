<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 6/2/18
 * Time: 16:03
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
    <div class="container-fluid"><a class="navbar-brand" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/home"><img src="assets/img/timecatcher-icon.png" class="logo"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/home">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/allprojects">Projects</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/profile">Profile</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/settings">Settings</a></li>
            </ul>
            <form class="form-inline"><input class="form-control" type="search" placeholder="Search..."></form>
            <form class="form-inline ml-auto">
                <p><a class="btn btn-primary" role="button" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/home">Log out</a></p>
            </form>
        </div>
    </div>
</nav>
<h1 class="menu-heading">Create new Project</h1>
<div>
    <form action="<?php echo $GLOBALS["ROOT_URL"]; ?>/project/create" method="post" id="createproject-form">
        <p class="newproject-paragraph"><label>Project Name</label></p><input class="form-control" type="text" required="1" placeholder="Enter a suitable project name">
        <p class="newproject-paragraph"><label>Project Description</label></p><textarea class="form-control" rows="10" cols="1" required="0" placeholder="Enter a comprehensive description of this project"></textarea>
        <p class="newproject-paragraph"><label>Start Date</label></p><input class="form-control" type="date" required="1" placeholder="Enter a start date">
        <p class="newproject-paragraph"><label>End Date</label></p><input class="form-control" type="date" required="0" placeholder="Enter an end date">
        <p class="text-center newproject-paragraph"><button class="btn btn-primary" type="submit">Create Project</button></p>
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
