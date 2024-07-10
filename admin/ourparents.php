<?php include('../Partial/admin-header.php') ?>


<div class="container">
    <div class="Admin-Content">
        <h3>Parent Home</h3>
    </div>
</div>

    <br>

   <div class="table-responsive">
  <table class="col-12 table">
    
      <tr>
        <th scope="col">ID</th>
        <th scope="col">FullName</th>        
        <th scope="col">Email</th>
        <th scope="col">Mobile No</th>
        <th scope="col">Parent Code</th>  
        <th scope="col">Action</th>        
      </tr>
    
    

  <?php

      //GET QUERY THE ADMIN
      $sql = "SELECT * FROM studtbl WHERE `RoleType`='Parent'";

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
            $mobile_No = $rows['mobile_No'];
            $PaCode = $rows['Verify_code'];
            $image_name = $rows['image'];
                
        

            // display the values in our tables
            ?>
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $Name; ?></td>       
        <td><?php echo $Email; ?></td>
        <td><?php echo $mobile_No; ?></td>
        <td><?php echo $PaCode; ?></td>                       
        <td>        
        <a href="parentdelete.php?ID=<?php echo $rows['ID'];?>" class="btn btn-danger">Delete</a>
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


