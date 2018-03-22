<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $model = ActiveForm::begin(); ?>
    <?=$model->field($form, 'name'); ?>
    <?=$model->field($form, 'email'); ?>
    <?=Html::submitButton('Отправить'); ?>
<?php $model = ActiveForm::end(); ?>



