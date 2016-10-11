<h1 class="my">Show Action</h1>

<button class="btn btn-success">click me...</button>

<?php
$this->registerJsFile('@web/js/scripts.js',['depends'=>'yii\web\YiiAsset'])
?>
<?php

$this->registerCssFile('@web/css/style.css',['depends'=>'yii\bootstrap\BootstrapAsset']);

//$view->registerJsFile ( $url, $options = [], $key = null )
//yii\bootstrap\BootstrapAsset

?>
<?php

foreach($cats as $cat){
	echo '<br/>' . $cat->title. '<br/>';
	echo '<br/>' . $cat->text. '<br/>';
	echo '<br/>' . $cat->author. '<br/>';
	echo '<br/>' . $cat->mark. '<br/>';
}

?>