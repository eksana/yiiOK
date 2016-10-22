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
echo '<table style="margin-top:40px;width:300px;">';
echo '<tr><td>Название</td><td>Текст</td><td>Источник</td><td>Дата</td></tr>';
	echo '<tr><td>' . $new->title.'</td><td>'. $new->text.'</td><td>'. $new->sourth.'</td><td>'. $new->date. '</td></tr>';
	

	echo '</table>';
}

?>

