<?php include('../Partial/instructor-header.php'); ?>

<?php

$ID = $_GET['ID'];

$res = mysqli_query($conn, "SELECT * FROM `monmarks` WHERE `ID`='$ID'");
while($rows = mysqli_fetch_array($res))
{


    $TestID = $rows['TestID'];

    $Desc = $rows['Desc'];

    $Date = $rows['Date'];

    $Marks = $rows['Marks'];    

    $RollNo = $rows['RollNo'];

}
?>
 
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update Course</p>
               
                <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="TestID" value="<?php echo $TestID; ?>"/>
                      <label class="form-label" for="form3Example1c">TestID</label>
                    </div>
                  </div>                  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4c" class="form-control" name="Date" value="<?php echo $Date ?>"/>
                      <label class="form-label" for="form3Example4c">Date</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4cd" class="form-control" name="Marks" value="<?php echo $Marks; ?>"/>
                      <label class="form-label" for="form3Example4cd">Marks</label>
                    </div>
                  </div>                  
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4cd" class="form-control" name="RollNo" value="<?php echo $RollNo; ?>"/>
                      <label class="form-label" for="form3Example4cd">RollNo</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <textarea name="Desc" id="Desc" class="form-control" rows="5"><?php echo $Desc; ?></textarea>
                      <!-- <input type="text" id="form3Example3c" class="Choseimage" name="Desc" value="<?php echo $Desc ?>"/> -->
                      <label class="form-label" for="form3Example3c">Description</label>
                    </div>
                  </div>
                  
                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="sumbit" value="Update Marks">
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
<?php 

   
if(isset($_POST['sumbit']))
{
  
    $TestID = $_POST['TestID'];    

    $Desc = $_POST['Desc'];

    $Date = $_POST['Date'];

    $Marks = $_POST['Marks'];

    $RollNo = $_POST['RollNo'];
        
            $res = mysqli_query($conn, "UPDATE `monmarks` SET `TestID`='$TestID',`Desc`='$Desc',`Date`='$Date',`Marks`='$Marks' WHERE ID=$ID ");

            echo "<script>
            alert('Update Marks')
            window.location.href='indexmarks.php';
            </script>";          
}

?>