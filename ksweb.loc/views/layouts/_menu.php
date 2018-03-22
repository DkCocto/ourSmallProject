<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

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
                                                                </h1>    
                                                                        <!--//                                                                        NavBar::begin([
//                                                                            'brandLabel' => 'KSWeb',
//                                                                            'brandUrl' => Yii::$app->homeUrl,
//                                                                            'options' => [
////                                                                                'class' => 'navbar-inverse navbar-fixed-top',
//                                                                            ],
//                                                                        ]);
//                                                                        NavBar::end();-->
                                                                
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