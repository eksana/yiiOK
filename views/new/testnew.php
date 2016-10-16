<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


?>
<h1>Test Actionnew</h1>

<?php $formnew=ActiveForm::begin() ?>

<?=$formnew->field($modelnew,'title') ?>
<?=$formnew->field($modelnew,'text') ?>
<?=$formnew->field($modelnew,'sourth') ?>
<?=$formnew->field($modelnew,'date') ?>

<?=Html::submitButton('Отправить',['class'=>'btn btn-success'])?>

<?php ActiveForm::end() ?>