
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

<section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Instructor</p>

                <?php 

                  if(isset($_SESSION['add'])) //checking wather the session is set or not
                  {
                    echo $_SESSION['add'];    //display the messages 
                    unset($_SESSION['add']);  //removing the messages
                 }
        
                ?>

                <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="Name" placeholder="Name" required/>
                      <label class="form-label" for="form3Example1c">Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" name="Email" placeholder="Email" required/>
                      <label class="form-label" for="form3Example3c">Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="file" id="form3Example1c" class="Choseimage" name="image" placeholder="Image" />
                      <label class="form-label" for="form3Example1c">img</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Category</label>
                      <select name="Category_Id" class="form-control">

                      <?php
                          // get data from database 

                          $sql = "SELECT * FROM addcategory";

                          // excuting query 

                          $res = mysqli_query($conn, $sql);

                          // count the rows in database

                          $rows = mysqli_num_rows($res);

                          // if count is grater than zero

                          if($rows>0)
                          {
                              ?>

                                  <option value="0">Select</option>

                              <?php
                              while($rows=mysqli_fetch_assoc($res))
                              {
                                $ID = $rows['ID'];
                                $CName = $rows['CName'];

                                ?>
                                    <option value="<?php echo $ID; ?>"><?php echo $CName; ?></option>          
                                <?php
                              }
                          }
                          else
                          {
                              ?>
                                    <option value="0">No Category</option>
                              <?php
                          }                          
                      ?>
                      </select>                                            

                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" name="Password" placeholder="Password"  required/>
                      <label class="form-label" for="form3Example4cd">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4cd" class="form-control" name="HrDepCode" placeholder="01214"  required/>
                      <label class="form-label" for="form3Example4cd">HR Code</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="sumbit" value="Register Instructor">
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
<br>
</body>
</html>

<?php

      // the form Values Save in Database

      // check weather the sumbit button clicked or not

      if(isset($_POST['sumbit']))
      {        
        $Def="Teacher";
          // button clicked
          // get data from form
          $Name = $_POST['Name'];
          $Email = $_POST['Email'];
          $City = $_POST['City'];
          $pPassword = $_POST['pPassword']; //Password encripted with MD5
          $HrDepCode = $_POST['HrDepCode'];
          $User_name = $_POST['User_name'];
          $Category_Id = $_POST['Category_Id'];

          // check whather image is selected or not
          if(isset($_FILES['image']['name']))
          {
            // get the details of the selected image

            $image_name = $_FILES['image']['name'];

            // check the button is click upload not not

            if($image_name!="")
            {

              // image is seleted

              // get the extehtion of selected image

              $ext = end(explode('.', $image_name));

              // create new image name
              
              $image_name = "study-lab-admin".rand(0000,9999).".".$ext;

              // source the scr is the current location of the image

              $src = $_FILES['image']['tmp_name'];

              // desctination path of the image to be upload

              $dst = "../images/adminimg/".$image_name;

              // upload image

              $upload = move_uploaded_file($src, $dst);

              // chect whather image is upload or not               

              if($upload==false)
              {                
                echo "<script>
                      alert('Failed upload  to image')
                      window.location.href='index-course.php';
                      </script>";               
              }

            }
          }
          else
          {
            $image_name = "";
          }

          // sql query to save into database

          // $sql = "INSERT INTO `teacher`(`Name`, `Email`, `City`, `pPassword`, `HrDepCode`, `RoleType`, `User_name`, `image_name`, `Category`) VALUES
          //  ('$Name','$Email','$City','$pPassword','$HrDepCode','$Def','$User_name','$image_name','$Category_Id')";

          $sql = "INSERT INTO `teacher`(`FullName`, `Email`, `Password`, `TeacherCode`, `RoleType`, `image_name`) VALUES 
          ('$Name','$Email','$Password','$HrDepCode','$Def','$image')";

          // Excute the query and save into database
          // Excute the query and save into database (:-) Save in the constants file

          // saving data into database
          $res = mysqli_query($conn, $sql) or die(mysqli_error());

          // check wather the data is inserted

          if($res==TRUE)
          {            
            // header("location:".SiteUrl.'admin/admin-home.php');
            echo "<script>
                  alert('Admin Added Successfully')
                  window.location.href='admin-home.php';
                  </script>";

          }
          else{
            // create a variable to display message
            $_SESSION['add'] = "Admin Not Added";
            // redirect to the page
            // header("location:".SiteUrl.'admin/admin-home.php');
            echo "<script>
                  alert('Admin Not Added')
                  window.location.href='admin-home.php';
                  </script>";
          }
      }
?>