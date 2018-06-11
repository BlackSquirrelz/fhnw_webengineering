<?php

use view\TemplateView;
use service\AuthServiceImpl;

$user = AuthServiceImpl::getInstance()->readUser();

?>

<div class="footer-basic">
    <footer>
<<<<<<< HEAD
        <p class="Info">Welcome to Timecatcher.<br> Your are Loggin in as: <?php echo $user->getUserName()?></p>
=======
        <p class="copyright">Welcome to Timecatcher. Your are Logged in as: <?php echo $user->getUserName()?></p>
>>>>>>> e7693d14310be458894289b9e8f94f11b83bb390
    </footer>
</div>
</body>

</html>
