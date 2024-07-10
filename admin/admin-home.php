
<?php include('../Partial/admin-header.php') ?>


<div class="container">
    <div class="Admin-Content">
        <h3>Instructor Home</h3>
    </div>

    <div class="Add-admin">
            <a href="add-admin.php" class="btn btn-success">Add Instructor</a>
            <br><br>
            <a href="newinstructorcode.php" class="btn btn-success" style="background-color:#39A031;">New Instructor Code</a>
    </div>
</div>

    <br>

   <div class="table-responsive">
  <table class="col-12 table">
    
      <tr>
        <th scope="col">ID</th>
        <th scope="col">FullName</th>        
        <th scope="col">Email</th>
        <th scope="col">TCode</th>
        <th scope="col">Teacher Code</th>  
        <th scope="col">Action</th>        
      </tr>
    
    

  <?php

      //GET QUERY THE ADMIN
      $sql = "SELECT * FROM teacher";

      // EXCUTE THE QUERY
      $res = mysqli_query($conn, $sql);

      // checking the query excute or not
      if($res==TRUE)
      {
        //count rows
        $rows = mysqli_num_rows($res); //get all the row in the database

        $No=1;

        // check num of rows
        if($rows>0)
        {
          // we have data in database
          while($rows = mysqli_fetch_assoc($res))
          {
            // using while loop to get data

            // get indivisual data
            $ID = $rows['ID'];
            $Name = $rows['FullName'];
            $Email = $rows['Email'];
            $TCode = $rows['TCode'];
            $TeCode = $rows['TeacherCode'];
            $image_name = $rows['image_name'];
                
        

            // display the values in our tables
            ?>
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $Name; ?></td>       
        <td><?php echo $Email; ?></td>
        <td><?php echo $TCode; ?></td>
        <td><?php echo $TeCode; ?></td>                       
        <td>
        <a href="update-admin.php?ID=<?php echo $rows['ID'];?>" class="btn btn-primary">Edit</a>
        <a href="delete-admin.php?ID=<?php echo $rows['ID'];?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>

            <?php

          }
        }
        else{
          // we not have data in database
        }

      }
  ?>

</table>
</div>

<br>
<?php include('../Partial/admin-footer.php') ?>


