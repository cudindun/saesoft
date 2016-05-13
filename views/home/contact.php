<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\models\ProductCategory;
?>		

		<!-- Start Contact Section -->
		<section id="contact">
			<div class="overlay">
				<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>Contact</span> Us</h1>
					<div class="row">
						<div class="contact-form">
							<form role="form" method="post">
								<div class="col-sm-6 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
										<div class="controls">
											<input class="contact_input" type="text" name="name" placeholder="Name">
											<i class="fa fa-user"></i>
										</div>
										<div class="controls">
											<input class="contact_input" type="text" name="Email" placeholder="Email">
											<i class="fa fa-envelope-o"></i>
										</div>
										<div class="controls">
											<input class="contact_input" type="text" name="Phone" placeholder="Phone">
											<i class="fa fa-phone"></i>
										</div>
								</div>
								<div class="col-sm-6 col-md-6 wow fadeInRight" data-wow-delay="0.2s">
										<textarea name="massage" rows="7" class="form-control" placeholder="Massage"></textarea>
								</div>
								<div class="col-sm-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
									<button type="submit" id="submit" class="btn btn-common">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>	
			</div>
		</section>
		<!-- End Contact Section -->