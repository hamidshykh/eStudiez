<?php include('../config/constant.php') ?>

<html>
    <head>
        <title>True Dreams Academy | Admin-Login</title>        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/admin-login.css">
    </head>
<body>    
    <div class="container">

    <div class="justify-content-center">   
        <img src="../images/Logo;E-studiez.png" class="Admin-img" style="width:50%">
    </div>

<form action="" Method="POST">


  <!-- Email input -->
  <div class="form-outline mb-4">    
    <input type="email" id="form2Example1" name="Email" class="form-control" />
    <label class="form-label" for="form2Example1">Email</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" name="pPassword" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- Submit button -->
  <input type="submit" name="submit" class="btn btn-primary btn-block mb-4" value="Sign In"/>
  <!-- <a href="admin-home.php" class="btn btn-primary btn-block mb-4">Sign in</a> -->

  <!-- Register buttons -->
  
</form>
</div>
    </body>
</html>


<?php

if(isset($_POST['submit']))
{
    //get data from form
    $Email = $_POST['Email'];
    $pPassword = $_POST['pPassword'];

    //sql query chech whather the eamil  or password exeits or not 
    // $sql = "SELECT * FROM `addadmin` WHERE `Email`='$Email' AND `pPassword`='$pPassword'";
    $sql = "SELECT * FROM `addadmin` WHERE `Email`='$Email' AND `pPassword`='$pPassword'";
    //execute the query
    $res = mysqli_query($conn, $sql);

    $rows = mysqli_num_rows($res);

    if($rows>0)
    {
        #$_SESSION['type'] = $rows['RoleType']; //Create Session

        while($rows = mysqli_fetch_assoc($res))
        {
            $_SESSION['type'] = $rows['Email'];
            $_SESSION['username'] = $rows['Name'];
            $_SESSION['pass'] = $rows['pPassword'];
            $_SESSION['typee'] = $rows['Roletype'];
            echo "<script>window.location.href='index.php';</script>";

        }

        if($_SESSION['type']=='admin') //Check Session did have value or not
        {                    
           
        }
    }
    else
    {
        echo "<script>
             alert('Email or Password is invalid!')
             window.location.href='login-admin.php';
             </script>";
    }
    }

?>


    
  