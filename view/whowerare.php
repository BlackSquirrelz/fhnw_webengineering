<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 6/2/18
 * Time: 15:45
 */
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timecatcher</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/team.css">
</head>

<body id="base-div">
<nav class="navbar navbar-light navbar-expand-md" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/login">
            <img src="assets/img/timecatcher-icon.png" class="logo">
            <strong>&nbsp; TimeCatcher</strong>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/pricing">Pricing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/features">Features</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/whoweare">Who we are</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/login">Log in</a></li>
                </ul>
                <a class="btn btn-primary" role="button" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/register">SIGN UP</a>
        </div>
    </div>
</nav>
<div id="whoweare-block">
    <div class="container">
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="assets\img\tobi.jpg" alt="tobi" style="width:100%">
                    <div class="container">
                        <h2>Tobias Weisskopf</h2>
                        <p class="title">CEO &amp; Founder</p>
                        <p>The brain.</p>
                        <p>tobias@timecatchers.com</p>
                        <a href="mailto:tobias@timecatchers.com?subject=Contact request for WE-CRM
                        &body=Hi Tobias, Please contant me about WE-CRM">
                            <button id="btnOutlook">Send Email to Tobi</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="assets\img\fabian.jpg" alt="fabian" style="width:100%">
                    <div class="container">
                        <h2>Fabian Witschi</h2>
                        <p class="title">Art Director</p>
                        <p>The artist.</p>
                        <p>fabian@timecatchers.com</p>
                        <a href="mailto:fabian@timecatchers.com?subject=Contact request for WE-CRM
                        &body=Hi Fabian, Please contant me about WE-CRM">
                            <button id="btnOutlook">Send Email to Fabian</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="assets\img\roger.jpg" alt="roger" style="width:100%">
                    <div class="container">
                        <h2>Roger Kuratle</h2>
                        <p class="title">Head of content</p>
                        <p>The content.</p>
                        <p>roger@timecatchers.com</p>
                        <a href="mailto:roger@timecatchers.com?subject=Contact request for WE-CRM
                        &body=Hi Roger, Please contant me about WE-CRM">
                            <button id="btnOutlook">Send Email to Roger</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'landingfooter.php';