<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;
use yii\web\View;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    
    <!-- Bootstrap -->
        
    <?php $this->head() ?>
  </head>
  <body>
    <?php $this->beginBody() ?>
    <header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-brand">
                                                                <h1><?= Html::a('KSWEB', Url::to(['/index']))?>
                                                                    <br />
                                                                    <br />
                                                                        <!--//                                                                        NavBar::begin([
//                                                                            'brandLabel' => 'KSWeb',
//                                                                            'brandUrl' => Yii::$app->homeUrl,
//                                                                            'options' => [
////                                                                                'class' => 'navbar-inverse navbar-fixed-top',
//                                                                            ],
//                                                                        ]);
//                                                                        NavBar::end();-->
                                                                </h1>
                                                            <h3>A Developer`s Suite For Android Platform</h3>
								
							</div>
						</div>
						<div class="menu">
<!--                                                    <nav id="menu-list">-->
							<ul class="nav nav-tabs" role="tablist">
                                                                <li role="presentation"><?= Html::a('KSWEB', Url::to(['/index']))?></li>
								<li role="presentation"><?= Html::a('DOWNLOAD', Url::to(['/download']))?></li>
								<li role="presentation"><?= Html::a('BUSINESS OFFERS', Url::to(['/bussines-offers']))?></li>
                                                                <li role="presentation"><?= Html::a('BUY A SERIAL KEY', Url::to(['buy-serial-key-a'])) ?></li>
                                                                <li role="presentation"><?= Html::a('FEATURES INFO', Url::to(['/features-info'])) ?>
                                                                    <ul class="nav-tabs-li" role="tablist">
                                                                        <li role="presentation"><?= Html::a('PHP MODULES LIST', Url::to(['/php-modules-list']))?></li>
                                                                        <li role="presentation"><?= Html::a('SERVER MODULES LIST', Url::to(['/server-modules-list']))?></li>
                                                                        <li role="presentation"><?= Html::a('SCHEDULER', Url::to(['/scheduler']))?></li>
                                                                        <li role="presentation"><?= Html::a('KSWEB', Url::to(['/ksweb']))?></li>
                                                                    </ul>
                                                                </li>
                                                                <li role="presentation"><?= Html::a('CONTACT', Url::to(['/contact'])) ?></li>
                                                                <!--<li role="presentation"><a href="contact.php"><?//= app\components\MenuWidget::widget()?></a></li>-->
							</ul>
<!--                                                    </nav>    -->
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
	
	<!-- Responsive slider - START -->
	<div class="slider">
		<div class="">
			<div class="">
				<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
					<div class="slides" data-group="slides">						
						<ul>
							<li>
								<div class="slide-body" data-group="slide">
                                                                        <?= Html::img('/web/img/3.jpg', ['alt' => 'KSWeb'])?>
                                                                    <!--<img src="/web/img/3.jpg" alt="" class="img-responsive" > -->
								</div>					
							</li>
							<li>
								<div class="slide-body" data-group="slide">
                                                                        <?= Html::img('/web/img/6.jpg', ['alt' => 'KSWeb'])?>
									<!--<img src="img/6.jpg" alt="" class="img-responsive" >  -->
								</div>
							</li>
							<li>
								<div class="slide-body" data-group="slide">
                                                                        <?= Html::img('/web/img/5.jpg', ['alt' => 'KSWeb'])?>
									<!--<img src="img/5.jpg" alt="" class="img-responsive" >  -->									
								</div>
							</li>					
						</ul>
					</div>			   
					<a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
					<a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>		
				</div>
			</div>
		</div>
	</div>
    <!-- Responsive slider - END -->
 
        <?= $content; ?>	

	<!--start footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h5 class="widgetheading">Nam libero tempore</h5>						
						<p>soluta nobis est eligendi optio cumque nihil impedit quo minus id
						excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						
						</p>						
					</div>
				</div>
				<div class="col-lg-4">
					<div class="widget">
						<h5 class="widgetheading">Pages</h5>
						<ul class="link-list">
							<li><a href="#">Press release</a></li>
							<li><a href="#">Terms and conditions</a></li>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Career center</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="widget">
						<h5 class="widgetheading">Latest posts</h5>
						<ul class="link-list">
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Pellentesque et pulvinar enim</a></li>
							<li><a href="#">Natus error sit voluptatem </a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
				
		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="social-network">
							<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="copyright">
							<p>
								<span>&copy;Copyright © 2012-2017 </span><a href="http://bootstraptaste.com" target="_blank">KSLabs Team</a>
							</p>
                            <!-- 
                                All links in the footer should remain intact. 
                                Licenseing information is available at: http://bootstraptaste.com/license/
                                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Resi
                            -->
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
	<!--end footer-->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
	<?php $this->registerJsFile('@web/js/wow.min.js', ['depends' => 'yii\web\YiiAsset'])?>
        <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
