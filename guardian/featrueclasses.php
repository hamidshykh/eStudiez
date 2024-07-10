<?php include('../Partial/gaurdian-header.php') ?>

<div class="container">

    <div class="Admin-Content text-center text-white">
        <h3>Feature Classes</h3>
    </div>

    <br>

</div>

  <div class="container table-responsive">
  <table class="col-12 table">
    
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Category</th>
      <th scope="col">Teacher</th>      
      </tr>
  <?php

      //GET QUERY THE ADMIN
      $sql = "
              SELECT classtime.ID,classtime.SecTitle,classtime.SecDesc,classtime.time,classtime.Date,teacher.FullName,addcategory.CName
              FROM classtime
              INNER JOIN  teacher ON classtime.instructor=teacher.ID
              INNER JOIN addcategory ON classtime.categoryID=addcategory.ID;
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
            $CName = $rows['CName'];
            $Fullname = $rows['FullName'];

            // display the values in our tables
            ?>                    
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $SecTitle; ?></td>
        <td><?php echo $SecDesc; ?></td>
        <td><?php echo $Time; ?></td>
        <td><?php echo $Date; ?></td>
        <td><?php echo $CName; ?></td>
        <td><?php echo $Fullname; ?></td>
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
<?php include('../Partial/gaurdian-footer.php') ?>
