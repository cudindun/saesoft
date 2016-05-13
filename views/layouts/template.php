<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\TemplateAsset;

TemplateAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

		<!-- Start Header Section -->
		<header id="header">
			<nav class="main-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="fa fa-bars fa-lg"></i>
						</button>
						<!-- logo here -->
						<a href="<?= Yii::$app->request->baseUrl ?>/" class="navbar-brand"><?= Html::img('@web/img/logo.png',['alt'=>'lol']) ?></a>
					</div>
					
					<!-- Start Navigation Menu -->
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right" id="main_navigation_menu">
							<li class="active"><a href="#header">Home</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#about">About</a></li>										
							<li><a href="#portfolio">Portfolio</a></li>
							<li><a href="#why-chose">why</a></li>							
							<li><a href="#pricing">Pricing</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#team">Team</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
					<!-- End Navigation Menu -->
				</div>
			</nav>
		</header>
		<!-- End Header Section -->

	<?php // ================= Here The Page Content ==================== ?>

     	<?= $content ?>

	<?php // ================= Here End of The Page Content ============= ?>
	
		<!-- Start Connected Section -->
		<section id="connected">
			<div class="container">
				<div class="row">
					<h2 class="section-title wow fadeInUp" data-wow-delay=".2s">Stay Connected</h2>		
					<h3 class="discription wow fadeIn" data-wow-delay=".2s">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
					<hr>
					<div class="connected-wrapper text-center">
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-item">
								<a href="#"><i class="fa fa-phone"></i></a>
								<h5>Customer Care</h5>
								<h4>0123 - 456 - 789</h4>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-item">
								<a href="#"><i class="fa fa-user"></i></a>
								<h5>Support Team</h5>
								<h4>support@name.com</h4>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-item">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<h5>Twitter</h5>
								<h4>@example.com</h4>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-item">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<h5>Facebook</h5>
								<h4>example.agency</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Connected Section -->

		<!-- Footer Section Start -->
		<footer id="footer">
			<div class="container">
					<div class="copyright text-center">
						<p>Designed and Developed by <a href="http://graygrids.com">GrayGrids</a></p>
					</div>
			</div>
		</footer>
		<!-- Footer Section End -->

		<!-- Scroll Top -->
		<div class="scroll-top" data-spy="affix" data-offset-top="300">
			<a href="#header"><i class="fa fa-angle-up"></i></a>
		</div>
		<!-- Scroll End -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
