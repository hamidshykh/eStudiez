<?php
require('constant.php');

try {
    

 if(isset($_GET['Email'])) 
 {
    // $_SESSION['get'] = $_GET['Email'];
    // $_SESSION['getin'] = $_GET['V_Code'];

    // echo $_SESSION['get'];
    // echo "<br>";
    // echo $_SESSION['getin'];

    $sql = "SELECT * FROM `studtbl` WHERE `Email`='$_GET[Email]'"; 

     if($res = mysqli_query($conn,$sql))
     {
         if(mysqli_num_rows($res)==1)
         {
            $rows = mysqli_fetch_assoc($res);            

                $_SESSION['pass'] = $rows['Password'];
                $_SESSION['ID'] = $rows['ID'];

              if($rows['Verification']==0)
              {
                  $update = "UPDATE `studtbl` SET `Verification`= 1 WHERE `Email`='$rows[Email]'";

                  if(mysqli_query($conn,$update))
                  {
                     echo "<script>
                     alert('Password Geting successfully')
                     window.location.href='forgotverify.php';
                     </script>";
                  }
                  else
                  {
                      echo "<script>
                      alert('Cannot Get Password')
                      window.location.href='index.php';
                      </script>";
                  }
              }
              else
              {
                  echo "<script>
                  alert('Password Already Reset')
                  window.location.href='../login.php';
                  </script>";
              }             
         }
     }
     else
     {
         echo "<script>
         alert('User is not register because technical issue Contact Us tell what do you have problem')
         window.location.href='register.php';
         </script>";
     }
 }
} catch (\Throwable $th) {
    echo  $th->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True Dreams Digital Academy | Get Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/forgot.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body">
                              
                              <form class="form" action="" method="POST">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input id="emailInput" placeholder="Password" class="form-control" type="text" name="Password" value="<?php echo $_SESSION['pass']; ?>">

                                      <input id="emailInput" placeholder="Reset Password" class="form-control" type="text" name="ResetPassword">

                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <!-- <input class="btn btn-lg btn-primary btn-block" value="Login Now" type="submit" name="submit"> -->
                                    <button class="btn btn-lg btn-primary btn-block"><a href="../login.php" style="text-decoration:none; color:white;">Login Now</a></button>
                                    <input class="btn btn-lg btn-secondary text-white btn-block" value="Reset Password" type="submit" name="submit">
                                  </div>
                                </fieldset>
                              </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
            
            if(isset($_POST['submit']))
            {
                $Password=$_POST['ResetPassword'];

                $sql2 = "UPDATE `studtbl` SET `Password`='$Password' WHERE `ID`='$_SESSION[ID]'";

                $res1 = mysqli_query($conn, $sql2);

                if($res1)
                {                
                    echo "<script>
                        alert('Reset Password Successfully')
                        window.location.href='../login.php';
                        </script>";
                }
                else{
                    echo "<script>
                        alert('Password Didn't Reset')
                        window.location.href='../login.php';
                        </script>";
                }
            }

?>