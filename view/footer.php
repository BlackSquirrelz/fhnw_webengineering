<?php

use view\TemplateView;
use service\AuthServiceImpl;

$user = AuthServiceImpl::getInstance()->readUser();

?>

<div class="footer-basic">
    <footer>
        <p class="copyright" >Welcome to Timecatcher.<br> Your are Loggin in as: <p3> <?php echo $user->getUserName()?> </p3></p>
        </footer>
</div>
</body>

</html>
