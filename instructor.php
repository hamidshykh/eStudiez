
    <!-- start nav -->
    <?php include('Partial/header.php') ?>
	<!-- END nav -->
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Certified Instructor <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Certified Instructor</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">

				<!-- <div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/teacher-2.jpg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">Mitch Parker</a></h3>
							<span class="position mb-2">Programmer</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> -->

				<?php

//GET QUERY THE ADMIN
$sql = "
		  SELECT upcourse.ID, upcourse.Name,upcourse.image_name,upcourse.Descript,upcourse.Price,upcourse.Active,addcategory.CName,teacher.FullName
          FROM upcourse
          INNER JOIN addcategory ON upcourse.Category_Id=addcategory.ID
          INNER JOIN teacher ON upcourse.TeacherID=teacher.ID
          order by `ID` DESC;
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
	  $Name = $rows['FullName'];
	  $image_name = $rows['image_name'];            
	  $CName = $rows['CName'];

	  // display the values in our tables
	  ?>

<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/teacher-7.jpg);">
								<img src="<?php echo $imgurl,$image_name; ?>" height="310px" width="100%">
						</div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html"><?php echo $Name; ?> </a></h3>
							<span class="position mb-2"><?php echo $CName; ?></span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								
							</div>
						</div>
					</div>
				</div>

<?php

}
}
else{
// we not have data in database
}

}
?>

				<!-- <div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/teacher-3.jpg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">Stella Smith</a></h3>
							<span class="position mb-2">Developer</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/teacher-4.jpg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">Monshe Henderson</a></h3>
							<span class="position mb-2">Graphic</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/teacher-5.jpg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">Bianca Wilson</a></h3>
							<span class="position mb-2">Business</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/teacher-6.jpg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">Mitch Parker</a></h3>
							<span class="position mb-2">Programmer</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/teacher-7.jpg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">Stella Smith</a></h3>
							<span class="position mb-2">Developer</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> -->

				
				</section>
    <!-- Footer start	 -->
    <?php include('Partial/footer.php') ?>
    <!-- Footer End -->
