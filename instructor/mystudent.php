<?php include '../Partial/instructor-header.php'; ?>

<div class="container">
    <div class="Admin-Content text-center">
        <h1>My Students</h1>
    </div>
</div>

    <br>

   <div class="container table-responsive">
  <table class="col-12 table">
    
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>        
        <th scope="col">Email</th>
        <th scope="col">RollNo</th>        
        <th scope="col">Student Profile</th>        
      </tr>
    
    

  <?php

      //GET QUERY THE ADMIN
      // $sql = "SELECT * FROM `mystud` WHERE `ID`= $_SESSION[ID]";


      $sql = "      
      SELECT teacher.ID,teacher.FullName AS tName,studtbl.FullName AS StudName,studtbl.Email,studtbl.image,studtbl.Verify_code,addcategory.CName
      FROM checkout
      INNER JOIN teacher ON teacher.ID=checkout.TeacherID
      INNER JOIN studtbl ON checkout.ApplierID=studtbl.ID
      INNER JOIN addcategory ON checkout.CategoryID=addcategory.ID
      WHERE teacher.ID = $_SESSION[ID];
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
            // $ID = $rows['ID'];
            $Name = $rows['StudName'];
            $RollNo = $rows['Verify_code'];            
            $Email = $rows['Email'];
            $image = $rows['image'];          

            // display the values in our tables
            ?>
      <tr>
        <th scope="row"><?php echo $No++; ?></th>
        <td><?php echo $Name; ?></td>        
        <td><?php echo $Email; ?></td> 
        <td><?php echo $RollNo; ?></td>        
        <td>
            <img src="<?php echo $imgurlprofile,$image; ?>" height="100px" width="150px">
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

<?php include '../Partial/instructor-footer.php'; ?>