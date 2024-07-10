<?php include('../Partial/instructor-header.php'); ?>

<?php

$ID = $_GET['ID'];

$res = mysqli_query($conn, "SELECT * FROM `classtime` WHERE `ID`='$ID'");
while($rows = mysqli_fetch_array($res))
{
    $ID = $rows['ID'];
    $Time = $rows['time'];
    $Date = $rows['Date'];
}
?>
 
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update Time</p>
               
                <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">                      
                    <label class="form-label" for="form3Example4cd">Select Time</label>
                      <input type="text" id="form3Example4cd" class="form-control" name="Time" value="<?php echo $Time?>" required/>                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">                      
                    <label class="form-label" for="form3Example4cd">Select Date</label>
                      <input type="text" id="form3Example4cd" class="form-control" name="Date" value="<?php echo $Date?>" required/>                      
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="sumbit" value="Update">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-3 col-xl-7 d-flex align-items-center order-1 order-lg-2">

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
    

    $Time = $_POST['Time'];
    $Date = $_POST['Date'];

    $res = mysqli_query($conn, "UPDATE `classtime` SET `time`='$Time',`Date`='$Date' WHERE `ID`=$_GET[ID]");
    
    echo "<script>
          alert('Admin Update Seccessfully')
          window.location.href='../instructor/managetimeindex.php';
          </script>";
}

?>
