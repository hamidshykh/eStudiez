<?php include('../Partial/instructor-header.php') ?>

<div class="container">

    <div class="Admin-Content">
        <h3>My All Links</h3>
    </div>

    <div class="Add-admin">
            <a href="videolink.php" class="btn btn-success">Upload Link</a>
    </div>

    <br>

</div>

  <div class="container table-responsive">
  <table class="col-12 table">
    
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Links</th>
      <th scope="col">Action</th>
      </tr>
  <?php

      //GET QUERY THE ADMIN
      $sql = "SELECT * FROM `activelink` WHERE `TeacherID` = '$_SESSION[ID]'";

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
            $Title = $rows['Title'];
            $VDesc = $rows['LDesc'];
            $video = $rows['Link'];


            // display the values in our tables
            ?>        
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $Title; ?></td>
        <td><?php echo $VDesc; ?></td>
        <td><a href=<?php echo $video; ?>>Link</a></td>

        <td>            
            <a href="deletelink.php?ID=<?php echo $rows['ID'];?>" class="btn btn-danger">Delete</a>
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

  
    
  </tbody>
</table>

</div>
<br>
<?php include('../Partial/instructor-footer.php') ?>
