<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Studiez | Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body style="background-image: linear-gradient(to right, #002fa7, #77b5fe, #c0c0c0);">
<?php
include('partial/header.php');

 ?>

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-7">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            
            <div class="col-md-12 col-lg-12 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black ">

                <form action="" method="Post">

                  <div class="d-flex align-items-center text-center mb-3 pb-1">
                    
                    <span class="h1 fw-bold mb-0 ">E-Studiez</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control form-control-lg" name="Email"/>
                    <label class="form-label" for="form2Example17">Email address</label>
                    <span id="Lemail" class="text-danger"></span>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg" name="Password"/>
                    <label class="form-label" for="form2Example17">Password</label>
                    <span id="Lpassword" class="text-danger"></span>
                  </div>

                  <div class="pt-1 mb-4">                    
                    <input type="submit" class="custom-btn1"style="margin: auto;width: auto;display: block;" name="submit" value="Login"/>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php"
                      style="color:#427BCB;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                  <a href="config/forgot.php" class="small text-primary">Forgot Password</a>
                </form>

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

try{
  if(isset($_POST['submit']))
  {
      $Email = $_POST['Email'];
      $Password = $_POST['Password'];

      $sql = "SELECT * FROM `studtbl` WHERE `Email`='$Email' AND `Password`='$Password'";

      $res = mysqli_query($conn,$sql);

      $row = mysqli_num_rows($res);

      if(empty($_POST['Email']))
      {
        echo "<script>
        alert('Email felid is empty')
        window.location.href='login.php';
        </script>";
      }
      elseif(empty($_POST['Password']))
      {
        echo "<script>
        alert('Password felid is empty')
        window.location.href='login.php';
        </script>";
      }

      if($row>0)
      {
          while($row = mysqli_fetch_assoc($res))
          {

              $_SESSION['ID'] = $row['ID'];
              $_SESSION['code'] = $row['Verify_code'];
              $_SESSION['username'] = $row['FullName'];
              $_SESSION['Email'] = $row['Email'];
              $_SESSION['type'] = $row['RoleType'];              
              $_SESSION['verification'] = $row['Verification'];
              
              
          }
          if($_SESSION['verification']==1)
          {
          if($_SESSION['type']=='Student')
          {
              echo "<script>window.location.href='UserDashboard/index.php';</script>";
          }
          if($_SESSION['type']=='Parent'){
            echo "<script>window.location.href='guardian/index.php';</script>";
          }
        }
        else
        {
          echo "<script>
            alert('Email Not verified! Please verify your Email Address.')
            window.location.href='index.php';
            </script>";
            session_destroy();
            
        }
      }$ins = "SELECT * FROM `teacher` WHERE `Email`='$Email' AND `Password`='$Password'";

      $ress = mysqli_query($conn,$ins);

      $roww = mysqli_num_rows($ress);

      if($roww>0)
      {
        while($roww = mysqli_fetch_assoc($ress))
      {
        $_SESSION['ID'] = $roww['ID'];
        $_SESSION['username'] = $roww['FullName'];          
        $_SESSION['typee'] = $roww['RoleType'];
        $_SESSION['Email'] = $roww['Email'];
        $_SESSION['TeacherCode'] = $roww['TeacherCode'];
        $_SESSION['TCode'] = $roww['TCode'];
        $_SESSION['verify'] = $roww['Verification'];
      }
      if($_SESSION['verify']==1)
          {
        if($_SESSION['typee']=='Teacher')
        {
          echo "<script>window.location.href='instructor/index.php';</script>";
        }
      }
      else
      {
        echo "<script>
          alert('Email Not verified! Please verify your Email Address.')
          window.location.href='index.php';
          </script>";
          session_destroy();
          
      }
      
    }
    else
  {
    echo "<script>
    alert('Email or Password Is Invalid!')
    window.location.href='login.php';
    </script>";          
  }
        
      }
                        
  }

catch(Exception $e)
{
  echo  'Message: ' .$e->getMessage();
}

?>