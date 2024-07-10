
<?php include('../Partial/instructor-header.php') ?>

<div class="container">

    <div class="Admin-Content">
        <h3>My All Videos</h3>
    </div>

    <div class="Add-admin">
            <a href="uploadvideo.php" class="btn btn-success">Upload Class Video</a>
    </div>

    <br>

</div>

  <div class="container table-responsive">
  <table class="col-12 table">
    
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Video</th>
      <th scope="col">Action</th>
      </tr>
  <?php

      //GET QUERY THE ADMIN
      $sql = "SELECT * FROM `activeclass` WHERE `TeacherID` = '$_SESSION[ID]'";

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
            $VDesc = $rows['VDesc'];
            $video = $rows['video'];


            // display the values in our tables
            ?>        
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $Title; ?></td>
        <td><?php echo $VDesc; ?></td>
        <td><?php echo $video; ?></td>

        <td>            
            <a href="deletevideo.php?ID=<?php echo $rows['ID'];?>" class="btn btn-danger">Delete</a>
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
