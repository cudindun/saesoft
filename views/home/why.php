<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\models\ProductCategory;
?>		
		<!-- Start Why chose us Section -->
		<section id="why-chose">
			<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>Why</span> Chose</h1>
				<div class="row">
					<div class="col-md-4 wow fadeInLeft" data-wow-offset="10" data-wow-delay="0.5s">
						<div class="content-left">
							<div class="box-left">
								<span class="icon">
									<i class="fa fa-laptop"></i>
								</span>
								<div class="content">
									<h4>Respansive Layout</h4>
									<p>Lorem it has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
							</div>
							<br>
							<div class="box-left">
								<span class="icon">
									<i class="fa fa-cog"></i>
								</span>
								<div class="content">
									<h4>Clean Code</h4>
									<p>Lorem it has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
							</div>
							<br>
							<div class="box-left">
								<span class="icon">
									<i class="fa fa-random"></i>
								</span>
								<div class="content">
									<h4>Cross Browser</h4>
									<p>Lorem it has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-offset="10"  data-wow-delay="0.3s">
						<div class="showcase-box">
							<?= Html::img('@web/img/why.png',['alt'=>'lol']) ?>
						</div>
					</div>
					<div class="col-md-4 wow fadeInRight" data-wow-offset="10" data-wow-delay="0.5s">
						<div class="content-right">
							<div class="box-right">
								<span class="icon">
									<i class="fa fa-umbrella"></i>
								</span>
								<div class="content">
									<h4>Premium Features</h4>
									<p>Lorem it has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
							</div>
							<br>
							<div class="box-right">
								<span class="icon">
									<i class="fa fa-heart"></i>
								</span>
								<div class="content">
									<h4>Modern Design</h4>
									<p>Lorem it has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
							</div>
							<br>
							<div class="box-right">
								<span class="icon">
									<i class="fa fa-comments"></i>
								</span>
								<div class="content">
									<h4>24/7 Support</h4>
									<p>Lorem it has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Why chose us Section  -->