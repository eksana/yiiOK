<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
//<h1>Test Action</h1>

?>
<?php
$form=ActiveForm::begin() ?>
<?=$form->field($model,'name') ?>
<?=$form->field($model,'email') ?>
<?=$form->field($model,'text') ?>

<?=Html::submitButton('Отправить',['class'=>'btn btn-success'])?>
<?php
ActiveForm::end() ?>