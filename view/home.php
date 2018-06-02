<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 6/2/18
 * Time: 15:52
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
    <div class="container-fluid"><a class="navbar-brand" href="#"><img src="assets/img/timecatcher-icon.png" class="logo"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/login"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/features">Features</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/pricing">Pricing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/login">Log in</a></li>
                </ul><a class="btn btn-primary" role="button" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/register">SIGN UP</a></div>
            </ul>
            <form class="form-inline"><input class="form-control" type="search" placeholder="Search..."></form>
            <form class="form-inline ml-auto">
                <p><a class="btn btn-primary" role="button" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/home">Log out</a></p>
            </form>
        </div>
    </div>

</nav>
<h1 class="text-center" id="home-nameheading">Welcome [Name]</h1>
<div id="home-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="homeblock-heading">Tasks</h3>
            </div>
            <div class="col-md-4">
                <h3 class="homeblock-heading">Posts</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5 class="post-heading">Post 1</h5><small class="post-small">5 minutes ago - by Tobias</small>
                        <p class="post-paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&nbsp;</p>
                        <div></div>
                        <div></div>
                    </li>
                    <li class="list-group-item">
                        <h5 class="post-heading">Post 2</h5><small class="post-small">4 hours ago - by Fabian</small>
                        <p class="post-paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&nbsp;</p>
                        <div></div>
                    </li>
                    <li class="list-group-item">
                        <h5 class="post-heading">Post 3</h5><small class="post-small">2 days ago - by Tobias</small>
                        <p class="post-paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&nbsp;</p>
                        <div></div>
                    </li>
                    <li class="list-group-item">
                        <h5 class="post-heading">Post 4</h5><small class="post-small">3 days ago - by Sameer</small>
                        <p class="post-paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&nbsp;</p>
                        <div></div>
                    </li>
                    <li class="list-group-item">
                        <h5 class="post-heading">Post 5</h5><small class="post-small">1 week ago - by Roger</small>
                        <p class="post-paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&nbsp;</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="homeblock-heading">Activity feed</h3>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
