<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Postsg */

$this->title = 'Create Postsg';
$this->params['breadcrumbs'][] = ['label' => 'Postsgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postsg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
