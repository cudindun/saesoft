<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\models\ProductCategory;
?>		

		<!-- Start Blog Section -->
		<section id="blog">
			<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>Our</span> Blog</h1>
				<div class="row">					
					<div id="blog-slider" class="owl-carousel owl-theme">
						<div class="item wow fadeInLeft" data-wow-delay="0.4s">
							<div class="blog-wrapper">
								<div id="gallery" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="item active">
											<?= Html::img('@web/img/blog/blog-01.jpg',['alt'=>'this is blog']) ?>	
										</div>
										<div class="item">
											<?= Html::img('@web/img/blog/slider1.jpg',['alt'=>'this is blog']) ?>
										</div>
										<div class="item">
											<?= Html::img('@web/img/blog/slider2.jpg',['alt'=>'this is blog']) ?>
										</div>
									</div>
									<a class="left carousel-control" href="#gallery" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
									<a class="right carousel-control" href="#gallery" data-slide="next"><i class="fa fa-chevron-right"></i></a>
								</div>
								<div class="content">
									<h3>Blog Post With Slide</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
									<a href="#" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: 22 january 2014</p>
									<span><i class="fa fa-comments"></i>30 Comments</span>
								</div>
							</div>
						</div>								
						<div class="item wow fadeInUp" data-wow-delay="0.4s">
							<div class="blog-wrapper">
								<?= Html::img('@web/img/blog/blog-02.jpg',['alt'=>'this is blog']) ?>
								<div class="content">
									<h3>Featured Image Blog Post</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
									<a href="#" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: 22 january 2014</p>
									<span><i class="fa fa-comments"></i>30 Comments</span>
								</div>
							</div>
						</div>
						<div class="item wow fadeInRight" data-wow-delay="0.4s">
							<div class="blog-wrapper">
								<div class="video">
									<iframe src="//player.vimeo.com/video/117934677?color=ea6a47title=0byline=0portrait=0badge=0" width="365" height="268" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
								</div>
								<div class="content">
									<h3>Video BLog Post</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
									<a href="#" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: 22 january 2014</p>
									<span><i class="fa fa-comments"></i>30 Comments</span>
								</div>
							</div>
						</div>
						<div class="item wow fadeIn">
							<div class="blog-wrapper">
								<?= Html::img('@web/img/blog/blog-04.jpg',['alt'=>'this is blog']) ?>
								<div class="content">
									<h3>Blog Post With Slide</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
									<a href="#" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: 22 january 2014</p>
									<span><i class="fa fa-comments"></i>30 Comments</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog-wrapper">
								<?= Html::img('@web/img/blog/blog-05.jpg',['alt'=>'this is blog']) ?>
								<div class="content">
									<h3>Blog Post With Slide</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
									<a href="#" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: 22 january 2014</p>
									<span><i class="fa fa-comments"></i>30 Comments</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog-wrapper">
								<?= Html::img('@web/img/blog/blog-06.jpg',['alt'=>'this is blog']) ?>
								<div class="content">
									<h3>Blog Post With Slide</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
									<a href="#" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: 22 january 2014</p>
									<span><i class="fa fa-comments"></i>30 Comments</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Section -->		