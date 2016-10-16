<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


?>
<h1>Test Actionrev</h1>

<?php $formrev=ActiveForm::begin() ?>

<?=$formrev->field($modelrev,'title') ?>
<?=$formrev->field($modelrev,'text') ?>
<?=$formrev->field($modelrev,'date') ?>
<?=$formrev->field($modelrev,'dateakt') ?>

<?=Html::submitButton('Отправить',['class'=>'btn btn-success'])?>

<?php ActiveForm::end() ?>