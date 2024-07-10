<?php include('../Partial/admin-header.php') ?>

<div class="container">
    <div class="Admin-Content">
        <h3>Courses</h3>
    </div>

    <div class="Add-admin">
            <a href="upload-course.php" class="btn btn-success">Upload Course</a>
    </div>
</div>

    <br>


   <div class="table-responsive">
  <table class="col-12 table">
    
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>        
        <th scope="col">Description</th>
        <th scope="col">Price</th>        
        <th scope="col">Active</th>  
        <th scope="col">Category ID</th>
        <th scope="col">Teacher ID</th>      
        <th scope="col">Image</th>
        <th scope="col">Action</th>        
      </tr>
    
    

  <?php

      //GET QUERY THE ADMIN
      $sql = "SELECT * FROM `catname` order by `id` DESC";

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
            $image_name = $rows['image_name'];
            $Descript = $rows['Descript'];          
            $Price = $rows['Price'];            
            $Active = $rows['Active'];
            $CName = $rows['CName'];
            $TName = $rows['FullName'];

            // display the values in our tables
            ?>
    
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $Name; ?></td>            
        <td class="col-2"><?php echo $Descript; ?></td>
        <td><?php echo $Price; ?></td>               
        <td><?php echo $Active ?></td>
        <td><?php echo $CName ?></td>
        <td><?php echo $TName ?></td>
        <td>
          <?php          
           if($image_name=="")
           {
            $_SESSION['add'] = "Image not inserted";
           }
           else
           {
            ?>
                <img src="<?php echo $imgurl,$image_name; ?>" height="80px" width="100px">
            <?php
           }
           ?>
        </td>
        
        <td>
        <a href="update-course.php?ID=<?php echo $rows['ID'];?>" class="btn btn-primary">Edit</a>
        <a href="delete-course.php?ID=<?php echo $rows['ID'];?>" class="btn btn-danger">Delete</a>
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
