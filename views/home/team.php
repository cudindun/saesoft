<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\models\ProductCategory;
?>		

		<!-- Start Team Section -->
		<section id="team">
			<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>Our</span> Team</h1>
				<div class="row">

					<div class="col-sm-6 col-md-3 wow flipInY" data-wow-offset="10" data-wow-delay="0.2s">
						<div class="item-square">
							<div class="face">
								<?= Html::img('@web/img/team-member/team-02.jpg',['alt'=>'this is my team!']) ?>
								<div class="overlay"></div>
							</div>
							<div class="content">
								<div class="title">
									<h3>Musharrof Chy</h3>
									<p>Frontend Developer</p>
								</div>
								<div class="text">
									<p>Sit amet. consectetur adipiscing elit. Aenean consectetur suscipit viverra Morbi non arcu blandit</p>
								</div>
								<div class="social-icons">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 wow flipInY" data-wow-offset="10" data-wow-delay="0.4s">
						<div class="item-square">
							<div class="face">
								<?= Html::img('@web/img/team-member/team-01.jpg',['alt'=>'this is my team!']) ?>
								<div class="overlay"></div>
							</div>
							<div class="content">
								<div class="title">
									<h3>Imran Khan</h3>
									<p>Wordpress Developer</p>
								</div>
								<div class="text">
									<p>Sit amet. consectetur adipiscing elit. Aenean consectetur suscipit viverra Morbi non arcu blandit</p>
								</div>
								<div class="social-icons">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 wow flipInY" data-wow-offset="10" data-wow-delay="0.6s">
						<div class="item-square">
							<div class="face">
								<?= Html::img('@web/img/team-member/team-03.jpg',['alt'=>'this is my team!']) ?>
								<div class="overlay"></div>
							</div>
							<div class="content active">
								<div class="title">
									<h3>Jessi Jain</h3>
									<p>Creative Designer</p>
								</div>
								<div class="text">
									<p>Sit amet. consectetur adipiscing elit. Aenean consectetur suscipit viverra Morbi non arcu blandit</p>
								</div>
								<div class="social-icons">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow flipInY" data-wow-offset="10" data-wow-delay="0.8s">
						<div class="item-square">
							<div class="face">
								<?= Html::img('@web/img/team-member/team-04.jpg',['alt'=>'this is my team!']) ?>
								<div class="overlay"></div>
							</div>
							<div class="content">
								<div class="title">
									<h3>M. Arman</h3>
									<p>Junior Developer</p>
								</div>
								<div class="text">
									<p>Sit amet. consectetur adipiscing elit. Aenean consectetur suscipit viverra Morbi non arcu blandit</p>
								</div>
								<div class="social-icons">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Team Section -->