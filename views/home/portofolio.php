<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\models\ProductCategory;
?>		

		<!-- Start Portfolio Section -->
		<section id="portfolio">
			<div class="container">
			<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>Our</span> Portfolio</h1>
				<div class="row">
					<div class="controls text-center">
        		<a class="filter btn btn-border" data-filter="all">All</a>
        		<a class="filter btn btn-border" data-filter=".design">Design</a>
        		<a class="filter btn btn-border" data-filter=".marketing">Marketing</a>
        		<a class="filter btn btn-border" data-filter=".nwtwork">Network</a>
        		<a class="filter btn btn-border" data-filter=".awesome">Awesome</a>
      		</div>
		      <div id="portfolio-items" class="portfolio-items wow fadeInUpQuick">

		        <div class="mix nwtwork" data-myorder="1">
		          <figure>
								<div class="img">
									<?= Html::img('@web/img/portfolio/img1.jpg',['alt'=>'this is portofolio!']) ?>
									<div class="overlay">
										<a data-lightbox="image1" href="assets/img/portfolio/thumb/img1.jpg" class="link-left"><i class="fa fa-plus"></i></a>
										<a href="#" class="link-right"><i class="fa fa-link"></i></a>
									</div>
								</div>
								<figcaption class="item-description">
									<h4 class="item-title">Maecenas Bibendum</h4>
									<p>Online Startup</p>
								</figcaption>
							</figure>          
		        </div>

		        <div class="mix design" data-myorder="2">
		          <figure>
								<div class="img">
									<?= Html::img('@web/img/portfolio/img2.jpg',['alt'=>'this is portofolio!']) ?>
									<div class="overlay">
										<a data-lightbox="image1" href="assets/img/portfolio/thumb/img2.jpg" class="link-left"><i class="fa fa-plus"></i></a>
										<a href="#" class="link-right"><i class="fa fa-link"></i></a>
									</div>
								</div>
								<figcaption class="item-description">
									<h4 class="item-title">Maecenas Bibendum</h4>
									<p>Online Startup</p>
								</figcaption>
							</figure>          
		        </div>

		        <div class="mix marketing awesome" data-myorder="3">
		          <figure>
								<div class="img">
									<?= Html::img('@web/img/portfolio/img3.jpg',['alt'=>'this is portofolio!']) ?>
									<div class="overlay">
										<a data-lightbox="image1" href="assets/img/portfolio/thumb/img3.jpg" class="link-left"><i class="fa fa-plus"></i></a>
										<a href="#" class="link-right"><i class="fa fa-link"></i></a>
									</div>
								</div>
								<figcaption class="item-description">
									<h4 class="item-title">Maecenas Bibendum</h4>
									<p>Online Startup</p>
								</figcaption>
							</figure>
		        </div>

		        <div class="mix awesome" data-myorder="4">
		          <figure>
								<div class="img">
									<?= Html::img('@web/img/portfolio/img4.jpg',['alt'=>'this is portofolio!']) ?>
									<div class="overlay">
										<a data-lightbox="image1" href="assets/img/portfolio/thumb/img4.jpg" class="link-left"><i class="fa fa-plus"></i></a>
										<a href="#" class="link-right"><i class="fa fa-link"></i></a>
									</div>
								</div>
								<figcaption class="item-description">
									<h4 class="item-title">Maecenas Bibendum</h4>
									<p>Online Startup</p>
								</figcaption>
							</figure>          
		        </div>

		        <div class="mix design" data-myorder="5">
		          <figure>
								<div class="img">
									<?= Html::img('@web/img/portfolio/img5.jpg',['alt'=>'this is portofolio!']) ?>
									<div class="overlay">
										<a data-lightbox="image1" href="assets/img/portfolio/thumb/img5.jpg" class="link-left"><i class="fa fa-plus"></i></a>
										<a href="#" class="link-right"><i class="fa fa-link"></i></a>
									</div>
								</div>
								<figcaption class="item-description">
									<h4 class="item-title">Maecenas Bibendum</h4>
									<p>Online Startup</p>
								</figcaption>
							</figure>          
		        </div>

		        <div class="mix marketing" data-myorder="6">
		          <figure>
								<div class="img">
									<?= Html::img('@web/img/portfolio/img6.jpg',['alt'=>'this is portofolio!']) ?>
									<div class="overlay">
										<a data-lightbox="image1" href="assets/img/portfolio/thumb/img6.jpg" class="link-left"><i class="fa fa-plus"></i></a>
										<a href="#" class="link-right"><i class="fa fa-link"></i></a>
									</div>
								</div>
								<figcaption class="item-description">
									<h4 class="item-title">Maecenas Bibendum</h4>
									<p>Online Startup</p>
								</figcaption>
							</figure>          
		        </div>
		        
		        <div class="mix awesome" data-myorder="1">
		          <figure>
								<div class="img">
									<?= Html::img('@web/img/portfolio/img7.jpg',['alt'=>'this is portofolio!']) ?>
									<div class="overlay">
										<a data-lightbox="image1" href="assets/img/portfolio/thumb/img7.jpg" class="link-left"><i class="fa fa-plus"></i></a>
										<a href="#" class="link-right"><i class="fa fa-link"></i></a>
									</div>
								</div>
								<figcaption class="item-description">
									<h4 class="item-title">Maecenas Bibendum</h4>
									<p>Online Startup</p>
								</figcaption>
							</figure>          
		        </div>  

		        <div class="mix nwtwork design" data-myorder="1">
		          <figure>
								<div class="img">
									<?= Html::img('@web/img/portfolio/img8.jpg',['alt'=>'this is portofolio!']) ?>
									<div class="overlay">
										<a data-lightbox="image1" href="assets/img/portfolio/thumb/img8.jpg" class="link-left"><i class="fa fa-plus"></i></a>
										<a href="#" class="link-right"><i class="fa fa-link"></i></a>
									</div>
								</div>
								<figcaption class="item-description">
									<h4 class="item-title">Maecenas Bibendum</h4>
									<p>Online Startup</p>
								</figcaption>
							</figure>        
		        </div> 

      		</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio Section -->