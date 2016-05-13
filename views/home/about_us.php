<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\models\ProductCategory;
?>		

		<!-- Start About Us Section -->
		<section id="about" class="about-section">
			<div class="container">
			<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>About</span> Us</h1>
				<div class="row">
					<div id="slide" class="owl-carousel">
						<div class="item">
							<div class="col-sm-6 col-md-6 wow fadeInLeft" data-wow-offset="10">
								<div class="side-left">
										<?= Html::img('@web/img/about-carousel/01.jpg',['alt'=>'yap']) ?>							
									<div class="info">
										<h4>John Doe</h4>
										<p>Ul/UX Developer</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 wow fadeInRight" data-wow-offset="10">
								<div class="side-right">
									<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantlum doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritais ea quasi architecto beattae vista dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consiquuntur magin dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem iqsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eisu modi tempora incidunt ut labore et nostrum exercitationem ullam corporis suscipit laboriosam.
									</p>
									<a href="#" class="btn btn-border"><i class="fa fa-shopping-cart"></i> Hire Me</a>
									<a href="#" class="btn btn-border"><i class="fa fa-download"></i> Download Resume</a>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="col-sm-6 col-md-6">
								<div class="side-left">									
										<?= Html::img('@web/img/about-carousel/02.jpg',['alt'=>'yap']) ?>							
									<div class="info">
										<h4>John Doe</h4>
										<p>Ul/UX Developer</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="side-right">
									<p>
										 enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consiquuntur magin dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem iqsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eisu modi tempora incidunt ut labore et nostrum exercitationem ullam corporis suscipit laboriosam.
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantlum doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritais ea quasi architecto beattae vista dicta sunt explicabo. Nemo
									</p>
									<a href="#" class="btn  btn-border angle"><i class="fa fa-shopping-cart"></i> Hire Me</a>
									<a href="#" class="btn btn-border angle"><i class="fa fa-download"></i> Download Resume</a>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="col-sm-6 col-md-6">
								<div class="side-left">									
										<?= Html::img('@web/img/about-carousel/03.jpg',['alt'=>'yap']) ?>						
									<div class="info">
										<h4>John Doe</h4>
										<p>Ul/UX Developer</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="side-right">
									<p>
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantlum doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritais ea quasi architecto beattae vista dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consiquuntur magin dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem iqsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eisu modi tempora incidunt ut labore et nostrum exercitationem ullam corporis suscipit laboriosam.
									</p>
									<a href="#" class="btn  btn-border angle"><i class="fa fa-shopping-cart"></i> Hire Me</a>
									<a href="#" class="btn btn-border angle"><i class="fa fa-download"></i> Download Resume</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Us Section -->	