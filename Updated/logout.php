<?php
session_start();
//destroy session
session_destroy();
//unset cookies
setcookie('user_login', '', 0, "/");

echo '<script type = "text/javascript">window.location = "index.php";</script>';
