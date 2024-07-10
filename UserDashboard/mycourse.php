<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True Dreams Digital Academy | My Coursess</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>


        <div class="container">
-->

<?php

    include '../Partial/user-header.php';

    $ID = $_SESSION['ID'];

      //GET QUERY THE ADMIN
      // $sql = "SELECT * FROM `mycourse` WHERE `Verify_code`= '$code'";

      $sql = "
            SELECT checkout.ID,checkout.ApplierID,studtbl.FullName,studtbl.Verify_code,upcourse.Name UpTitle,upcourse.image_name,upcourse.Descript,upcourse.Active,teacher.FullName As TName, teacher.image_name AS Timg, teacher.Email AS TEmail,addcategory.CName
            FROM checkout
            INNER JOIN studtbl ON checkout.ApplierID=studtbl.ID
            INNER JOIN upcourse ON checkout.CourseID=upcourse.ID
            INNER JOIN teacher ON checkout.TeacherID=teacher.ID
            INNER JOIN addcategory ON checkout.CategoryID=addcategory.ID
            WHERE checkout.ApplierID = $ID;
          ";

      // EXCUTE THE QUERY
      $res = mysqli_query($conn, $sql);

      // checking the query excute or not
      if($res==TRUE)
      {
        //count rows
        $rows = mysqli_num_rows($res); //get all the row in the database

        $No = 1;

        // check num of rows
        if($rows>0)
        {
          // we have data in database
          while($rows = mysqli_fetch_assoc($res))
          {        
                  
                $Name=$rows['UpTitle'];
                $image=$rows['image_name'];
                $Descript=$rows['Descript'];
                $Active=$rows['Active'];
                $CName=$rows['CName'];
                $TName=$rows['TName'];
                $TEmail=$rows['TEmail'];                
                $TImg=$rows['Timg'];
                ?>


<div class="container">

<div class="accordion" id="accordionExample">

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?php echo $No;?>" aria-expanded="false" aria-controls="collapseTwo" style="background-image: linear-gradient(to right, #002fa7, #77b5fe, #c0c0c0); color:white; font-weight:700; font-size:25px;">
      My Course      
      </button>
      
    </h2>
    <div id="collapseTwo<?php echo $No;?>" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="background-color:#316b91; color:white; font-weight:700;">

      <div class="row">
        <div class="col-2">        
            <h6><strong>Name</strong></h6>
            <h6><strong>Description</strong></h6>
            <h6><strong>Activation</strong></h6>
            <h6><strong>Course Category</strong></h6>
        </div>
        <div class="col-7">
            <h6><?php $No++?></h6>
            <h6><?php echo $Name?></h6>
            <h6><?php echo $Descript?></h6>
            <h6><?php echo $Active?></h6>
            <h6><?php echo $CName?></h6>
        </div>
        <div class="col-3">
            
            <h6><strong style="font-size:20px; margin-bottom:15px;">Batch-Instructor</strong></h6>        
            <h6><strong>Name </strong> <br> <span style="margin-left: 30px; font-weight: 600; font-size: 18px; font-family: Monospace;"><?php echo $TName?></span></h6>            
            <h6><strong>Image </strong> <br> <img src="<?php echo $imgadmin,$TImg ?>" alt="" height="110px" width="100%"></h6>
        </div>

        </div>
      </div>

      </div>
          </div>

  
</div>

</div> 
<br>

                <?php
          }
        }
    }
            // display the values in our tables
            include '../Partial/user-footer.php';
?>     
</body>
</html>