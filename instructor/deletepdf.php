<?php 

include('../config/Constant.php');

if (isset($_GET['ID'])) {

    $ID = $_GET['ID'];

    $sql = "DELETE FROM `textbook` WHERE `ID`='$ID'";

     $res = $conn->query($sql);

     if ($res==TRUE) {        
        echo "<script>
             alert('Record deleted successfully.')
             window.location.href='../instructor/links.php';
             </script>";
    }else{        
        echo "<script>
              alert('Record Not Deleted')
              window.location.href='../instructor/links.php';
              </script>";
    }

} 

?>