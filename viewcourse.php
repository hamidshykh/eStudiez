<?php include('Partial/header.php'); ?>
<?php

$ID = $_GET['ID'];        

$res = mysqli_query($conn, "SELECT * FROM `catname` WHERE `ID`='$ID'");
while($rows = mysqli_fetch_array($res))
{


    $Name = $rows['Name'];

    $image_name = $rows['image_name'];

    $Descript = $rows['Descript'];

    $Price = $rows['Price'];    

    $Active = $rows['Active'];

    $CName = $rows['CName'];

    $TName = $rows['FullName'];
}
    
    

?>


<!--For Page-->
<div class="bg">


<!--For Row containing all card-->
<div class="row mainRow">

    <!--Card 1-->
    <div class="col-lg-8">
        <div class="card card-cascade wider shadow p-3 ">

            <!--Card image-->
            <div class="view view-cascade overlay text-center">
                <img class="card-img-top" src="<?php echo $imgurl,$image_name; ?>"alt="">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>


            <!--Product Description-->
            <div class="desc">

                <!-- 1st Row for title-->
                <div class="row subRow">


                    <!--Column for Data-->
                    <div class="col-8">                  
                        <p>Name</p>
                        <p class="row2"><?php echo $Name; ?></p>
                        <br>
                    </div>                        

                    <div class="col-4">                  
                        <p>Category</p>
                        <p class="row2"><?php echo $CName; ?></p>
                        <br>                        
                    </div>                    

                    <div class="col-8">                  
                        <p>Course Activation</p>
                        <p class="row2"><?php echo $Active; ?></p>
                        <br>
                    </div>

                    <div class="col-4">
                    <p>Teacher</p>
                        <p class="row2"><?php echo $TName; ?></p>
                        <br>                    
                    </div>

                    <div class="col-8">
                        <p>Description</p>
                        <p class="row2"><?php echo $Descript; ?></p>                        
                    </div>
                    
                    <div class="col-4">
                    <p>Price PKR</p>
                        <p class="row2"><?php echo $Price; ?></p>                                        
                    </div>                                        

                    <div class="row subRow">
                    
                    </div>

                </div>





                <!-- 2nd Row for title-->
                




            </div>
        </div>
    </div>



    <!--Card 2-->
    <div class="col-lg-4">
        <div class="card card-cascade card-ecommerce wider shadow p-3 ">

            <!--Card Body-->
            <div class="card-body card-body-cascade">

                <!--Card Description-->
               
                <div class="payment">

                    <p class="heading2"><strong>Payment Details</strong></p>
                    <p class="cardAndExpire">Card Number<span class="float-right">Expiry</span></p>
                    <p class="cardAndExpireValue">161617161816188<span class="float-right">26/11</span></p>
                    <p class="nameAndcvc" style="margin-bottom:-10px;">Cardholder name<span class="float-right">CVC</span></p>
                    <p class="nameAndcvcValue">Mr. Abdullahkhan<span class="float-right">010</span></p>
                    
                    <form action="" method="POST">

                    <div class="col">
                    <label class="form-label" for="form3Example4c">Name</label>
                    <!-- <p class="nameAndcvcValue">Name</p> -->
                    <input id="emailInput" placeholder="Enter your Account Name" class="form-control" type="Name" name="Name" oninvalid="setCustomValidity('Please enter Name')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                    </div>

                    <div class="col">
                    <label class="form-label" for="form3Example4c">Email</label>
                    <!-- <p class="nameAndcvcValue">Email</p> -->
                    <input id="emailInput" placeholder="Enter your Account Email" class="form-control" type="Email" name="Email" oninvalid="setCustomValidity('Please enter Email')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                    </div>
                        
                    <div class="col">
                    <label class="form-label" for="form3Example4c">Phone Number</label>
                    <!-- <p class="nameAndcvcValue">Phone Number</p> -->
                    <input id="emailInput" placeholder="Enter your Phone Number" class="form-control" type="Number" name="Number" oninvalid="setCustomValidity('Please enter Mobile NO')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                    </div>

                    <div class="col">
                    <label class="form-label" for="form3Example4c">Card Holder's Name</label>
                    <!-- <p class="nameAndcvcValue">Card Holder's Name</p> -->
                    <input id="emailInput" placeholder="Enter Card Holder Name" class="form-control" type="CName" name="CName" oninvalid="setCustomValidity('Please enter Card Holder Name')" onchange="try{setCustomValidity('')}catch(e){}" required="">                    
                    </div>

                    <div class="col">
                    <label class="form-label" for="form3Example4c">Bank Account Number</label>
                    <!-- <p class="nameAndcvcValue">Bank Account Number</p> -->
                    <input id="emailInput" placeholder="Enter Bank Card Number only" class="form-control" type="number" name="Cardno" oninvalid="setCustomValidity('Please enter Card NO')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                    </div>
                    
                    <div class="col mt-2"></div>

                </div>

                <!--Card footer-->

     
                
                    <div class="card-footer text-center" style="cursor: pointer;border:none;">
                    <input type="submit" name="submit" value="PURCHASE &#8594;" class="card-footer text-center">
                    </div>
                </a> 

            </div>
        </div>
    </div>

</div>
</div> 


<?php
            
    if(isset($_POST['submit']))
    {
        
            $ID = $_GET['ID'];        

            $res = mysqli_query($conn, "SELECT * FROM `upcourse` WHERE `ID`='$ID'");
            while($rows = mysqli_fetch_array($res))
            {
                $CategoryID = $rows['Category_Id'];
                $TeacherID = $rows['TeacherID'];
            }

        $ID = $_GET['ID'];        
        $UserID = $_SESSION['ID'];
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Number = $_POST['Number'];
        $CardHolder = $_POST['CName'];
        $CardNo = $_POST['Cardno'];        

        $sql = "INSERT INTO `checkout`(`Name`, `Email`, `Cardholder`, `Cardno`, `ApplierID`, `CourseID`, `MobileNo`, `TeacherID`, `CategoryID`) VALUES ('$Name','$Email','$CardHolder','$CardNo','$UserID','$ID','$Number','$TeacherID','$CategoryID')";

        $res = mysqli_query($conn,$sql);

        if($res==true)
        {
            echo "<script>
            alert('Course Purchase Successfully')
            window.location.href='UserDashboard/mycourse.php';
            </script>";
        }

    

    }


?>