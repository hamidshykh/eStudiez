<?php include('../Partial/user-header.php'); ?>

<div class="container">
    <div class="Admin-Content">
        <h3>Test Results</h3>
    </div>
</div>
<?php


$RollNo = $_SESSION['code'];

$res = mysqli_query($conn, "SELECT * FROM `yermarks` WHERE `RollNo`='$RollNo'");
while($rows = mysqli_fetch_array($res))
{
    $Descript = $rows['Descript'];

    $RollNo = $rows['RollNo'];

    $ObtainMarks = $rows['ObtainMarks'];

    $TotalMarks = $rows['TotalMarks'];  

    ?>
                  <section class="container-fluid" style="background:#c0c0c0;margin:auto;right:0px!important;
                  left:0px;">
  <div class="container ">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-lg-8 col-xl-8">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-3">
            <div class="row justify-content-center">
              <div class="col-md-8 col-lg-12 col-xl-12 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Annual Result</p>
               
                <form class="mx-1 mx-md-4">

  
                  <div class="col">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $RollNo ?></h4>                      
                     
                      <label class="form-label" for="form3Example3c">Roll No</label>
                    </div>
                  </div>
                  </div>
                
                  



  
<div class="col">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $ObtainMarks; ?></h4>
                      <label class="form-label" for="form3Example4cd">ObtainMarks</label>                      
                    </div>
                  </div>
                  </div>
                
<div class="col">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $TotalMarks; ?></h4>
                      <label class="form-label" for="form3Example4cd">TotalMarks</label>                      
                    </div>
                  
                  </div>
                  </div>
                  </div>
                  

                </div>
               
                  <div class="col">
                    
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $Descript ?></h4>                      
                      <label class="form-label" for="form3Example4c">Description</label>
                    </div>
                  </div>
                  
                </form>

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
</section>

    
    <?php

}

?>

<?php include('../Partial/user-footer.php'); ?>