<?php
require('constant.php');

 if(isset($_GET['Email'])) 
 {

    $sql = "DELETE FROM `studtbl` WHERE `Email`='$_GET[Email]'"; 
    
    $res = mysqli_query($conn,$sql);

    if($res)
    {         
        echo "<script>
            alert('Your Account Delete')
            window.location.href='index.php';
            </script>";
            session_destroy();
    }
    else
    {
        echo "<script>
            alert('At The Time You Cannot delete Your Account')
            window.location.href='index.php';
            </script>";        
    }
}
?>