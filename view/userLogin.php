<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 12:33
 */

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeCatcher</title>

</head>

<body>
<div class="container" style="display:flex;flex-direction:column;justify-content:center;">
    <div class="page-header">
        <h2 class="text-center"><strong>TimeCatcher</strong></h2></div>
    <form action="<?php echo $GLOBALS["ROOT_URL"]; ?>/login" method="post">
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Log In</button>
        </div><a class="text-primary already" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/register">Register here.</a></form>
</div>
</body>

</html>