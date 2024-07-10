<?php include('../Partial/instructor-header.php') ?>


<br><br><br><br>

<div class="container">
    <div class="Admin-Content">
        <h3>Instructor Home</h3>
    </div>

    <div class="Add-admin">
            <a href="manageclasstime.php" class="btn btn-success">Add Class Time</a>
    </div>
</div>

    <br>

   <div class="table-responsive">
  <table class="col-12 table">
    
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Time</th>
        <th scope="col">Date</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    
    

  <?php

      $TID = $_SESSION['ID'];

      //GET QUERY THE ADMIN
      $sql = "      
            SELECT classtime.ID,classtime.SecTitle,classtime.SecDesc,classtime.time,classtime.Date,addcategory.CName
            FROM classtime
            INNER JOIN addcategory ON classtime.categoryID=addcategory.ID
            WHERE classtime.instructor = $TID;

          ";

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
            $SecTitle = $rows['SecTitle'];
            $SecDesc = $rows['SecDesc'];
            $Time = $rows['time'];
            $Date = $rows['Date'];
            $category = $rows['CName'];            

            // display the values in our tables
            ?>
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $SecTitle; ?></td>
        <td><?php echo $SecDesc; ?></td>
        <td><?php echo $Time; ?></td>
        <td><?php echo $Date; ?></td>
        <td><?php echo $category; ?></td>        
        
        <td>
        <a href="updateclasstime.php?ID=<?php echo $rows['ID'];?>" class="btn btn-primary">Edit</a>
        <a href="deleteclasstime.php?ID=<?php echo $rows['ID'];?>" class="btn btn-danger">Delete</a>
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
<?php include('../Partial/instructor-footer.php') ?>


