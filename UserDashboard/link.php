<?php include('../Partial/user-header.php') ?>
  
<div class="container">
    <div class="Admin-Content">
        <h3>Lecture Vedios</h3>
    </div>
</div>

    <br>

   <div class="container table-responsive">
  <table class="col-12 table">
    
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Video</th>
      </tr>
    
  <?php


        $ID = $_SESSION['ID'];

      //GET QUERY THE ADMIN      
      $sql2 = "
      SELECT checkout.ID,checkout.ApplierID,checkout.Name AS Name, checkout.Email AS Email, activelink.Title AS Title, activelink.LDesc AS LDesc, activelink.Link AS Link, addcategory.CName AS CName
      FROM checkout
      INNER JOIN studtbl ON studtbl.ID = checkout.ApplierID
      INNER JOIN upcourse ON upcourse.ID = checkout.CourseID
      INNER JOIN addcategory ON upcourse.Category_Id = addcategory.ID
      INNER JOIN activelink ON activelink.CategoryID = addcategory.ID
      WHERE checkout.ApplierID = $ID;
      ";

      // EXCUTE THE QUERY
      $res = mysqli_query($conn, $sql2);

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
            $Video = $rows['Link'];                      

            // display the values in our tables
            ?>
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $Title; ?></td>
        <td><?php echo $VDesc; ?></td>        
        <td>
        <a href="<?php echo $Video; ?>" class="btn btn-primary" style="background-color:#4da6ff;">Watch</a>
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
<?php include('../Partial/user-footer.php') ?>


