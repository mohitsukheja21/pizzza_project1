<?php 
session_start();
session_destroy();
header("Location:regestration.php");
exit;
?>