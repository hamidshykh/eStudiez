<?php include('../Partial/admin-header.php'); ?>

<?php

$ID = $_GET['ID'];

$res = mysqli_query($conn, "SELECT * FROM `upcourse` WHERE `ID`='$ID'");
while($rows = mysqli_fetch_array($res))
{


    $Name = $rows['Name'];

    $image_name = $rows['image_name'];

    $Descript = $rows['Descript'];

    $Price = $rows['Price'];        

    $Active = $rows['Active'];

}
?>
 
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-md-8">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update Course</p>
               
                <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="Name" value="<?php echo $Name; ?>"/>
                      <label class="form-label" for="form3Example1c">Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="file" id="form3Example3c" class="Choseimage" name="image"/>
                      <label class="form-label" for="form3Example3c">Image</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4c" class="form-control" name="Descript" value="<?php echo $Descript ?>"/>
                      <label class="form-label" for="form3Example4c">Descript</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4cd" class="form-control" name="Price" value="<?php echo $Price; ?>"/>
                      <label class="form-label" for="form3Example4cd">Price</label>
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4cd" class="form-control" name="Active" value="<?php echo $Active; ?>"/>
                      <label class="form-label" for="form3Example4cd">Activation</label>
                    </div>
                  </div>
                  
                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="sumbit" value="Update">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">


                <img src="<?php echo $imgurl,$image_name; ?>"
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
  
    $Name = $_POST['Name'];    

    $Descript = $_POST['Descript'];

    $Price = $_POST['Price'];

    $Featured = $_POST['Featured'];

    $Active = $_POST['Active'];

    
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
              
              $image_name = "study-lab".rand(0000,9999).".".$ext;

              // source the scr is the current location of the image

              $src = $_FILES['image']['tmp_name'];

              // desctination path of the image to be upload

              $dst = "../images/imagelab/".$image_name;

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



          if(empty($image_name))
          {
            $res = mysqli_query($conn, "UPDATE `upcourse` SET `Name`='$Name',`Descript`='$Descript',`Price`='$Price',`Active`='$Active' WHERE ID=$ID");

            echo "<script>
            alert('Update Course')
            window.location.href='index-course.php';
            </script>";
          }
          else
          {
            $res = mysqli_query($conn, "UPDATE `upcourse` SET `Name`='$Name',`image_name`='$image_name',`Descript`='$Descript',`Price`='$Price',`Active`='$Active' WHERE ID=$ID");

            echo "<script>
            alert('Update Course')
            window.location.href='index-course.php';
            </script>";
          }


          
}

?>
