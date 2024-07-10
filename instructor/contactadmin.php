<?php include '../Partial/instructor-header.php'; ?>


	<section class="ftco-section">
		<div class="container" style="color:white;">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-7 col-md-6 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4 text-center">Drop Mail on Admin Personal Email</h3>

									<form action="" method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="Name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="Email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="Subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="Message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name="submit" value="Send Message" class="btn" style="background:#002fa7;color:silver;margin-top:25px">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-5 col-md-6 d-flex align-items-stretch">
								<div class="info-wrap contect-box w-100 p-md-5 p-4"style="background: #002fa7;box-shadow: 3px 3px 3px 3px grey;color: silver; border-radius: 25px;">
									<h3>Our Location</h3>
									<p class="mb-4">We're open for any suggestion or just to have a chat</p>
									<div class="dbox w-100 d-flex align-items-start">	
										<div class="text pl-3">
											<p><span class="fa fa-map-marker" style="margin-right:7px">  </span>Address: Autoban Road</p>
										</div>
									</div>

									<div class="dbox w-100 d-flex align-items-center">
										<div class="text pl-3">
											<p><span class="fa fa-phone" style="margin-right:7px">  </span>Phone: <a href="tel://1234567920">+92 310101010</a></p>
										</div>
									</div>

									<div class="dbox w-100 d-flex align-items-center">
										<div class="text pl-3">
											<p><span class="fa fa-paper-plane" style="margin-right:7px">  </span>Email: <a href="truedreamsdigitalacademy.com">eStudiez@gmail.com</a></p>
										</div>
									</div>

									<div class="dbox w-100 d-flex align-items-center">
										<div class="text pl-3">
											<p><span class="fa fa-globe" style="margin-right:7px">  </span>Website: <a href="#">eStudiez.com</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>


<?php include '../Partial/instructor-footer.php'; ?>
		
	<?php

	if(isset($_POST['submit']))
	{
		
		$to_email = "abdullahkhanstft@gmail.com";
		$subject = $_POST['Subject'];
		$body = $_POST['Message'];		
		$headers = "From: " . $_POST["Email"] . "<". $_POST["Email"] .">\r\n";
		
		


		if (mail($to_email, $subject, $body, $headers)) {
    	// echo "Email successfully sent to $to_email...";
		echo "<script>
                alert('Message successfully sent $to_email')
                window.location.href='index.php';
                </script>";
		} else {
			echo "<script>
			alert('Message Not Send Please try it one more time')
			window.location.href='contact.php';
			</script>";
		}

	}
?>