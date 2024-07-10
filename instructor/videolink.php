<?php include('../Partial/instructor-header.php') ?>

<section> <!--class="vh-100" style="background-color: #eee;" -->
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Upload Link</p>            

                <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="Title" placeholder="Title" required/>
                      <label class="form-label" for="form3Example1c">Title</label>
                    </div>
                  </div>                                    

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <input type="text" id="form3Example1c" class="form-control" name="Link" placeholder="Link" required/>
                      <label class="form-label" for="form3Example1c">Link</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <textarea name="LDesc" id="form3Example3c" cols="29" rows="5" placeholder="Description" ></textarea>
                      <label class="form-label" for="form3Example3c">Description</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Upload Link">
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
</section>

<?php include('../Partial/instructor-footer.php') ?>

<?php

      // the form Values Save in Database

      // check weather the sumbit button clicked or not

   try{
      if(isset($_POST['submit']))
      {
        $ID = $_SESSION['ID'];

        $res = mysqli_query($conn, "SELECT * FROM `upcourse` WHERE `TeacherID`='$ID'");
        while($rows = mysqli_fetch_array($res))
        {
            $CategoryID = $rows['Category_Id'];      
        }

            $Title = $_POST['Title'];
            $LDesc = $_POST['LDesc'];
            $Link = $_POST['Link'];

              // sql query to save into database

              $sql2 = "INSERT INTO `activelink`( `Title`, `LDesc`, `Link`, `CategoryID`,`TeacherID`) VALUES ('$Title','$LDesc','$Link','$CategoryID','$ID')";

              // Excute the query and save into database
              // Excute the query and save into database (:-) Save in the constants file

              // saving data into database
              $res2 = mysqli_query($conn, $sql2);



          // check wather the data is inserted

          if($res2==TRUE)
          {
            // redirect to the page
            // header("location:".SiteUrl.'admin/admin-home.php');
            echo "<script>
                  alert('Link inserted Successfully')
                  window.location.href='links.php';
                  </script>";
          }
          else{            
            // redirect to the page
            // header("location:".SiteUrl.'admin/admin-home.php');
            echo "<script>
                  alert('Link not inserted')
                  window.location.href='uploadvideo.php';
                  </script>";
          }         
      }
    }
    catch(Execption $e)
    {
        echo 'Message' .$e->getMessage();
    }
   
?>