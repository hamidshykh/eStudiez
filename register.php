
<?php 
include('Partial/header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>eStudiez | Home</title>
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

    
    <link rel="stylesheet" href="css/flaticon.css"> 
    <link rel="stylesheet" href="css.userregister.css">       


</head>
<style>
  button , input[type="submit"] {
	transition: all 0.4s ease-in-out !important;
    -webkit-transition: all 0.4s ease-in-out !important;
    margin: auto;
}
  .custom-btn1 {
    color: white;
        background-color: #002fa7;
        text-decoration-line: none;
        box-shadow: 1px 1px 10px silver;
        padding: 8px 45px;
        border: 1px solid #4a87e6;
        text-transform: uppercase;
        border-radius: 50px;
      
    }
    
    .custom-btn1:hover{
        color:#002fa7;
        background-color: white;
        text-decoration: none;
      }

</style>
<body style="background-image: linear-gradient(to bottom, #002fa7, #77b5fe, #c0c0c0);">



<br><br>

<div class="container">
  <div class="row">
    <div style="background-color:rgba(0,0,0,0.5)" class="custom-block1 ftco-animate wrapper-1" style="boarder-radius:10px">
    <div class="container col text-center">
      <h2>Registration Form</h2>
    </div>
    

    <div class="tabs-handler">
    <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">Teacher</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">Parent</a>
  </li>
</ul>
</div>

<div class="tabs-content-all">

  <!-- Tab panes -->
  <div class="tab-content">
   
  <div class="tab-pane in active" id="tab-1" role="tabpanel">
  <div class="block text-center">
    <h3 style="color:black; margin-top:10px;"> STUDENT </h3>
</div>


  <div class="bg-transparent col-12 justify-content-center align-test-center" style="user-select: auto;">
   
    <form action="" method="POST" onsubmit="return validation()">    
        
    <ul class="text-danger mt-3">
      <li>Please use your own information other wise we'll delete your account</li>      
    </ul>

  <div class="row">
    <div class="col">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Full Name <span style="color:red;">*</span></label>
    <input type="text" class="form-control" id="FullName" aria-describedby="emailHelp" placeholder="FullName" name="FullName" oninvalid="setCustomValidity('Please enter Fullname')" onchange="try{setCustomValidity('')}catch(e){}" required="">    
    <span id="Fname" class="text-danger"></span>
  </div>
    </div>    
  </div>
  

  <div class="row">
    <div class="col">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Email <span style="color:red;">*</span></label>
    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" oninvalid="setCustomValidity('Please enter email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
    <span id="email" class="text-danger"> </span>
  </div>
    </div>
    
  </div>
  
  
    <div class="row">
    <div class="col text-white">
    <label for="inputState">Phone No <span style="color:red;">*</span></label>
      <input type="text" class="form-control" id="mobileno" name="PhoneNo" placeholder="03/+92" oninvalid="setCustomValidity('Please enter Phone No')" onchange="try{setCustomValidity('')}catch(e){}" required="">
      <span id="mobNo" class="text-danger"> </span>      
    </div>
    
  </div>

  

  <div class="row">
    <div class="col">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Password <span style="color:red;">*</span></label>
    <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" oninvalid="setCustomValidity('Please enter password')" onchange="try{setCustomValidity('')}catch(e){}" required="">
    <span id="password" class="text-danger"> </span>
  </div>
    </div>
    
  </div>

    
    <br>

    <div class="row">
    <div class="col-12">    
    <span id="alreadyaccount" class="text-danger text-center">If You Have already an Account <a href="login.php">Login</a></span>
  </div>    
  </div>

    

    <div class="regbtn" id="regbtn">
      <input type="submit" class="custom-btn1" id="submit" name="Student" value="Register">        
    </div>    

    <br>

</form>

</div>
      
    </div>

    <div class="tab-pane" id="tab-2" role="tabpanel">
    <div class="block text-center">
    <h3 style="color:black; margin-top:10px;"> TEACHER </h3>
</div>
    <div class="bg-transparent col-12 justify-content-center align-test-center" style="user-select: auto;">
    <form action="" method="POST" onsubmit="return validation()">    
        
        <ul class="text-danger mt-3">
          <li>Please use your own information other wise we'll delete your account</li>      
        </ul>
    
      <div class="row">
        <div class="col">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-white">Full Name <span style="color:red;">*</span></label>
        <input type="text" class="form-control" id="Fullname" aria-describedby="emailHelp" placeholder="FullName" name="FullName" oninvalid="setCustomValidity('Please enter Fullname')" onchange="try{setCustomValidity('')}catch(e){}" required="">        
        <span id="Fname" class="text-danger"></span>
      </div>
        </div>    
      </div>
      
    
      <div class="row">
        <div class="col">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text-white">Email <span style="color:red;">*</span></label>
        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" oninvalid="setCustomValidity('Please enter email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
        <span id="email" class="text-danger"> </span>
      </div>
        </div>
        
      </div>
      
      
        <div class="row">
        <div class="col text-white">
        <label for="inputState">Phone No <span style="color:red;">*</span></label>
          <input type="text" class="form-control" id="mobileno" name="PhonoNo" placeholder="03/+92" oninvalid="setCustomValidity('Please enter Phone No')" onchange="try{setCustomValidity('')}catch(e){}" required="">
          <span id="mobNo" class="text-danger"> </span>      
        </div>        
      </div>                
    
      <div class="row">
        <div class="col">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text-white">Password <span style="color:red;">*</span></label>
        <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" oninvalid="setCustomValidity('Please enter password')" onchange="try{setCustomValidity('')}catch(e){}" required="">
        <span id="password" class="text-danger"> </span>
      </div>
        </div>        
      </div>  

      <div class="row">
        <div class="col">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text-white">Teacher Code<span style="color:red;">*</span></label>
        <input type="text" class="form-control" id="TeCode" placeholder="Teacher Code" name="TeCode" oninvalid="setCustomValidity('Please enter Teacher Code')" onchange="try{setCustomValidity('')}catch(e){}" required="">
        <span id="password" class="text-danger"> </span>
      </div>
        </div>        
      </div>

        <div class="row">
        <div class="col-12">    
        <span id="alreadyaccount" class="text-danger text-center">If You Have already an Account <a href="login.php">Login</a></span>
      </div>    
      </div>
    
        
    
        <div class="regbtn" id="regbtn">
          <input type="submit" class="custom-btn1" id="submit" name="Teacher" value="Register">  
          
        </div>
    
        <br>
    
    </form>
</div>
      
    </div>

    <div class="tab-pane" id="tab-3" role="tabpanel">
    <div class="block text-center">
    <h3 style="color:black; margin-top:10px;"> PARENT </h3>
</div>
    <div class="bg-transparent col-12 justify-content-center align-test-center" style="user-select: auto;">
    <form action="" method="POST" onsubmit="return validation()">    
        
        <ul class="text-danger mt-3">
          <li>Please use your own information other wise we'll delete your account</li>      
        </ul>
    
      <div class="row">
        <div class="col">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-white">Full Name <span style="color:red;">*</span></label>
        <input type="text" class="form-control" id="Fullname" aria-describedby="emailHelp" placeholder="FullName" name="FullName" oninvalid="setCustomValidity('Please enter Fullname')" onchange="try{setCustomValidity('')}catch(e){}" required="">        
        <span id="Fname" class="text-danger"></span>
      </div>
        </div>    
      </div>
      
    
      <div class="row">
        <div class="col">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text-white">Email <span style="color:red;">*</span></label>
        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" oninvalid="setCustomValidity('Please enter email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
        <span id="email" class="text-danger"> </span>
      </div>
        </div>
        
      </div>
      
      
        <div class="row">
        <div class="col text-white">
        <label for="inputState">Phone No <span style="color:red;">*</span></label>
          <input type="text" class="form-control" id="mobileno" name="PhoneNo" placeholder="03/+92" oninvalid="setCustomValidity('Please enter Phone No')" onchange="try{setCustomValidity('')}catch(e){}" required="">
          <span id="mobNo" class="text-danger"> </span>      
        </div>
        
      </div>
    
      <div class="row">
        <div class="col">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text-white">Password <span style="color:red;">*</span></label>
        <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" oninvalid="setCustomValidity('Please enter password')" onchange="try{setCustomValidity('')}catch(e){}" required="">
        <span id="password" class="text-danger"> </span>
      </div>
        </div>
        
      </div>
    
        <br>
    
        <div class="row">
        <div class="col-12">    
        <span id="alreadyaccount" class="text-danger text-center">If You Have already an Account <a href="login.php">Login</a></span>
      </div>    
      </div>
    
            
        <div class="regbtn" id="regbtn">
          <input type="submit" class="custom-btn1" id="submit" name="Parent" value="Register">  
          
        </div>
    
        <br>
    
    </form>
</div>
      
    </div>
     
  </div>
</div>
    
</div>
  </div>
</div>    

<?php include('Partial/footer.php') ?>

<script src="js/registervalidation.js"></script>

</body>
</html>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


        function sendMail($Email,$V_code)
        {
            //Load Composer's autoloader
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
            require 'PHPMailer/Exception.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            
        try {
            //Server settings            
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'abdullahkhanstft@gmail.com';           //SMTP username
            //Gmail account Password: (vdufjyyjwjdymzag)
            $mail->Password   = 'vdufjyyjwjdymzag';                     //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('abdullahkhanstft@gmail.com','eStudiez');
            $mail->addAddress($Email);     //Add a recipient
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Email Verification from eStudiez';
            $mail->Body    =  "<span style='font-size:large; font-family:Cursive; font-weight:400px; color:#427BCB;'>Thanks for Registration click the link below to verify the Email Address</span>
                              <a href='http://localhost/estudiez/emailverify.php?Email=$Email&V_Code=$V_code' style='font-size:25px;'>Verify</a>
                              ";
            $mail->send();
            return true;

            }
        catch (Exception $e) {
                  
                return false;

          }
        } 


try{
    if(isset($_POST['Student']))
    {                 

      $exist_query = "SELECT * FROM `studtbl` WHERE `Email` = '".$_POST['Email']."'";

      $res = mysqli_query($conn,$exist_query);

      $V_code = bin2hex(random_bytes(3));

      if($res)
      {
          if(mysqli_num_rows($res)>0)
          {            
              $row = mysqli_fetch_assoc($res);              

              $email = $row['Email']==$_POST['Email'];              

              if($email==TRUE)
              {
                echo "<script>
                alert('User Not Register please Use Unique Email Address')
                window.location.href='register.php';
                </script>";
                
              }              
          }
          else
          {
            
            $exist= "SELECT * FROM `teacher` WHERE `Email` = '".$_POST['Email']."'";
            $ress = mysqli_query($conn,$exist);

            if($ress)
            {
              if(mysqli_num_rows($ress)>0)
              {            
                
                  while($row = mysqli_fetch_assoc($ress))
                  {
                    $email = $row['Email']==$_POST['Email'];              
    
                    if($email==TRUE)
                    {
                      echo "<script>
                      alert('User Not Register please Use Unique Email Address')
                      window.location.href='register.php';
                      </script>";
                      
                    }              
                  }                                
              }
              else{

                $sql = "INSERT INTO `studtbl`(`FullName`,`Email`, `mobile_No`, `Password`, `RoleType`, `Verify_code`, `Verification`) VALUES ('$_POST[FullName]','$_POST[Email]','$_POST[PhoneNo]','$_POST[Password]','Student','$V_code','0')";
            
                if(mysqli_query($conn,$sql) && sendMail($_POST['Email'],$V_code))
                {
                  echo "<script>
                    alert('Student successfully registered')
                    window.location.href='login.php';
                    </script>";
    
                }
                else
                {
                    echo "<script>
                      alert('Student is not register because same issue in your action')
                      window.location.href='register.php';
                      </script>";
    
                }
              }
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




    if(isset($_POST['Teacher']))
    {                 

      $exist_query = "SELECT * FROM `teacher` WHERE `Email` = '".$_POST['Email']."'";

      $res = mysqli_query($conn,$exist_query);
      
      $V_code = bin2hex(random_bytes(3));

      if($res)
      {
          if(mysqli_num_rows($res)>0)
          {            
              $row = mysqli_fetch_assoc($res);              

              $email = $row2['Email']==$_POST['Email'];                            

              if($email==TRUE)
              {
                echo "<script>
                alert('User Not Register please Use Unique Email Address')
                window.location.href='register.php';
                </script>";
                
              } 
              
          }
          else
          { 
            
            $exist= "SELECT * FROM `studtbl` WHERE `Email` = '".$_POST['Email']."'";
            $ress = mysqli_query($conn,$exist);

            if($ress)
            {
              if(mysqli_num_rows($ress)>0)
              {            
                
                  while($row = mysqli_fetch_assoc($ress))
                  {
                    $email = $row['Email']==$_POST['Email'];              
    
                    if($email==TRUE)
                    {
                      echo "<script>
                      alert('User Not Register please Use Unique Email Address')
                      window.location.href='register.php';
                      </script>";
                      
                    }              
                  }                                
              }
              else{
                    
                // $sql2 ="INSERT INTO `teacher`( `FullName`, `Email`, `Password`, `TCode`, `CategoryID`, `RoleType`, `PhonoNo`) VALUES
                //  ('$_POST[FullName]','$_POST[Email]','$_POST[Password]','$V_code',$_POST[TeCode],'Teacher',$_POST[PhonoNo])";
    
                // $sql2 = "UPDATE `teacher` SET `FullName`='$_POST[FullName]',`Email`='$_POST[Email]',`Password`='$_POST[Password]',`TCode`='$V_code',`RoleType`='Teacher',`PhonoNo`='$_POST[PhonoNo]' WHERE `TeacherCode`='$_POST[TeCode]'";

                $sql2 = "SELECT * FROM `teacher` WHERE `TeacherCode`='$_POST[TeCode]'";

                $tcode = mysqli_query($conn,$sql2);

                if($tcode)
                {
                    if(mysqli_num_rows($tcode)>0)
                  {
                        $update = "UPDATE `teacher` SET `FullName`='$_POST[FullName]',`Email`='$_POST[Email]',`Password`='$_POST[Password]',`TCode`='$V_code',`RoleType`='Teacher',`PhonoNo`='$_POST[PhonoNo]',`Verification`='0' WHERE `TeacherCode`='$_POST[TeCode]'";

                      if(mysqli_query($conn,$update) && sendMail($_POST['Email'],$V_code)) 
                      {
                          echo "<script>
                            alert('Teacher successfully registered')
                            window.location.href='login.php';
                            </script>";
    
                      }                       
                  }
                  else
                      {
                        echo "<script>
                          alert('Teacher Code is wrong')
                          window.location.href='register.php';
                          </script>";
    
                      }
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
    
}
    }

    if(isset($_POST['Parent']))
    {                 

      $exist_query = "SELECT * FROM `studtbl` WHERE `Email` = '".$_POST['Email']."'";

      $res = mysqli_query($conn,$exist_query);

      $V_code = bin2hex(random_bytes(3));

      if($res)
      {
          if(mysqli_num_rows($res)>0)
          {            
              $row = mysqli_fetch_assoc($res);              

              $email = $row['Email']==$_POST['Email'];              

              if($email==TRUE)
              {
                echo "<script>
                alert('User Not Register please Use Unique Email Address')
                window.location.href='register.php';
                </script>";
                
              }              
          }
          else
          {
            
            $exist= "SELECT * FROM `teacher` WHERE `Email` = '".$_POST['Email']."'";
            $ress = mysqli_query($conn,$exist);

            if($ress)
            {
              if(mysqli_num_rows($ress)>0)
              {            
                
                  while($row = mysqli_fetch_assoc($ress))
                  {
                    $email = $row['Email']==$_POST['Email'];              
    
                    if($email==TRUE)
                    {
                      echo "<script>
                      alert('User Not Register please Use Unique Email Address')
                      window.location.href='register.php';
                      </script>";
                      
                    }              
                  }                                
              }
              else{

                $sql = "INSERT INTO `studtbl`(`FullName`,`Email`, `mobile_No`, `Password`, `RoleType`, `Verify_code`, `Verification`) VALUES ('$_POST[FullName]','$_POST[Email]','$_POST[PhoneNo]','$_POST[Password]','Parent','$V_code','0')";
            
                if(mysqli_query($conn,$sql) && sendMail($_POST['Email'],$V_code))
                {
                  echo "<script>
                    alert('Parent/Garudian successfully registered')
                    window.location.href='login.php';
                    </script>";
    
                }
                else
                {
                    echo "<script>
                      alert('Parent/Garudian is not register because same issue in your action')
                      window.location.href='register.php';
                      </script>";
    
                }
              }
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
}
  catch(Exception $e) {
    echo  'Message: ' .$e->getMessage();
} 

?>
