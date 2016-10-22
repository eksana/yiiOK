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

foreach($rev as $rev){
echo '<table style="margin-top:40px;width:400px;">';
echo '<tr><td>Название</td><td>Текст</td><td>Дата</td><td>Дата актуальности</td></tr>';
	echo '<tr><td>'. $rev->title.'</td><td>'.$rev->text.'</td><td>'.$rev->date.'</td><td>'.$rev->dateakt.'</td></tr>';
	
	

	echo '</table>';
}

?>

