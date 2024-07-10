<?php 

// include constant.phpfor url
include('../config/constant.php');

// destroy the Session
session_destroy();

// redirect to login page
echo "<script>window.location.href='http://localhost/estudiez/';</script>";



?>