<?php
session_start();
session_destroy();
header("Location: http://localhost/sieperpus/login/index.php");
?>
