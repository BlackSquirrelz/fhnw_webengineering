/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 3/31/18
 * Time: 17:22
 */
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

<body id="base-div">
<nav class="navbar navbar-light navbar-expand-md" id="navbar">
    <div class="container-fluid"><a class="navbar-brand" href="#"><img src="assets/img/timecatcher-icon.png" class="logo" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/login"><strong>&nbsp; TimeCatcher</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
                class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/pricing">Pricing</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/features">Features</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/whoweare">Who we are</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/login">Log in</a></li>
            </ul><a class="btn btn-primary" role="button" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/register">SIGN UP</a></div>
    </div>
</nav>