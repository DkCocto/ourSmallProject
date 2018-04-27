<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->title = 'Ksweb Control';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="site-contact">
        
        <div class="content">
            <h3>KSWEB Control</h3>
            <p>You can control KSWEB by your application via Android Broadcast messages. Note that this feature is in beta testing at the moment and this is the first version of it. List of commands will be changed and be refined over time.</p>
            <p>To apply control commands use this java class in your Android project: <?= Html::a('KSWEBControl.java', Url::to(['http://www.kslabs.ru/content/KSWEBControl.java'])); ?><br />
            The typical usage is to extend this class by your main activity. Each command requires a tag for tracking of the result of its execution. KSWEB sends an answer with a tag via 
            Broadcast after executing any command. It can be KSWEBControl.RESPOND_OK or KSWEBControl.RESPOND_ERROR.</p>
                
        </div>
    </div>                

        <div class="content">
            <p>On purchasing of licenses, please, contact us <?= Html::a('dkcocto@gmail.com.', Url::to(['dkcocto@gmail.com', 'subject' => 'KSWEB License'])) ?><p>
        </div>

        

        