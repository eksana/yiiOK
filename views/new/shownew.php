<h1 class="my">Show Actionnew</h1>

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

foreach($news as $new){
echo '<table>';
echo '<tr>';
	echo '<br/>' . $new->title. '<br/>';
	echo '<br/>' . $new->text. '<br/>';
	echo '<br/>' . $new->sourth. '<br/>';
	echo '<br/>' . $new->date. '<br/>';
	

	


	echo '</tr>';

	echo '</table>';
}

?>

