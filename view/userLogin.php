<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 13.09.2017
 * Time: 21:28
 */

include 'landingheader.php';

?>
    <div id="login-div">
        <form id="login-form" action="<?php echo $GLOBALS["ROOT_URL"]; ?>/login" method="post">
            <div class="form-group">
                <input class="form-control" type="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label class="control-label">
                        <input type="checkbox" name="remember"/>Remember me </label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Log In</button>
            </div>
            <a class="text-primary already" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/password/request">Reset
                password</a><br>
            <a class="text-primary already" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/register">Not account yet? Press
                here!</a>
        </form>
    </div>

<?php include 'landingfooter.php'; ?>