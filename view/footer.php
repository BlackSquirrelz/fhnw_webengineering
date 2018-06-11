<?php

use view\TemplateView;
use service\AuthServiceImpl;

$user = AuthServiceImpl::getInstance()->readUser();

?>

<div class="footer-basic">
    <footer>
        <p class="Info">Welcome to Timecatcher.<br> Your are Loggin in as: <?php echo $user->getUserName()?></p>
    </footer>
</div>
</body>

</html>
