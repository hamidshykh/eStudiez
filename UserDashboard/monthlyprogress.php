<?php include('../Partial/user-header.php'); ?>

<div class="container">
<div class="row d-flex justify-content-center align-items-center ">
  <div class="col-lg-12 col-xl-6">
    <div class="card text-black" style="border-radius: 25px; margin-bottom:10px;">
      <div class="card-body p-md-3">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-12 col-xl-12 order-2 order-lg-1">

            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Monthly Report</p>
          

<?php

$RollNo = $_SESSION['code'];

$res = mysqli_query($conn, "SELECT * FROM `monmarks` WHERE `RollNo`='$RollNo'");
while($rows = mysqli_fetch_array($res))
{


    $TestID = $rows['TestID'];

    $Desc = $rows['Desc'];

    $Date = $rows['Date'];

    $Marks = $rows['Marks'];    

    $RollNo = $rows['RollNo'];



    
  ?>
  
            <form class="mx-1 mx-md-4">

            <div class="row">
              <div class="col">
              <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <h4><?php echo $Date; ?></h4>
                  <label class="form-label" for="form3Example4cd">Date</label>                      
                </div>
              </div>
              
              

              </div>
              </div>

<div class="row">
<div class="col">
              <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <h4><?php echo $TestID; ?></h4>                      
                  <label class="form-label" for="form3Example1c">TestID</label>
                </div>
              </div>
              </div>
              <div class="col">
              <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <h4><?php echo $RollNo ?></h4>                      
                 
                  <label class="form-label" for="form3Example3c">RollNo</label>
                </div>
              </div>
              </div>
              </div>                            

<div class="row">
<div class="col">
              <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <h4><?php echo $Marks; ?></h4>                      
                  <label class="form-label" for="form3Example4cd">Marks</label>
                </div>
              </div>                  
</div>
            </div>
            <div class="d-flex flex-row align-items-center mb-4">
                <div class="form-outline flex-fill mb-0">
                    <h4><?php echo $Desc ?></h4>                      
                  <label class="form-label" for="form3Example4c">Description</label>
                </div>
              </div>
            </form>

<?php
}



?>

</div>
          <!-- <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">


            <img src="<?php echo $imgurl,$image_name; ?>"
              class="img-fluid" alt="Sample image">

          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<?php include('../Partial/user-footer.php'); ?>