<?php include('../Partial/admin-header.php'); ?>

<?php

$ID = $_GET['ID'];

$res = mysqli_query($conn, "SELECT * FROM `addcategory` WHERE `ID`='$ID'");
while($rows = mysqli_fetch_array($res))
{
    $CName = $rows['CName'];
}
?>
 
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-md-8">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update Category</p>
               
                <form class="mx-1 mx-md-4" action="" Method="POST">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="CName" value="<?php echo $CName; ?>"/>
                      <label class="form-label" for="form3Example1c">Category</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="sumbit" value="Update Category">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../images/Logo;E-studiez.png"
                  class="img-fluid" alt="Sample image"style="width:90%">

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
    
    $CName = $_POST['CName'];              

    $sql = "UPDATE addcategory SET CName='$CName' WHERE ID=$ID";

    $res = mysqli_query($conn, $sql);
    
    echo "<script>
         alert('Update Cetagory')
         window.location.href='index-category.php';
         </script>";
}

?>