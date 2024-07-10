
    <!-- Start nav -->
    <?php 
	include('Partial/header.php');
	
	?>
	<!-- END nav -->
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Course Lists <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Course Lists</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">		
		<div class="container">
			<div style="text-align:center; margin-bottom:30px;">
		<p style="color:#4986fc; font-weight:600;">PICK YOUR COURSE TODAY</p>
		<h1 style="color:black; font-weight:600;">Our Active Course</h1>		
		</div>
			<div class="row">				
			
				<div class="col-lg-12">
					<div class="row">
						<?php 
						
      //GET QUERY THE ADMIN

	  $sql = "
	  		SELECT upcourse.ID, upcourse.Name,upcourse.image_name,upcourse.Descript,upcourse.Price,upcourse.Active,addcategory.CName,teacher.FullName
	  		FROM upcourse
	  		INNER JOIN addcategory ON upcourse.Category_Id=addcategory.ID
	  		INNER JOIN teacher ON upcourse.TeacherID=teacher.ID
	  		WHERE Active = 'Active' order by `ID` DESC;	  
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
            // using while loop to get data

            // get indivisual data
            $ID = $rows['ID'];
            $Name = $rows['Name'];
            $image_name = $rows['image_name'];
            $Descript = $rows['Descript'];
            $Price = $rows['Price'];
            $Active = $rows['Active'];
            $Category = $rows['CName'];
			$Instructor = $rows['FullName'];

            // display the values in our tables
            ?>
						
						<div class="col-md-4 d-flex align-items-stretch ftco-animate">
							<div class="project-wrap">
								<a href="viewcourse.php?ID=<?php echo $ID; ?>" class="img" style="background-image: url(images/work-1.jpg);">
									<img src="<?php echo $imgurl,$image_name; ?>" height="270px" width="100%">
									<span class="price">Enroll Now</span>
								</a>
								<div class="text p-4">
									<h3><a href="#"><?php echo $Descript ?></a></h3>
									<p class="advisor">Category <span><?php echo $Category ?></span></p>
									<p class="advisor">Instructor <span><?php echo $Instructor ?></span></p>
									<ul class="d-flex justify-content-between">
										<li><span class="flaticon-shower">PKR :</span><?php echo $Price ?></li>
										<li class="price">USD : <?php echo $Price ?></li>
									</ul>
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
		</section>

		<!-- start Footer	 -->
        <?php include('Partial/footer.php') ?>
        <!-- End Footer	 -->

	