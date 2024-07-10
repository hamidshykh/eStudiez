<?php include('../Partial/user-header.php') ?>


<div class="container">
    <div class="Admin-Content">
        <h3>Lecture Handouts</h3>
    </div>
</div>

    <br>

   <div class="container table-responsive">
  <table class="col-12 table">
    
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">PDF File</th>               
        <th scope="col">Action</th>                
      </tr>
    
    

  <?php


        $ID = $_SESSION['ID'];

      //GET QUERY THE ADMIN
      $sql2 = "      
      SELECT checkout.ID, checkout.ApplierID, checkout.Name AS Name, checkout.Email AS Email, textbook.Title AS Title, textbook.Desc AS TDesc, textbook.Upload AS Upload ,checkout.TeacherID , addcategory.CName AS CName 
      FROM checkout
      INNER JOIN studtbl ON studtbl.ID = checkout.ApplierID
      INNER JOIN upcourse ON upcourse.ID = checkout.CourseID
      INNER JOIN addcategory ON upcourse.Category_Id = addcategory.ID
      INNER JOIN textbook ON textbook.CategoryID = addcategory.ID
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
            $TDesc = $rows['TDesc'];
            $Video = $rows['Upload'];                      

            // display the values in our tables
            ?>
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $Title; ?></td>
        <td><?php echo $TDesc; ?></td>
        <td><?php echo $Video; ?></td>
        <td>
        <a href="downloadpdf.php?file=<?php echo $rows['Upload'] ?>" target="_blank" class="btn btn-success" style="background-color:#1e7b1e;">Download</a>
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


