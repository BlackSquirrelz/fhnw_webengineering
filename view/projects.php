<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 6/2/18
 * Time: 16:05
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
                <li class="nav-item" role="presentation"><a class="nav-link" href="home.html">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="projects.html">Projects</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="profile.html">Profile</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="settings.html">Settings</a></li>
            </ul>
            <form class="form-inline"><input class="form-control" type="search" placeholder="Search..."></form>
            <form class="form-inline ml-auto">
                <p><a class="btn btn-primary" role="button" href="login.html">Log out</a></p>
            </form>
        </div>
    </div>
</nav>
<h1 class="menu-heading">Projects</h1>
<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item"><a class="nav-link active" href="projects.html">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="allprojects.html">All Projects</a></li>
        </ul>
    </div>
</div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-8">
                <h5 class="projects-heading">Recent Projects</h5>
            </div>
            <div class="col-md-6 col-xl-4 offset-xl-2" style="margin:0px;">
                <h5 class="projects-heading">Upcoming tasks</h5>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h6>Project A</h6>
            </div>
            <div class="col-md-4">
                <h6>Project B</h6>
            </div>
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="form-check" id="checkbox-firstupcoming"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Task 1</label></div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Task 2</label></div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Task 3</label></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container" id="dashboard-container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="dashboard-heading">Completed Tasks</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item">
                        <p id="dashboard-firsttask">Latest task completed</p>
                    </li>
                    <li class="list-group-item">
                        <p id="dashboard-secondtask">Task completed</p>
                    </li>
                    <li class="list-group-item">
                        <p id="dashboard-thirdtask">Task completed</p>
                    </li>
                    <li class="list-group-item">
                        <p id="dashboard-fourthtask">Task completed</p>
                    </li>
                    <li class="list-group-item">
                        <p id="dashboard-fifthtask">Task completed</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

