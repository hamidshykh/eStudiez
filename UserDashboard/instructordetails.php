<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudies| Instructor Deatils</title>
    <link rel="stylesheet" href="../css/myprofile.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>



<?php include '../Partial/user-header.php' ?>

<div class="container">
    <div class="Admin-Content">

<?php

$ID = $_SESSION['ID'];

//GET QUERY THE ADMIN
$sql = "
            SELECT checkout.ID,checkout.ApplierID,studtbl.FullName,studtbl.Verify_code,upcourse.Name UpTitle,upcourse.image_name,upcourse.Descript,upcourse.Active,teacher.FullName As TName, teacher.image_name AS Timg, teacher.Email AS TEmail,addcategory.CName
            FROM checkout
            INNER JOIN studtbl ON checkout.ApplierID=studtbl.ID
            INNER JOIN upcourse ON checkout.CourseID=upcourse.ID
            INNER JOIN teacher ON checkout.TeacherID=teacher.ID
            INNER JOIN addcategory ON checkout.CategoryID=addcategory.ID
            WHERE checkout.ApplierID = $ID;
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
          $TName=$rows['TName'];
          $TEmail=$rows['TEmail'];                   
          $TImg=$rows['Timg'];
          $AddCat=$rows['CName'];
          

?>

    
    
        <h3><?php echo $AddCat; ?> Instructor</h3>
    </div>
</div>
    <div class="container emp-profile justify-content-center">
    
            

            <div class="row">                
                <div class="col-lg-4">
                <div class="mb-3">
                            
                        <div class="profile-img">                            
                            <img src="<?php echo $imgadmin,$TImg; ?>" >                            
                        </div>  

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="mb-3">
                    <div class="col-lg-4 col-md-4">                    
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $TName ?>
                                    </h5>
                                    <h6>
                                    <?php echo $TEmail ?>
                                    </h6>                                
                                    
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>                                    
                                    </li>                                    
                                </ul>
                            </div>   
                                                                             
                        </div>                        
                    </div>                    
                        <div class="tab-content profile-tab" id="myTabContent" style=" margin-top: 10px;">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="Name">Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 id="border-bottom"><?php echo $TName; ?></h6>                                            
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="Email">Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <h6 id="border-bottom"><?php echo $TEmail?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="Password">Category</label>
                                            </div>
                                            <div class="col-md-6">
                                            <h6 id="border-bottom"><?php echo $AddCat?></h6>
                                            </div>
                                        </div>                                        
                                    </div>                                    
                    </div>
                    
                    </div>                                        
                </div> 
                </div>            
                                  
                    

   <?php

           }
        }
    }

    
   ?>

</div>
              
              </div> 
              <?php include '../Partial/user-footer.php' ?>
</body>
</html>