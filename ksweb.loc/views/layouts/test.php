<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;
use yii\web\View;

AppAsset::register($this);

?>


<?php $this->beginPage() ?>
<html>
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <h1 align="center">Тестовый шаблон</h1>
        <p align="center"><button class="btn btn-default" >CLICK ME...</button></p>
        
        <?php if(isset($this->blocks['block'])): ?>
            <?php echo $this->blocks['block']?>
        <?php endif;?>
        
        <?= $content; ?>	
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>