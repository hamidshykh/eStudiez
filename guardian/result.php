


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>

body,html{
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
    }

    .searchbar{

    margin:auto;
    height: 60px;
    background-image: linear-gradient(to left,  #c0c0c0 0%,#002fa7 100%);
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    border-radius:20px;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 200px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    background-image: linear-gradient(to left, #002fa7 0%, #c0c0c0 100%);
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }
</style>
<body>
<?php include '../Partial/gaurdian-header.php'; ?>


<div class="Admin-Content text-center text-white">
    <h3>Enter Here Rollno For Find Candidate</h3>
</div>

<br>
<form action="" method="POST">
<div class="container ">
      <div class="d-flex justify-content-center">
        <div class="searchbar">
          <input class="search_input" type="text" name="RollNo" placeholder="RollNo...">

          <!-- <input type="submit" class="search_icon" name="submit" > -->

          <button type="submit" name="submit" class="search_icon"><i class="fas fa-search"></i></button>

          <!-- <a href="#" class="search_icon" ><i class="fas fa-search"></i></a> -->

        </div>
      </div>
    </div>
</form>

<section style="background-color:#c0c0c0;padding:auto">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-lg-10 col-md-10">
        <div class="card text-black" style="border-radius: 25px; margin-top:20px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8 col-md-10 order-2 order-lg-1">
              <form class="mx-1 mx-md-4" action="" Method="POST">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-2 mt-4">Result Portal</p>




<?php


    if(isset($_POST['submit']))
    {
        $RollNo = $_POST['RollNo'];

        $sql = "
                SELECT yermarks.ID,yermarks.Descript,yermarks.ObtainMarks,yermarks.TotalMarks,yermarks.RollNo,
                studtbl.FullName AS SName,studtbl.Email
                ,teacher.FullName AS TName,addcategory.CName
                FROM yermarks
                INNER JOIN teacher ON yermarks.TeacherID=teacher.ID
                INNER JOIN addcategory ON yermarks.CategoryID=addcategory.ID
                INNER JOIN studtbl ON yermarks.RollNo=studtbl.Verify_code
                WHERE yermarks.RollNo = '$RollNo';
              ";

        $res = mysqli_query($conn,$sql);

        if($res==TRUE)
        {
            $row = mysqli_num_rows($res);

            if($row>0)
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    $ID = $row['ID'];
                    $Descript = $row['Descript'];
                    $ObtainMarks = $row['ObtainMarks'];
                    $TotalMarks = $row['TotalMarks'];
                    $RollNo = $row['RollNo'];
                    $SName = $row['SName'];
                    $Email = $row['Email'];
                    $FullName = $row['TName'];
                    $CName = $row['CName'];
?>

                  <div class="row">
                    <div class="col">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $RollNo; ?></h4>
                        <input type="text" name="RollNo" value="<?php echo $RollNo; ?>" style="display:none;">
                      <label class="form-label" for="form3Example4cd">RollNo</label>
                    </div>
                  </div>
                  </div>

                  <div class="col">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $SName; ?></h4>
                        <input type="text" name="SName" value="<?php echo $SName; ?>" style="display:none;">
                      <label class="form-label" for="form3Example4cd">Student Name</label>
                    </div>

                  </div>
                  </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $Email; ?></h4>
                        <input type="text" name="SEmail" value="<?php echo $Email; ?>" style="display:none;">
                      <label class="form-label" for="form3Example4cd">Student Email</label>
                    </div>
                    </div>



                  <div class="row">
                    <div class="col">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $FullName; ?></h4>
                        <input type="text" name="FullName" value="<?php echo $FullName; ?>" style="display:none;">
                      <label class="form-label" for="form3Example4cd">Teacher Name</label>
                    </div>
                  </div>
                  </div>

                  <div class="col">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $CName; ?></h4>
                        <input type="text" name="CName" value="<?php echo $CName; ?>" style="display:none;">
                      <label class="form-label" for="form3Example4cd">Course Category</label>
                    </div>
                  </div>
                  </div>
                  </div>


                  <div class="row">
                    <div class="col">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $ObtainMarks; ?></h4>
                        <input type="text" name="ObtainMarks" value="<?php echo $ObtainMarks; ?>" style="display:none;">
                      <label class="form-label" for="form3Example4cd">ObtainMarks</label>
                    </div>
                  </div>
                  </div>

                  <div class="col">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">                      
                        <h4><?php echo $TotalMarks; ?></h4>
                        <input type="text" name="TotalMarks" value="<?php echo $TotalMarks; ?>" style="display:none;">
                      <label class="form-label" for="form3Example4cd">TotalMarks</label>
                    </div>
                  </div>
                  </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $Descript; ?></h4>
                        <input type="text" name="Descript" value="<?php echo $Descript; ?>" style="display:none;">
                      <label class="form-label" for="form3Example4cd">Description</label>
                    </div>
                  </div>

                  <div class="regbtn" id="regbtn">
                    <!-- <button class="btn btn-primary btn-block mb-4">Send Me</button> -->

                    <!-- <input type="text" name="myemail" style="border :1px solid red;"> -->

                    <input type="submit" name="sendme" class="btn btn-success btn-block mb-4" value="Send Me">
                    <button class="btn btn-primary btn-block mb-4"><a href="#">Cancel</a></button>

                    </div>

                </form>



                    <?php





                }
            }
            else
            {
                echo "<script>
                alert('This RollNo Is Wrong! $RollNo')
                window.location.href='result.php';
                </script>";
            }



        }

    }
?>
    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<br><br>
</div>
<?php  include '../Partial/gaurdian-footer.php'; ?>
</body>
</html>



<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['sendme']))
{

                    $Email = $_SESSION['Email'];      //$_POST['myemail'];
                    $Descript = $_POST['Descript'];
                    $ObtainMarks = $_POST['ObtainMarks'];
                    $TotalMarks = $_POST['TotalMarks'];
                    $RollNo = $_POST['RollNo'];
                    $SName = $_POST['SName'];
                    $SEmail = $_POST['SEmail'];
                    $FullName = $_POST['FullName'];
                    $CName = $_POST['CName'];


        function sendMail($Email,$Descript,$ObtainMarks,$TotalMarks,$RollNo,$SName,$SEmail,$FullName,$CName) //$ID,$Descript,$TotalMarks,$ObtainMarks,$RollNo,$SName,$Email,
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
            $mail->setFrom('abdullahkhanstft@gmail.com','eStudiez');
            $mail->addAddress($Email);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Result Portal from eStudiez';
            $mail->Body    =  "

              

            <section style='background-image: linear-gradient(to left,#c0c0c0 0%, #002fa7 100%); color:white; margin:auto; padding-top:10px; padding-bottom:15px; text-align:center; width:400px;'>
              <div class='container'>
                <div class='row d-flex justify-content-center align-items-center'>
                  <div class='col-lg-10 col-md-10'>
                    <div class='card text-black' style='border-radius: 25px; margin-top:20px;'>
                      <div class='card-body'>
                        <div class='row justify-content-center'>
                          <div class='col-md-10 col-lg-8 col-md-10 order-2 order-lg-1'>
                          <form class='mx-1 mx-md-4' action='' Method='POST'>
                            <p class='text-center h1 fw-bold mb-5 mx-1 mx-md-2 mt-4' style='font-size:30px;'><b><i>Result Card</i></b></p>





            <div class='row'>
            <div class='col'>
          <div class='d-flex flex-row align-items-center mb-4'>
            <div class='form-outline flex-fill mb-0'>
                <h4><label class='form-label' for='form3Example4cd'>RollNo </label> $RollNo</h4>
              
            </div>
          </div>
          </div>

          <div class='col'>
          <div class='d-flex flex-row align-items-center mb-4'>
            <div class='form-outline flex-fill mb-0'>
                <h4><label class='form-label' for='form3Example4cd'>Student Name: </label> $SName</h4>
              
            </div>

          </div>
          </div>
          </div>

          <div class='d-flex flex-row align-items-center mb-4'>
            <div class='form-outline flex-fill mb-0'>
                <h4><label class='form-label' for='form3Example4cd'>Student Email: </label> $SEmail</h4>
              
            </div>
            </div>



          <div class='row'>
            <div class='col'>

          <div class='d-flex flex-row align-items-center mb-4'>
            <div class='form-outline flex-fill mb-0'>
                <h4><label class='form-label' for='form3Example4cd'>Teacher Name: </label> $FullName</h4>
              
            </div>
          </div>
          </div>

          <div class='col'>

          <div class='d-flex flex-row align-items-center mb-4'>
            <div class='form-outline flex-fill mb-0'>
                <h4><label class='form-label' for='form3Example4cd'>Course Category: </label> $CName</h4>
              
            </div>
          </div>
          </div>
          </div>


          <div class='row'>
            <div class='col'>

          <div class='d-flex flex-row align-items-center mb-4'>
            <div class='form-outline flex-fill mb-0'>
                <h4><label class='form-label' for='form3Example4cd'>ObtainMarks: </label> $ObtainMarks</h4>
              
            </div>
          </div>
          </div>

          <div class='col'>
          <div class='d-flex flex-row align-items-center mb-4'>
            <div class='form-outline flex-fill mb-0'>
                <h4><label class='form-label' for='form3Example4cd'>TotalMarks: </label> $TotalMarks</h4>
              
            </div>
          </div>
          </div>
          </div>

          <div class='d-flex flex-row align-items-center mb-4'>
            <div class='form-outline flex-fill mb-0'>
                <h4><label class='form-label' for='form3Example4cd'>Description: </label> $Descript</h4>
              <label class='form-label' for='form3Example4cd'>Description</label>
            </div>
          </div>

        </form>      

        ";
            $mail->send();
            return true;

            }
        //catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
        }
      


          if(sendMail($_SESSION['Email'],$Descript,$ObtainMarks,$TotalMarks,$RollNo,$SName,$SEmail,$FullName,$CName))
                {
                  echo "<script>
                    alert('Mail Send Successsfully')
                    </script>";

                }
                else{
                  echo "<script>
                    alert('Mail Not Send')
                    </script>";
                }
        }




?>



<!-- <span style=' color:blue; margin-top:15px; margin-bottom:15px; padding:15px;'>
              <span style='text-align:center; width:100%;'>

                      RollNo  $RollNo
                            <br>
                      Student Name  $SName
                            <br>  
                      Email  $SEmail 
                            <br> 
                      Obtain Marks  $ObtainMarks
                            <br>
                      TotalMarks  $TotalMarks 
                            <br>
                      Teacher Name  $FullName 
                            <br>
                      Course Category  $CName 
                            <br>
                      Description  $Descript 

              </span>
              </span> -->


