<?php include 'constant.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True Dreams Digital Academy | Forgot Password</title>
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
                          <p>Please Enter Your Email Address For Verification</p>
                            <div class="panel-body">
                              
                              <form class="form" action="" method="POST">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input id="emailInput" placeholder="email address" class="form-control" type="email" name="Email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit" name="submit">
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

            //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;


        function sendMail($Email)
        {
            //Load Composer's autoloader
            require '../PHPMailer/PHPMailer.php';            
            require '../PHPMailer/SMTP.php';
            require '../PHPMailer/Exception.php';

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
            $mail->setFrom('abdullahkhanstft@gmail.com','True Dreams Digtal Academy');
            $mail->addAddress($Email);     //Add a recipient
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Email Verification from True Dreams Digtal Academy';
            $mail->Body    =  "<span style='font-size:large; font-family:Cursive; font-weight:400px; color:#427BCB;'>Thanks for Using Our StudyLab click the link below to Get your Password</span>
                              <a href='http://localhost/studylab/config/forgotverify.php?Email=$Email' style='font-size:25px;'>Get</a>
                              ";
            $mail->send();
            return true;

            }
        catch (Exception $e) {
                  
                return false;

          }
        } 

    if(isset($_POST['submit']))
    {
        $Email = $_POST['Email'];

        $sql = "UPDATE `studtbl` SET `Verification`='0' WHERE `Email`='$Email'";

            if(mysqli_query($conn,$sql) && sendMail($_POST['Email']))
            {
              echo "<script>
                    alert('Please Check Your Mail For Verify Your Account')
                    window.location.href='../login.php';
                    </script>";

            }
            else
            {
              echo "<script>
                    alert('Please Check Your Mail For Verify Your Account')
                    window.location.href='login.php';
                    </script>";

            }
    }

?>



