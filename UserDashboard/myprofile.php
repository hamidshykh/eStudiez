<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True Dreams Digital Academy | My Profile</title>
    <link rel="stylesheet" href="../css/myprofile.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>

<?php include '../Partial/user-header.php' ?>

<?php

    if(isset($_SESSION['ID']))
    {
        $ID = $_SESSION['ID'];

        //GET QUERY THE ADMIN
      $sql13 = "SELECT * FROM `studtbl` WHERE `ID`= $ID";

      // EXCUTE THE QUERY
      $res13 = mysqli_query($conn, $sql13);

      // checking the query excute or not
      if($res13==TRUE)
      {
        //count rows
        $rows = mysqli_num_rows($res13); //get all the row in the database

        // check num of rows
        if($rows>0)
        {
          // we have data in database
          while($rows = mysqli_fetch_assoc($res13))
          {
            
            $username=$rows['FullName'];                        
            $Email=$rows['Email'];
            $pass=$rows['Password'];
            $image = $rows['image'];                
            
          }
        }
        
      }
    }

?>
    <div class="container emp-profile">
            <form  action="" method="post" enctype="multipart/form-data">
            

            <div class="row">                
                <div class="col-lg-4">
                <div class="mb-3">
    
                        <div class="profile-img">
                            
                            <img src="<?php echo $imgurlprofile,$image; ?>" >
                            <div class="file btn btn-lg btn-primary">
                                Change Photo                            
                            <input type="file" name="image" placeholder="Image" />
                            </div>                            
                        </div>                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 col-sm-9">
                <div class="mb-3">
                    <div class="col-lg-3 col-md-3 ">                    
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $_SESSION['username']; ?>
                                    </h5>
                                    <h6>
                                    <?php echo $Email; ?>
                                    </h6>                                
                                    
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>                                    
                                    </li>                                    
                                </ul>
                            </div>   
                                                                             
                        </div>                        
                    </div>                    
                        <div class="tab-content profile-tab" id="myTabContent" style="margin-left: 47px; margin-top: 50px;">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="Name">Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" class="form-control" id="Update" name="Name" value="<?php echo $username; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="Email">Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" class="form-control" id="Update" name="Email" value="<?php echo $Email; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="Password">Old Password</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" class="form-control" id="Update" name="oldpassword">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="Password">New Password</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" class="form-control" id="Update" name="NewPassword">
                                            </div>
                                        </div>

                                        <div class="submitbtn" style="text-align:center; margin-top:50px;">

                                        <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Update">
                                        
                                        </div>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>                                
                                </div>                                
                            </div>                            
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                    <h6 class="col-sm-12 text-center">Delete (MyAccount)</h6>
                    
                    <div class="submitbtn" style="text-align:center; margin-top:0px;">
                        <button class="btn btn-danger btn-sm"><a href="../config/deletemyac.php?Email=<?php echo $Email; ?>" class="text-white">Delete</a></button>
                        <!-- <input type="submit" class="btn btn-danger btn-sm" name="" value="Delete"> -->
                    </div>
                    
                    </div>                                        
                </div>            
              </div>
            </form>           
        </div>                      
                    

<br>
    
<?php include '../Partial/user-footer.php' ?>

<?php 

    

    if(isset($_POST['submit']))
    {                        
        
        try{

        $Name = $_POST['Name'];        
        $Email = $_POST['Email'];        
        $oldpassword = $_POST['oldpassword'];
        $NewPassword = $_POST['NewPassword'];
                   
        // check whather image is selected or not
        if(isset($_FILES['image']['name']))
        {
          // get the details of the selected image

          $image_name = $_FILES['image']['name'];

          // check the button is click upload not not

          if($image_name!="")
          {

            // image is seleted

            // get the extehtion of selected image

            $ext = end(explode('.', $image_name));

            // create new image name
            
            $image_name = "User-profile".rand(0000,9999).".".$ext;

            // source the scr is the current location of the image

            $src = $_FILES['image']['tmp_name'];

            // desctination path of the image to be upload

            $dst = "../images/userimgprofile/".$image_name;

            // upload image

            $upload = move_uploaded_file($src, $dst);

            // chect whather image is upload or not               

            if($upload==false)
            {
                echo "<script>
                alert('Feiled To upload image')
                window.location.href='myprofile.php';
                </script>";
            }

          }          
        }
        else
        {
          $image_name = "";
        }

        if(!empty($image_name))
        {
            $sql = "UPDATE `studtbl` SET `FullName`='$Name',`Email`='$Email',`image`='$image_name' WHERE `ID`= $ID";
            
            if(mysqli_query($conn,$sql))
            {
                echo "<script>
                alert('Update Data Seccuessfully')
                window.location.href='myprofile.php';
                </script>";
            }  
            else
            {
                echo "<script>
                alert('Data Not Update Server Down')
                window.location.href='myprofile.php';
                </script>";
            }
        }

        if(empty($oldpassword))
        {
             
            $sql = "UPDATE `studtbl` SET `FullName`='$Name',`Email`='$Email' WHERE `ID`= $ID";
            
            if(mysqli_query($conn,$sql))
            {
                echo "<script>
                alert('Update Data Seccuessfully')
                window.location.href='myprofile.php';
                </script>";
            }  
            else
            {
                echo "<script>
                alert('Data Not Update Server Down')
                window.location.href='myprofile.php';
                </script>";
            }
        }
        else
        {      
            if($oldpassword==$pass)
            {
                $sql2 = "UPDATE `studtbl` SET `FullName`='$Name',`Email`='$Email',`Password`='$NewPassword' WHERE `ID`= $ID";
            
                if(mysqli_query($conn,$sql2))
                {
                    echo "<script>
                    alert('Update Data Seccuessfully')
                    window.location.href='myprofile.php';
                    </script>";
                }  
                else
                {
                    echo "<script>
                    alert('Data Not Update Server Down')
                    window.location.href='myprofile.php';
                    </script>";
                }    
            }
            else
            {
                echo "<script>
                alert('Your Old Password is wrong')
                window.location.href='myprofile.php';
                </script>";                               
            }            
        }    
    }
    
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
}
?>

</body>
</html>



