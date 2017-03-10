<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>LiquidApt: Our Team</title>
		<?php include "includes/head.php"; ?>
	</head>

	<body>
		<?php include "includes/header.php"; ?>
		<main class="main">
			<section class="container-main">
				<h1 class="heading-primary">Our Team</h1>
				
				<ul class="team-block grid-parent ul-base">
					<li class="team-each grid-child">
						<img src="assets/img/team/members/Altaf.jpg" alt="Pablo Alfaro" width="600" height="400">
						<div class="team-each-member">Altaf</div>
						<div class="team-each-role">Co-Founder &amp; CTO</div>

					
				</ul> <!-- /team-block -->
			</section> <!-- /container-main -->

			<section class="join-block">
				<div class="background-block background-block--job">
					<div class="background-block-content container-sm">
																		
						</div> <!-- /job-positions-block -->
					
				</div> <!-- /background-block -->

				<div class="form-join-block">
					<form class="form-join js-form-validate">
						<div class="heading-block">
							<h2 class="heading-secondary">Work with LiquidApt</h2>
							<div class="sub-heading">Drop us a line if you have what it takes</div>
						</div>
						<div class="container-mid">
							<div class="grid-parent">
								<div class="grid-child form-join-each">
									<div class="field-block">
										<label for="join-input-name" class="label label-required">Your name</label>
										<input type="text" class="input-text input-required" id="join-input-name">								
									</div>									
								</div>
								
								<div class="grid-child form-join-each">
									<div class="field-block">
										<label for="join-input-email" class="label label-required">Your email</label>
										<input type="email" class="input-text input-required" id="join-input-email">
									</div>
								</div>

								<div class="grid-child form-join-each">
									<div class="field-block">
										<label for="join-input-role" class="label label-required">Your role</label>
										<select id="join-input-role" class="input-text input-required">
											<option value="">Select a Value</option>
											<option value="senior-graphic-designer">Jr. Graphic Designer</option>
											<option value="backend-developer">Sr. Backend Developer</option>
											<option value="ios-developer">iOS Developer</option>
										</select>
									</div>
								</div>
							</div> <!-- /grid-parent -->

							<div class="field-block">
								<label for="join-input-info" class="label label-required">Your skill set</label>
								<textarea class="input-text input-required" id="join-input-info"></textarea>
							</div>

							<div class="field-block center">
								<input type="submit" class="button" value="Get in touch">
							</div>						
						</div> <!-- /container-mid -->
					</form>
				</div> <!-- /form-join-block -->
			</section> <!-- /join-block -->

		</main>
		<?php include "includes/footer.php"; ?>
		<?php include "includes/js-global.php"; ?>
	</body>

</html>
