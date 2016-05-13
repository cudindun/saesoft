<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\models\ProductCategory;
?>		
		<!-- Start Intro Section -->
		<section id="intro" class="section-intro">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="main-text">
							<h1 class="wow fadeInUp"><span>Startup</span> - Bootstrap Template</h1>
							<h2 class="wow fadeInUp" data-wow-delay=".7s">Clean and Refreshing Solution for Startup and Agency Sites</h2>
							<div class="wow fadeInUp" data-wow-delay="1.5s"><a onclick="smoothScr.anim('services')" class="btn btn-border btn-lg"><i class="fa fa-spinner fa-spin"></i> Explore</a></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Intro Section -->

		<?= //Render some element
			$this->render('service.php');
		?>

		<?= //Render some element
			$this->render('about_us.php');
		?>

		<?= //Render some element
			$this->render('portofolio.php');
		?>

		<?= //Render some element
			$this->render('why.php');
		?>

		<?= //Render some element
			$this->render('pricing.php');
		?>

		<?= //Render some element
			$this->render('blog.php');
		?>

		<?= //Render some element
			$this->render('team.php');
		?>

		<?= //Render some element
			$this->render('contact.php');
		?>