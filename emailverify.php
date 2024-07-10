<?php
require('config/constant.php');

try {
    

 if(isset($_GET['Email']) && isset($_GET['V_Code'])) 
 {
    // $_SESSION['get'] = $_GET['Email'];
    // $_SESSION['getin'] = $_GET['V_Code'];

    // echo $_SESSION['get'];
    // echo "<br>";
    // echo $_SESSION['getin'];

    $sql = "SELECT * FROM studtbl WHERE `Email`='$_GET[Email]' AND `Verify_code`='$_GET[V_Code]'"; 

     if($res = mysqli_query($conn,$sql))
     {
         if(mysqli_num_rows($res)==1)
         {
            $rows = mysqli_fetch_assoc($res);            

              if($rows['Verification']==0)
              {
                  $update = "UPDATE studtbl SET `Verification`= 1 WHERE `Email`='$rows[Email]'";

                  if(mysqli_query($conn,$update))
                  {
                     echo "<script>
                     alert('Email Verification successfully')
                     window.location.href='login.php';
                     </script>";
                  }
                  else
                  {
                      echo "<script>
                      alert('Cannot verify')
                      window.location.href='index.php';
                      </script>";
                  }
              }
              else
              {
                  echo "<script>
                  alert('Email already Registered')
                  window.location.href='index.php';
                  </script>";
              }
         }
         else
         {
            $sql2 = "SELECT * FROM `teacher` WHERE `Email`='$_GET[Email]' AND `TCode`='$_GET[V_Code]'"; 

            if($run = mysqli_query($conn,$sql2))
            {
                if(mysqli_num_rows($run)==1)
                {
                    $rows = mysqli_fetch_assoc($run);            

              if($rows['Verification']==0)
              {
                  $update = "UPDATE `teacher` SET `Verification`= 1 WHERE `Email`='$rows[Email]'";

                  if(mysqli_query($conn,$update))
                  {
                     echo "<script>
                     alert('Email Verification successfully')
                     window.location.href='login.php';
                     </script>";
                  }
                  else
                  {
                      echo "<script>
                      alert('Cannot verify')
                      window.location.href='index.php';
                      </script>";
                  }
                }
                else
                {
                    
                }
         }
     }
     else
     {
         echo "<script>
         alert('User is not register because technical issue Contact Us tell what do you have problem')
         window.location.href='register.php';
         </script>";
     }
 }
}
}
} catch (Throwable $th) {
    echo  $th->getMessage();
}
?>