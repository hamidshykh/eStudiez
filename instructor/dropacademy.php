<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudies| Drop Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JQUERY STEP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
</head>

<style>
    body {
    font-family: 'Lato', sans-serif;
    background-image: linear-gradient(to right, #273572, #427BCB, #db4a8e);
    background-size:cover;
}

h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px;
    }
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;

}

.card{
	margin-left: 10px;
	margin-right: 10px;
}

</style>

<body style="background-image: linear-gradient(to right, #273572, #427BCB, #db4a8e);">

<?php include '../Partial/instructor-header.php'; ?>
 

        <div class="container">
    <div class="Admin-Content">
        <h3>Drop Academy</h3>
    </div>

    
    <div class="row ">
      <div class="col-lg-8 mx-auto py-5">
        <div class="card mt-2 mx-auto p-4">
            <div class="card-body">
       
            <div class = "container">
            
            <form id="contact-form" role="form" action="" method="POST">

            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Name</label>
                            <input id="form_name" type="text" name="Name" class="form-control" placeholder="Please enter your name *" required="required" data-error="Name is required.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Email</label>
                            <input id="form_lastname" type="email" name="Email" class="form-control" placeholder="Please enter your Email *" required="required" data-error="Email is required.">
                                                            </div>
                    </div>
                </div>                  
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Reason</label>
                            <input id="form_email" type="text" name="Reason" class="form-control" placeholder="Please enter your Reason *" required="required" data-error="Valid email is required.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Select Category</label>
                            <select name="CatId" class="form-control">

                      <?php
                          // get data from database 

                          $sql = "SELECT * FROM addcategory";

                          // excuting query 

                          $res = mysqli_query($conn, $sql);

                          // count the rows in database

                          $rows = mysqli_num_rows($res);

                          // if count is grater than zero

                          if($rows>0)
                          {
                              ?>

                                  <option value="0">Select</option>

                              <?php
                              while($rows=mysqli_fetch_assoc($res))
                              {
                                $ID = $rows['ID'];
                                $CName = $rows['CName'];

                                ?>
                                    <option value="<?php echo $ID; ?>"><?php echo $CName; ?></option>          
                                <?php
                              }
                          }
                          else
                          {
                              ?>
                                    <option value="0">No Category</option>
                              <?php
                          }                          
                      ?>
                      </select>      
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Drop Request</label>
                            <textarea id="form_message" name="Message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                >
                            </div>

                        </div>


                        <input type="submit" class="btn btn-dark btn-lg btn-block mt-5" name="submit" value="Send Message">
                    
                
          
                </div>


        </div>
         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>

<?php 

    include '../Partial/instructor-footer.php';
     
    try{
    if(isset($_POST['submit']))
    {

        $Name = $_POST['Name'];
        $Email= $_POST['Email'];
        $Reason = $_POST['Reason'];
        $CatId = $_POST['CatId'];
        $Message = $_POST['Message'];

        $sql = "INSERT INTO `instreq`(`Name`, `Email`, `Cat_ID`, `Reason`, `message`) VALUES ('$Name','$Email','$CatId','$Reason','$Message')";

        $res = mysqli_query($conn,$sql);

        if($res)
        {

            echo "<script>
                 alert('Your request is send please wait for response')
                 window.location.href='index.php';
                 </script>";

        }
        
        

    }
}
//catch exception
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
    


?>

</body>
</html>