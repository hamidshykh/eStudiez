
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eStudiez | Add Extra Class</title>
</head>
<body>

<?php include('../Partial/instructor-header.php') ?>

  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Extra Class</p>

                <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">

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
                      <input type="text" id="form3Example4cd" class="form-control" name="Title" placeholder="Title"  required/>
                      <label class="form-label" for="form3Example4cd">Title</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">                      
                    <label class="form-label" for="form3Example4cd">Select Date</label>
                      <input type="date" id="form3Example4cd" class="form-control" name="Date"  required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">                      
                    <label class="form-label" for="form3Example4cd">Select Time</label>
                      <input type="time" id="form3Example4cd" class="form-control" name="Time"  required/>                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <textarea name="descript" id="descript" class="form-control" rows="4"></textarea>
                      <!-- <input type="text" id="form3Example4cd" class="form-control" name="HrDepCode" placeholder="01214"  required/> -->
                      <label class="form-label" for="form3Example4cd">Description</label>
                    </div>
                  </div>                  

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="sumbit" value="Add">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../images/logo.png"
                  class="img-fluid" alt="Sample image">

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
          $TID = $_SESSION['ID'];  

          $Category_Id = $_POST['Category_Id'];
          $Title = $_POST['Title'];
          $Descript = $_POST['descript'];
          $Time = $_POST['Time'];
          $Date = $_POST['Date'];

          // check whather image is selected or not          
          // sql query to save into database

          $sql = "INSERT INTO `classtime`(`SecTitle`, `SecDesc`, `time`, `categoryID`, `instructor`, `Date`) VALUES ('$Title','$Descript','$Time','$Category_Id','$TID','$Date')";

          // Excute the query and save into database
          // Excute the query and save into database (:-) Save in the constants file

          // saving data into database
          $res = mysqli_query($conn, $sql) or die(mysqli_error());

          // check wather the data is inserted

          if($res==TRUE)
          {            
            // header("location:".SiteUrl.'admin/admin-home.php');
            echo "<script>
                  alert('Class time Successfully update')
                  window.location.href='../instructor/managetimeindex.php';
                  </script>";

          }
          else{
            // header("location:".SiteUrl.'admin/admin-home.php');
            echo "<script>
                  alert('Class time not update')
                  window.location.href='../instructor/manageclasstime.php';
                  </script>";
          }
      }
?>