<?php include('../Partial/instructor-header.php'); ?>

<?php

$ID = $_GET['ID'];

$res = mysqli_query($conn, "SELECT * FROM `yermarks` WHERE `ID`='$ID'");
while($rows = mysqli_fetch_array($res))
{
    $Descript = $rows['Descript'];

    $RollNo = $rows['RollNo'];

    $ObtainMarks = $rows['ObtainMarks'];

    $TotalMarks = $rows['TotalMarks'];       
}
?>
 
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update Result</p>
               
                <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">                  

                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4c" class="form-control" name="RollNo" value="<?php echo $RollNo ?>"/>
                      <label class="form-label" for="form3Example4c">RollNo</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4c" class="form-control" name="ObtainMarks" value="<?php echo $ObtainMarks ?>"/>
                      <label class="form-label" for="form3Example4c">ObtainMarks</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4cd" class="form-control" name="TotalMarks" value="<?php echo $TotalMarks; ?>"/>
                      <label class="form-label" for="form3Example4cd">TotalMarks</label>
                    </div>
                  </div>    
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <textarea name="Descript" id="Desc" class="form-control" rows="5"><?php echo $Descript; ?></textarea>
                      <!-- <input type="text" id="form3Example1c" class="form-control" name="Descript" value="<?php echo $Descript; ?>"/> -->
                      <label class="form-label" for="form3Example1c">Description</label>
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
  
    $Descript = $_POST['Descript'];

    $RollNo = $_POST['RollNo'];

    $ObtainMarks = $_POST['ObtainMarks'];

    $TotalMarks = $_POST['TotalMarks'];

    $RollNo = $_POST['RollNo'];
        
            $res = mysqli_query($conn, "UPDATE `yermarks` SET `Descript`='$Descript',`ObtainMarks`='$ObtainMarks',`TotalMarks`='$TotalMarks',`RollNo`='$RollNo' WHERE `ID`= $ID");

            echo "<script>
            alert('Update Marks')
            window.location.href='inyermarks.php';
            </script>";          
}

?>