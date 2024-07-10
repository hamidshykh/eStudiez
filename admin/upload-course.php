<?php include('../Partial/admin-header.php') ?>


  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-md-8">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Upload Course</p>

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
                      <input type="file" id="form3Example1c" class="Choseimage" name="image" placeholder="Image" />
                      <label class="form-label" for="form3Example1c">img</label>
                    </div>
                  </div>

                  <div class=" align-items-center mb-4">
                  <label for="inputState">Select Activation <span style="color:red;">*</span></label>
                  <select id="Country" class="form-control" name="ActiveE" required>
                  <option value="Active">Active</option>
                  <option value="Feature">Feature</option>        
                  </select>              
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Teacher Name</label>
                      <select name="TeacherID" class="form-control">

                      <?php
                          // get data from database 

                          $sql = "SELECT * FROM `teacher`";

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
                                $Name = $rows['FullName'];

                                ?>
                                    <option value="<?php echo $ID; ?>"><?php echo $Name; ?></option>          
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
                      <input type="number" id="form3Example4c" class="form-control" name="Price" placeholder="Price"  required/>
                      <label class="form-label" for="form3Example4c">Price</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <textarea name="Descript" class="form-control" id="form3Example3c" rows="5" placeholder="Description" ></textarea>
                      <label class="form-label" for="form3Example3c">Course Description</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Upload Course">
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
        <br>
      </div>      
    </div>    
</div>
<?php

      // the form Values Save in Database

      // check weather the sumbit button clicked or not

   
      if(isset($_POST['submit']))
      {
                
          // button clicked
          // get data from form
          $Name = $_POST['Name'];
          $Descript = $_POST['Descript'];
          $Price = $_POST['Price'];
          $ActiveE = $_POST['ActiveE'];
          $Category_Id = $_POST['Category_Id'];
          $TeacherID = $_POST['TeacherID'];
          
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
              
              $image_name = "study-lab".rand(0000,9999).".".$ext;

              // source the scr is the current location of the image

              $src = $_FILES['image']['tmp_name'];

              // desctination path of the image to be upload

              $dst = "../images/imagelab/".$image_name;

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

              $sql2="INSERT INTO `upcourse`(`Name`, `image_name`, `Descript`, `Price`, `Active`, `Category_Id`,`TeacherID`) VALUES ('$Name','$image_name','$Descript','$Price','$ActiveE','$Category_Id','$TeacherID')";

              // Excute the query and save into database
              // Excute the query and save into database (:-) Save in the constants file

              // saving data into database
              $res2 = mysqli_query($conn, $sql2);

          // check wather the data is inserted

          if($res2==TRUE)
          {
            // redirect to the page            
            echo "<script>
                  alert('Course inserted Successfully')
                  window.location.href='index-course.php';
                  </script>";
          }
          else{            
            // redirect to the page            
            echo "<script>
                  alert('Course not inserted')window.location.href='upload-course.php';
                  </script>";
          }         
      }
   
?>
