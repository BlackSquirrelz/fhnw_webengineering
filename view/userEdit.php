<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 13.09.2017
 * Time: 21:48
 */
/**
* Code adapted from Reference Project to fit the requirements of TimeCatcher
 */


use domain\User;
use validator\UserValidator;

isset($this->user) ? $user = $this->user : $user = new User();
isset($this->userValidator) ? $userValidator = $this->userValidator : $userValidator = new UserValidator();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($this->pageTitle) ? $this->pageTitle : "WE-Timecatcher"; ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div class="container" style="display:flex;flex-direction:column;justify-content:center;">
    <div class="page-header">
        <h2 class="text-center"><?php echo isset($this->pageHeading) ? $this->pageHeading : "<strong>WE-Timecatcher</strong> your account. "; ?></h2></div>
    <form action="<?php echo $GLOBALS["ROOT_URL"]; ?><?php echo isset($this->pageFormAction) ? $this->pageFormAction : "/register"; ?>" method="post">
        <div class="form-group <?php echo $userValidator->isFirstNameError() ? "has-error" : ""; ?>">
            <input class="form-control" type="text" name="first_name" placeholder="First Name" value="<?php echo $user->getFirstName() ?>">
            <p class="help-block"><?php echo $userValidator->getFirstNameError() ?></p>
        </div>
        <div class="form-group <?php echo $userValidator->isLastNameError() ? "has-error" : ""; ?>">
            <input class="form-control" type="text" name="last_name" placeholder="Last Name" value="<?php echo $user->getLastName() ?>">
            <p class="help-block"><?php echo $userValidator->getLastNameError() ?></p>
        </div>
        <div class="form-group <?php echo $userValidator->isUsernameError() ? "has-error" : ""; ?>">
            <input class="form-control" type="text" name="username" placeholder="User Name" value="<?php echo $user->getUserName() ?>">
            <p class="help-block"><?php echo $userValidator->getUsernameError() ?></p>
        </div>
        <div class="form-group <?php echo $userValidator->isEmailError() ? "has-error" : ""; ?>">
            <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $user->getEmail() ?>">
            <p class="help-block"><?php echo $userValidator->getEmailError() ?></p>
        </div>
        <div class="form-group <?php echo $userValidator->isPasswordError() ? "has-error" : ""; ?>">
            <input class="form-control" type="password" name="password" placeholder="Password">
            <p class="help-block"><?php echo $userValidator->getPasswordError() ?></p>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit"><?php echo isset($this->pageSubmitText) ? $this->pageSubmitText : "Register"; ?></button>
        </div>
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
