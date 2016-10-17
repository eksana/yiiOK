<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Postsg */

$this->title = 'Update Postsg: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Postsgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="postsg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
