<?php include('../Partial/admin-header.php') ?>

<div class="container">
    <div class="Admin-Content">
        <h3>Instructor Home</h3>
    </div>
    <br>

<div class="container table-responsive">
<table class="col-12 table">
 
   <tr>
     <th scope="col">ID</th>
     <th scope="col">Title</th>
     <th scope="col">Description</th>
     <th scope="col">Teacher</th>
     <th scope="col">Category</th>
     <th scope="col">Date</th> 
     <th scope="col">Action</th> 
                    
   </tr>
 
 

<?php

   //GET QUERY THE ADMIN
   $sql = "SELECT * FROM `classtimevw`";

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
         $Title = $rows['SecTitle'];
         $SDesc = $rows['SecDesc'];
         $FName = $rows['Fullname'];
         $Cname = $rows['CName'];
         $time = $rows['time'];                      

         // display the values in our tables
         ?>
   <tr>
     <th scope="row"><?php echo $No++; ?></th>
     <td><?php echo $Title; ?></td>
     <td><?php echo $SDesc; ?></td>
     <td><?php echo $FName; ?></td>
     <td><?php echo $Cname; ?></td>
     <td><?php echo $time; ?></td>
     <td>
          <a href="revisionclass.php" class="btn btn-danger">Delete</a>
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
  </div>

    
<?php include('../Partial/admin-footer.php') ?>


