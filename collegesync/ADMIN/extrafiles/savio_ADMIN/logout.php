<?php
session_start();
session_unset();
header("location:../USER/mainlogin.php");
?>