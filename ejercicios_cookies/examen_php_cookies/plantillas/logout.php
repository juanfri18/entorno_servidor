<?php
// Resume the session
session_start();
setcookie("correo","",time()-3600);
session_unset();
session_destroy();

?>

