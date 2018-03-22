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
    <?= Html::cssFile(YII_DEBUG ? '@web/css/all.css' : '@web/css/all.min.css?v=' . filemtime(Yii::getAlias('@webroot/css/all.min.css'))) ?>
    <title><?= Html::encode($this->title) ?></title>
    
    <!-- Bootstrap -->
        
    <?php $this->head() ?>
  </head>
  <body>
      <?php $this->beginBody() ?>
        
	
        <!-- Responsive menu - START -->
	<?= $this->render('_menu'); ?> 
        <!-- Responsive menu - END -->
        
	<!-- Responsive slider - START -->
	<?= $this->render('_slider'); ?> 
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
                            <a href="../../assets/js/all.json"></a>
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
        <?= Html::jsFile(YII_DEBUG ? '@web/js/lib.js' : '@web/js/lib.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/lib.min.js'))) ?>
        <?= Html::jsFile(YII_DEBUG ? '@web/js/all.js' : '@web/js/all.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/all.min.js'))) ?>
<!--    <script>
        Slider.prototype = {
        getGlobalWidth: function() {
        document.write (this.$element.width() + 0);
      }
      getGlobalWidth;
    </script> -->
      </body>
</html>
<?php $this->endPage() ?>
