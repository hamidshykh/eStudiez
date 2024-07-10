<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
body,html{
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
    }

    .searchbar{

    margin:auto;
    height: 60px;
    background-image: linear-gradient(to left,  #c0c0c0 0%,#002fa7 100%);
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    border-radius:20px;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 200px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    background-image: linear-gradient(to left, #002fa7 0%, #c0c0c0 100%);
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }
</style>
<body>
<?php include '../Partial/gaurdian-header.php'; ?>

    <div class="container">

<div class="Admin-Content text-center text-white">
    <h3>Enter Here Rollno For Find Candidate</h3>
</div>
</div>
<form action="" method="POST">
<div class="container ">
      <div class="d-flex justify-content-center">
        <div class="searchbar">
          <input class="search_input" type="text" name="RollNo" placeholder="RollNo...">

          <!-- <input type="submit" class="search_icon" name="submit" > -->

          <button type="submit" name="submit" class="search_icon"><i class="fas fa-search"></i></button>

          <!-- <a href="#" class="search_icon" ><i class="fas fa-search"></i></a> -->

        </div>
      </div>
    </div>
</form>


<section>
  <!-- <div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-md-10">
        <div class="card text-black" style="border-radius: 25px; margin-top:20px">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-12 order-2 order-lg-1">
              <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Progress Portal</p> -->
                <div class="container">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-lg-12 col-md-10">
        <div class="card text-black" style="border-radius: 25px; margin-top:20px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8 col-md-10 order-2 order-lg-1">
              <form class="mx-1 mx-md-4" action="" Method="POST">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-2 mt-4">Progress Portal</p>



<?php

    

    if(isset($_POST['submit']))
    {
        $RollNo = $_POST['RollNo'];

        $sql = "
                SELECT monmarks.ID,monmarks.TestID,monmarks.Desc,monmarks.Date,monmarks.Marks,monmarks.RollNo,
                studtbl.FullName AS SName,studtbl.Email
                ,teacher.FullName AS TName,addcategory.CName
                FROM monmarks
                INNER JOIN teacher ON monmarks.TeacherID=teacher.ID
                INNER JOIN addcategory ON monmarks.CategoryID=addcategory.ID
                INNER JOIN studtbl ON monmarks.RollNo=studtbl.Verify_code
                WHERE monmarks.RollNo = '$RollNo';        
              ";

        $res = mysqli_query($conn,$sql);

        if($res==TRUE)
        {
            $row = mysqli_num_rows($res);

            if($row>0)
            {
                while($row = mysqli_fetch_assoc($res))
                {                  
                    
                      $TestID = $row['TestID'];
                      $Desc = $row['Desc'];
                      $Date = $row['Date'];
                      $Marks = $row['Marks'];
                      $RollNo = $row['RollNo'];
                      $SName = $row['SName'];
                      $Email = $row['Email'];
                      $TName = $row['TName'];
                      $CName = $row['CName'];
?>


                  <div class="row">
                    <div class="col">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $RollNo; ?></h4>                      
                      <label class="form-label" for="form3Example4cd">RollNo</label>
                    </div>
                  </div>
                  </div>

                  <div class="col">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $SName; ?></h4>                      
                      <label class="form-label" for="form3Example4cd">Student Name</label>
                    </div>
                  
                  </div>
                  </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $Email; ?></h4>                      
                      <label class="form-label" for="form3Example4cd">Student Email</label>
                    </div>
                    </div>



                  <div class="row">
                    <div class="col">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $TName; ?></h4>                      
                      <label class="form-label" for="form3Example4cd">Teacher Name</label>
                    </div>
                  </div>
                  </div>
                  
                  <div class="col">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $CName; ?></h4>                      
                      <label class="form-label" for="form3Example4cd">Course Category</label>
                    </div>
                  </div>
                  </div>
                  </div> 


                  <div class="row">
                    <div class="col">
                    
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $TestID; ?></h4>                      
                      <label class="form-label" for="form3Example4cd">TestID</label>
                    </div>
                  </div>
                  </div>
                  
                  <div class="col">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $Marks; ?></h4>                      
                      <label class="form-label" for="form3Example4cd">Marks</label>
                    </div>
                  </div>
                  </div>
                  </div>                  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <h4><?php echo $Desc; ?></h4>                      
                      <label class="form-label" for="form3Example4cd">Description</label>
                    </div>
                  </div>

                  <div class="regbtn" id="regbtn">                    
                    <button class="btn btn-primary btn-block mb-4"><a href="#">Cencel</a></button>
                    </div>    

                </form>
               
                    <?php
                }
            }
            else
            {
                echo "<script>
                alert('This RollNo Is Wrong! $RollNo')
                window.location.href='result.php';
                </script>";                
            }

            

        }

    }
?>
   </div>              
            </div>            
          </div>
        </div>
      </div>
    </div>    
    <br><br>
  </div>
</body>
</html>
<?php include '../Partial/gaurdian-footer.php'; ?>