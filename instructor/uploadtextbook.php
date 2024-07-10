<?php include('../Partial/instructor-header.php') ?>

<section> <!--class="vh-100" style="background-color: #eee;" -->
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Upload TextBook</p>

                <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="Title" placeholder="Name" required/>
                      <label class="form-label" for="form3Example1c">Title</label>
                    </div>
                  </div>                                    
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="file" id="form3Example1c" class="Choseimage" name="Choose" placeholder="Image" />
                      <label class="form-label" for="form3Example1c">Choose</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <textarea name="Descript" id="form3Example3c" class="form-control" rows="5" placeholder="Description" ></textarea>
                      <label class="form-label" for="form3Example3c">Description</label>
                    </div>
                  </div>
                  
                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Upload">
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

<?php

      // the form Values Save in Database

      // check weather the sumbit button clicked or not

   
      if(isset($_POST['submit']))
      {
        $ID = $_SESSION['ID'];        

        $res = mysqli_query($conn, "SELECT * FROM `upcourse` WHERE `TeacherID`='$ID'");
        while($rows = mysqli_fetch_array($res))
        {
            $CategoryID = $rows['Category_Id'];      
        }

          // button clicked
          // get data from form
          $Title = $_POST['Title'];

          $Descript = $_POST['Descript'];      

          $TeacherID = $_SESSION['TCode'];

          
          // check whather image is selected or not
          if(isset($_FILES['Choose']['name']))
          {
            // get the details of the selected image

            $image_name = $_FILES['Choose']['name'];

            // check the button is click upload not not

            if($image_name!="")
            {

              // image is seleted

              // get the extehtion of selected image

              $ext = end(explode('.', $image_name));

              // create new image name
              
              $image_name = "textbook".rand(0000,9999).".".$ext;

              // source the scr is the current location of the image

              $src = $_FILES['Choose']['tmp_name'];

              // desctination path of the image to be upload

              $dst = "../images/textbook/".$image_name;

              // upload image

              $upload = move_uploaded_file($src, $dst);

              // chect whather image is upload or not               

              if($upload==false)
              {                
                echo "<script>
                      alert('Failed upload  to textbook')
                      window.location.href='textbookvw.php';
                      </script>";               
              }

            }
          }
          else
          {
            $image_name = "";
          }

              // sql query to save into database

              $sql2="INSERT INTO `textbook`(`Title`, `Desc`, `Upload`, `CategoryID`,`TeacherID`) VALUES ('$Title','$Descript','$image_name','$CategoryID','$ID')";

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
                  alert('textbook inserted Successfully')
                  window.location.href='textbookvw.php';
                  </script>";
          }
          else{            
            // redirect to the page
            // header("location:".SiteUrl.'admin/admin-home.php');
            echo "<script>
                  alert('textbook not inserted')
                  window.location.href='textbookvw.php';
                  </script>";
          }         
      }
   
?>

<?php include('../Partial/instructor-footer.php') ?>