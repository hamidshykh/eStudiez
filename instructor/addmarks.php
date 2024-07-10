<?php include('../Partial/instructor-header.php'); ?>

  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Marks</p>
               
                <form class="mx-1 mx-md-4" action="" Method="POST">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="TestID"/>
                      <label class="form-label" for="form3Example1c">TestID</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="RollNo"/>
                      <label class="form-label" for="form3Example1c">Student RollNo</label>
                    </div>
                  </div>                  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="date" id="form3Example1c" class="form-control" name="Date"/>
                      <label class="form-label" for="form3Example1c">Date</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="Marks"/>
                      <label class="form-label" for="form3Example1c">Marks</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <textarea name="Descript" id="Descript" class="form-control" rows="5"></textarea>
                        <!-- <input type="text" id="form3Example1c" class="form-control" name="RollNo"/> -->
                      <label class="form-label" for="form3Example1c">Description</label>                      
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="sumbit" value="Update Progress">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../images/Logo;E-studiez.png"
                  class="img-fluid" alt="Sample image" style="width:80%;">

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

  $ID = $_SESSION['ID'];

  $res = mysqli_query($conn, "SELECT * FROM `upcourse` WHERE `TeacherID`='$ID'");
  while($rows = mysqli_fetch_array($res))
  {
      $CategoryID = $rows['Category_Id'];      
  }

    $TestID = $_POST['TestID'];
    $RollNo = $_POST['RollNo'];
    $Descript = $_POST['Descript'];
    $Date = $_POST['Date'];
    $Marks = $_POST['Marks'];

    $sql = "INSERT INTO `monmarks`(`TestID`, `Desc`, `Date`, `Marks`, `TeacherID`, `CategoryID`, `RollNo`) VALUES ('$TestID','$Descript','$Date','$Marks','$ID','$CategoryID','$RollNo')";

    

    $res = mysqli_query($conn, $sql);
    
    if($res==true)
    {
        echo "<script>
        alert('Add marks secuessfully')
        window.location.href='indexmarks.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert(' Marks not add')
        window.location.href='addmarks.php';
        </script>";
    }
    
}

?>