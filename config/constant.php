<?php

// start Session
session_start();

// create Constants to store non reapeting values
define('SiteUrl' , 'http://localhost/estudeiz/');
define('Serve','localhost');
define('Abdullahkhan','root');
define('abkhan', '');
define('Db_Name' , 'estudiez');

$imgurl = 'http://localhost/estudiez/images/imagelab/';

$imgurlprofile = 'http://localhost/estudiez/images/userimgprofile/';

$imgadmin = 'http://localhost/estudiez/images/adminimg/';

$classVideo = 'http://localhost/estudiez/images/classvideo/';

$conn = mysqli_connect(Serve, Abdullahkhan, abkhan ) or die(mysqli_error()); //connecting database
$db_select = mysqli_select_db($conn, Db_Name) or die(mysqli_error());      //selecting database

?>