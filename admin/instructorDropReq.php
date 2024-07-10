<?php include('../Partial/admin-header.php') ?>

<?php        

        mysqli_query($conn,"UPDATE `instreq` SET `status`= 1 WHERE `status` = 0");        
?>


    <div class="container text-center Admin-Content">
        <h1>Instructor Drop Request</h1>
    </div>

    <br>

   <div class="container table-responsive">
  <table class="col-12 table">
    
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Category</th>
        <th scope="col">Reason</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>       
      </tr>
    
    

  <?php

      //GET QUERY THE ADMIN
      $sql = "      
              SELECT instreq.ID,instreq.Name,instreq.Email,instreq.Reason,instreq.message,instreq.status,addcategory.CName
              FROM instreq
              INNER JOIN addcategory ON instreq.Cat_ID=addcategory.ID;
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
            $Name = $rows['Name'];
            $Email = $rows['Email'];
            $CName = $rows['CName'];
            $Reason = $rows['Reason'];
            $Message = $rows['message'];
            $status = $rows['status'];
            if($rows['status']==0)
            {
             
            // display the values in our tables
            ?>    
                    
      <tr style="background-color:lightgray;">
        <th scope="row"><?php echo $No++; ?></th>        
        <td><?php echo $Name; ?></td>
        <td><?php echo $Email; ?></td>
        <td><?php echo $CName; ?></td>
        <td><?php echo $Reason; ?></td>
        <td><?php echo $Message; ?></td>  
        <td>
        <a href="deleteinst.php?ID=<?php echo $rows['ID'];?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
            <?php
             
            }
            else
            {
              ?>                        
              <tr>
                <th scope="row"><?php echo $No++; ?></th>        
                <td><?php echo $Name; ?></td>
                <td><?php echo $Email; ?></td>
                <td><?php echo $CName; ?></td>
                <td><?php echo $Reason; ?></td>
                <td><?php echo $Message; ?></td>  
                <td>
                <a href="deleteinst.php?ID=<?php echo $rows['ID'];?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
                    <?php
            }

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
</div>

    

<?php include('../Partial/admin-footer.php') ?>


