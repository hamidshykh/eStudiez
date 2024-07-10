<?php 
include('config/constant.php');
#include('../config/logincheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>eStudeiz | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">    

    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css"
  rel="stylesheet"
/>
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="userregister.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/courseview.css">


</head>
<body>

<!-- The cursor elements --> 
      <div class="cursor cursor--small"></div>      
      <canvas class="cursor cursor--canvas" resize style="border-color:white;"></canvas>
      

<nav class="navbar navbar-expand-lg navbar-dark ftco-navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand heading_style" href="index.php"><span>E -</span>studeiz</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
         <li class="nav-item"><a href="course.php" class="nav-link">Course</a></li>
         <li class="nav-item"><a href="instructor.php" class="nav-link">Instructor</a></li>         
         <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>


         <?php
         
            if(isset($_SESSION['typee'])=='admin')
            {
              ?>
              <li class="nav-item dropdown" style="min-width:100px;">
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['username']?>
              </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">                 
              <li><a class="dropdown-item" href="admin/logout.php">Logout</a></li>
            </ul>
            </li>

              <?php
            }             
            elseif(isset($_SESSION['type'])=='Student')
            {
              ?>
              <li class="nav-item dropdown" style="min-width:100px;">
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['username']?>
              </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">                 
              <li><a class="dropdown-item" href="admin/logout.php">Logout</a></li>
            </ul>
            </li>

              <?php
            }
            elseif(isset($_SESSION['type'])=='Parent')
            {
              ?>
              <li class="nav-item dropdown" style="min-width:100px;">
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['username']?>
              </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">                 
              <li><a class="dropdown-item" href="admin/logout.php">Logout</a></li>
            </ul>
            </li>

              <?php
            }
            elseif(isset($_SESSION['typee'])=="Teacher")
            {
              ?>
              <li class="nav-item dropdown" style="min-width:100px;">
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['username']?>
              </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">               
              <li><a class="dropdown-item" href="admin/logout.php">Logout</a></li>
            </ul>
            </li>

              <?php
            }
            else
            {

              ?>

              <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
              <li class="nav-item"><a href="login.php" class="nav-link">login</a></li>    
                              
              
          <?php
              
            }
        ?>
         
     </ul>
     
 </div>
</div>
</nav>





