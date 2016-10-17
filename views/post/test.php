<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


?>
<h1>Test Action</h1>

<?php $form=ActiveForm::begin() ?>

<?=$form->field($model,'title') ?>
<?=$form->field($model,'text') ?>
<?=$form->field($model,'author') ?>

<?=Html::submitButton('Отправить',['class'=>'btn btn-success'])?>

<?php ActiveForm::end() ?>