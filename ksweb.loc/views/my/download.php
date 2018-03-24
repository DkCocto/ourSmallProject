<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>

<h1 align="center">Hello world and girl</h1>
<span class="url"><?= Html::a('BUSINESS OFFERS', Url::to(['/bussines-offers']))?></span>
<br>
<?= Html::img('/web/files/8.jpg', ['alt' => 'GIRLS']);?>

<br>
<?= Html::a('BUSINESS OFFERS', Url::to(['/bussines-offers']))?>


<!--<div class="slider">
		<div class="">
			<div class="">
				<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
					<div class="slides" data-group="slides">						
						<ul>
							<li>
								<div class="slide-body" data-group="slide">
                                                                        <?= Html::img('/web/img/3.jpg', ['alt' => 'KSWeb'])?>
                                                                    <img src="/web/img/3.jpg" alt="" class="img-responsive" > 
								</div>					
							</li>
							<li>
								<div class="slide-body" data-group="slide">
                                                                        <?= Html::img('/files/4c.jpg', ['alt' => 'GIRLS'])?>
									<img src="img/6.jpg" alt="" class="img-responsive" >  
								</div>
							</li>
							<li>
								<div class="slide-body" data-group="slide">
                                                                        <?= Html::img('/web/img/5.jpg', ['alt' => 'KSWeb'])?>
									<img src="img/5.jpg" alt="" class="img-responsive" >  									
								</div>
							</li>
                                                        <li>
								<div class="slide-body" data-group="slide">
                                                                        <?= Html::img('/files/8e8.jpg', ['alt' => 'GIRLS'])?>
									<img src="img/5.jpg" alt="" class="img-responsive" >  									
								</div>
							</li>		
						</ul>
					</div>			   
					<a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-3x"></i></a>
					<a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-3x"></i></a>		
				</div>
			</div>
		</div>
	</div>-->