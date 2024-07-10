<?php include('../Partial/admin-header.php'); ?>
<br><br><br>

<?php

$ID = $_GET['ID'];

$res = mysqli_query($conn, "SELECT * FROM `teacher` WHERE `ID`='$ID'");
while($rows = mysqli_fetch_array($res))
{


    $Name = $rows['FullName'];

    $Email = $rows['Email'];

    $Password = $rows['Password'];

    $TeCode = $rows['TeacherCode'];

    $image = $rows['image_name'];
}
?>

  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-md-8">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update Instructor</p>
               
                <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="Name" value="<?php echo $Name; ?>"/>
                      <label class="form-label" for="form3Example1c">Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" name="Email" value="<?php echo $Email; ?>"/>
                      <label class="form-label" for="form3Example3c">Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" name="TeCode" value="<?php echo $TeCode; ?>"/>
                      <label class="form-label" for="form3Example3c">Teacher Code</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4c" class="form-control" name="City" value="<?php echo $Password ?>"/>
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="file" id="form3Example1c" class="Choseimage" name="image" placeholder="Image" />
                      <label class="form-label" for="form3Example1c">image</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="sumbit" value="Update Instructor">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-3 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="<?php echo $imgadmin,$image; ?>"
                  class="img-fluid" alt="Sample image" height="300px" width="70%">

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
    

    $Name = $_POST['Name'];

    $Email = $_POST['Email'];

    $TeCode = $_POST['TeCode'];

    $City = $_POST['City'];

    $HrDepCode = $_POST['HrDepCode'];

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
        
        $image_name = "study-lab-admin".rand(0000,9999).".".$ext;

        // source the scr is the current location of the image

        $src = $_FILES['image']['tmp_name'];

        // desctination path of the image to be upload

        $dst = "../images/adminimg/".$image_name;

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
              

    $res = mysqli_query($conn, "UPDATE addadmin SET Name='$Name', Email='$Email', City='$City', TeacherCode='$TeCode' , image_name='$image_name' WHERE ID=$ID");
    
    echo "<script>
          alert('Admin Update Seccessfully')
          window.location.href='admin-home.php';
          </script>";
}

?>
<?php include('../Partial/admin-footer.php'); ?>
