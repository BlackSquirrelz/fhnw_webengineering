<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 6/2/18
 * Time: 16:02
 */

use view\TemplateView;
use service\AuthServiceImpl;

$user = AuthServiceImpl::getInstance()->readUser();

use domain\User;
use validator\UserValidator;

isset($this->userValidator) ? $userValidator = $this->userValidator : $userValidator = new UserValidator();

?>

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
<h1 class="menu-heading">Profile</h1>
<h2 class="text-center"><strong>Hi, <?php echo TemplateView::noHTML($user->getUserName()); ?> welcome to you profile!</strong></h2></div>
<div></div>
<div class="container profile profile-view" id="profile">
    <form action="<?php echo $GLOBALS["ROOT_URL"]; ?><?php echo isset($this->pageFormAction) ? $this->pageFormAction : "/profile/update"; ?>" method="post">
         <div class="col-md-8">
                <h1>Profile </h1>
                <hr>
                <div class="form-row">
                    <div class="form-group <?php echo $userValidator->isFirstNameError() ? "has-error" : ""; ?>">
                        <h4>First Name </h4><br><input class="form-control" type="text" name="first_name" placeholder="First Name" value="<?php echo $user->getFirstName() ?>">
                        <p class="help-block"><?php echo $userValidator->getFirstNameError() ?></p>
                    </div>
                    <div></div>
                    <div class="form-group <?php echo $userValidator->isLastNameError() ? "has-error" : ""; ?>">
                        <h4>First Name </h4><br><input class="form-control" type="text" name="last_name" placeholder="Last Name" value="<?php echo $user->getLastName() ?>">
                        <p class="help-block"><?php echo $userValidator->getLastNameError() ?></p>
                    </div>
                    <div class="form-group <?php echo $userValidator->isUsernameError() ? "has-error" : ""; ?>">
                        <h4>Username </h4><br><input class="form-control" type="text" name="username" placeholder="User Name" value="<?php echo $user->getUserName() ?>">
                        <p class="help-block"><?php echo $userValidator->getUsernameError() ?></p>
                    </div>
                    <div class="form-group <?php echo $userValidator->isEmailError() ? "has-error" : ""; ?>">
                        <h4>Email </h4><br><input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo $user->getEmail() ?>">
                        <p class="help-block"><?php echo $userValidator->getEmailError() ?></p>
                    </div>
                    <div class="form-group <?php echo $userValidator->isPasswordError() ? "has-error" : ""; ?>">
                        <h4>Password</h4><br><input class="form-control" type="password" name="password" placeholder="User Name" value="<?php echo $user->getPassword() ?>">
                        <p class="help-block"><?php echo $userValidator->getPasswordError() ?></p>
                    </div>
                <hr>
                <div class="form-row">
                    <button class="btn btn-primary btn-block" type="submit"><?php echo isset($this->pageSubmitText) ? $this->pageSubmitText : "Update Information"; ?></button></div>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>