<?php include('../Partial/admin-header.php') ?>

  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1" style="padding-top:80px;">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Cetagory</p>

                <form class="mx-1 mx-md-4" action="" Method="POST">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="CName" placeholder="Category" required/>
                      <label class="form-label" for="form3Example1c">Category</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="sumbit" value="Add Category">
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

      // the form Values Save in Database

      // check weather the sumbit button clicked or not

      if(isset($_POST['sumbit']))
      {        
          // button clicked
          // get data from form
          $CName = $_POST['CName'];

          // sql query to save into database

          $sql = "INSERT INTO addcategory SET
          CName  = '$CName'
          ";

          // Excute the query and save into database
          // Excute the query and save into database (:-) Save in the constants file


          // saving data into database
          $res = mysqli_query($conn, $sql) or die(mysqli_error());

          // check wather the data is inserted

          if($res==TRUE)
          {            
            // redirect to the page
            // header("location:".SiteUrl.'admin/admin-home.php');
            echo "<script>
                  alert('Category Added Successfully')
                  window.location.href='index-category.php';
                  </script>";
          }
          else{            
            // redirect to the page
            // header("location:".SiteUrl.'admin/admin-home.php');
            echo "<script>
                  alert('Category Not Added')
                  window.location.href='add-category.php';
                  </script>";
          }
      }
?>