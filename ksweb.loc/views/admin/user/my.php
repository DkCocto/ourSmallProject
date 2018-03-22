<?php
use yii\helpers\Html;
//use yii\bootstrap\ActiveForm;
use yii\widgets\ActiveForm;

?>

<?php $model = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?=$model->field($form, 'name') ?>
    <?=$model->field($form, 'email') ?>
    <?=$model->field($form, 'file')->fileInput(); ?>
    <?=Html::submitButton('Отправить'); ?>
<?php ActiveForm::end(); ?>

<?= $var; ?>

