
<?php include('../Partial/admin-header.php') ?>

<div class="container">

    <div class="Admin-Content">
        <h3>Category Home</h3>
    </div>



    <?php
        if(isset($_SESSION['add']))
        {
          echo $_SESSION['add'];    //display the messages
          unset($_SESSION['add']);  //removing the messages
        }
        if(isset($_SESSION['login']))
        {
           echo $_SESSION['login'];
           unset($_SESSION['login']);
        }

    ?>

    <div class="Add-admin">
            <a href="add-category.php" class="btn btn-success">Add Category</a>
    </div>

    <br>

</div>

  <div class="table-responsive">
  <table class="col-12 table">
    
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Category</th>
      <th scope="col">Active</th>      
      </tr>
  <?php

      //GET QUERY THE ADMIN
      $sql = "SELECT * FROM addcategory";

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
            $CName = $rows['CName'];

            // display the values in our tables
            ?>        
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $CName; ?></td>        
        
        <td>
            <a href="update-category.php?ID=<?php echo $rows['ID'];?>" class="btn btn-primary">Edit</a>
            <a href="delete-category.php?ID=<?php echo $rows['ID'];?>" class="btn btn-danger">Delete</a>
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
<?php include('../Partial/admin-footer.php') ?>
