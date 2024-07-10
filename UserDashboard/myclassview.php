<?php include('../Partial/user-header.php') ?>


<div class="container">
    <div class="Admin-Content">
        <h3>Daily Classes</h3>
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
        <th scope="col">Action</th>                
      </tr>
    
    

  <?php


        $ID = $_SESSION['ID'];

      //GET QUERY THE ADMIN
      $sql2 = "
              SELECT checkout.ID ,checkout.ApplierID, activeclass.Title,activeclass.VDesc,activeclass.video,activeclass.CategoryID,activeclass.TeacherID
              FROM checkout
              INNER JOIN activeclass ON checkout.TeacherID=activeclass.TeacherID
              INNER JOIN addcategory ON activeclass.CategoryID=addcategory.ID
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
            $VDesc = $rows['VDesc'];
            $Video = $rows['video'];                      

            // display the values in our tables
            ?>
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $Title; ?></td>
        <td><?php echo $VDesc; ?></td>
        <td><?php echo $Video; ?></td>        
        <td>
        <a href="watchvideo.php?ID=<?php echo $rows['ID'];?>" class="btn btn-danger">Watch</a>
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


