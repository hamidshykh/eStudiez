<?php include '../Partial/user-header.php'; ?>  
<?php    

        $ID = $_GET['ID'];
        $SID = $_SESSION['ID'];


        $sql = "
            SELECT activeclass.ID, activeclass.Title, activeclass.VDesc, activeclass.video,  activeclass.TeacherID, checkout.ApplierID,addcategory.CName
            FROM activeclass
            INNER JOIN checkout ON activeclass.TeacherID=checkout.TeacherID
            INNER JOIN addcategory ON activeclass.CategoryID=addcategory.ID
            WHERE checkout.ApplierID = $SID;
        ";

        $res = mysqli_query($conn,$sql);
        while($rows = mysqli_fetch_array($res))
        {

            $Title = $rows['Title'];

            $VDesc = $rows['VDesc'];

            $video = $rows['video'];

            $Category = $rows['CName'];
    
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
    text-transform: uppercase;
    color:white;
}
.container.col-8{    
    background-image: linear-gradient(to right, #999ca3, #002fa7);    
}
.video.col-10{
    padding:15px;    
    margin:auto;
    background-color:#42537e;
}
</style>
<body>

    <div class="container col-8">

        <div class="container Descript">
            <label for="">Category</label>
            <h5><?php echo $Category; ?></h5>
        </div>

        <div class="Header text-center">
            <label for="">Title</label>
            <h3><?php echo $Title; ?></h3>
        </div>        

        <div class="video col-10">
        <video width="320" height="240" controls>
        <source src="<?php echo $classVideo,$video; ?>" type="video/mp4">
        </video>        
        </div>

        <div class="container Descript">
            <label for="">Description</label>
            <h5><?php echo $VDesc; ?></h5>
        </div>

    
    </div>

    <?php include '../Partial/user-footer.php'; ?>
</body>
</html>