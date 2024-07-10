<?php 

// check whather the user login or not

if(!isset($_SESSION['username']))
{

    echo "<script>alert('Access To User Panel Please login')
            window.location.href='../login.php';
            </script>";
                    
}

?>