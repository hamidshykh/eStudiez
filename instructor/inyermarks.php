<?php include('../Partial/instructor-header.php') ?>


<div class="container">
    <div class="Admin-Content">
        <h3>Update Marks</h3>
    </div>

    <div class="Add-admin">
            <a href="addyearmarks.php" class="btn btn-success">Add Marks</a>            
    </div>
</div>

    <br>


   <div class="container table-responsive">
  <table class="col-12 table">
    
      <tr>
        <th scope="col">ID</th>
        <th scope="col">RollNo</th>
        <th scope="col">Descript</th>
        <th scope="col">ObtainMarks</th>
        <th scope="col">TotalMarks</th>               
        <th scope="col">Action</th>        
      </tr>
    
    

  <?php

      //GET QUERY THE ADMIN
      $sql = "SELECT * FROM `yermarks` WHERE `TeacherID`= '$_SESSION[ID]'";

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
            $RollNo = $rows['RollNo'];
            $Descript = $rows['Descript'];
            $ObtainMarks = $rows['ObtainMarks'];
            $TotalMarks = $rows['TotalMarks'];                  
            
            // display the values in our tables
            ?>
    
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $RollNo; ?></td>
        <td><?php echo $Descript; ?></td>        
        <td><?php echo $ObtainMarks; ?></td>
        <td><?php echo $TotalMarks; ?></td>                     
        <td>
          <a href="updateyearmarks.php?ID=<?php echo $rows['ID'];?>" class="btn btn-primary">Edit</a>        
        </td>
      </tr>

            <?php

          }
        }
        else{
          echo "<script>
                alert('You not add student result')
                </script>";
        }

      }
  ?>

</table>
</div>

<br>
<?php include('../Partial/instructor-footer.php') ?>
