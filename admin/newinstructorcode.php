<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-studiez | Add Instructor</title>
</head>
<body>

<?php include('../Partial/admin-header.php') ?>

  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-md-8">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 mt-5">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Instructor</p>

                <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="TeCode" placeholder="Teacher Code" required/>
                      <label class="form-label" for="form3Example1c">Add New Teacher Code</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="sumbit" value="Add Instructor Code">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../images/Logo;E-studiez.png"
                  class="img-fluid" alt="Sample image" style="width:90%">

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

      // the form Values Save in Database

      // check weather the sumbit button clicked or not

      if(isset($_POST['sumbit']))
      {        
            $TeCode = $_POST['TeCode'];
          // sql query to save into database

          $sql = "INSERT INTO `teacher`(`TeacherCode`) VALUES ('$TeCode')";

          // Excute the query and save into database
          // Excute the query and save into database (:-) Save in the constants file

          // saving data into database
          $res = mysqli_query($conn, $sql) or die(mysqli_error());

          // check wather the data is inserted

          if($res==TRUE)
          {                        
            echo "<script>
                  alert('Teacher Code Added Successfully')
                  window.location.href='admin-home.php';
                  </script>";

          }
          else{                        
            echo "<script>
                  alert('Teacher Code Not Added')
                  window.location.href='admin-home.php';
                  </script>";
          }
      }
?>