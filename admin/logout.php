<?php

include('../db/connect.php');

session_destroy();
unset($_SESSION['user']);

echo "<script> window.location='index.php'</script>";



?>