<?php
session_start();
session_destroy();
header('location:rigester.php');
?>