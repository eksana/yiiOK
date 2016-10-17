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
echo '<table>';
echo '<tr>';
	echo '<td>' . $rev->title. '</td>';
	echo '<td>' . $rev->text. '</td>';
	echo '<td>' . $rev->date.'</td>';
	echo '<td>' . $rev->dateakt. '</td>';
	

	


	echo '</tr>';

	echo '</table>';
}

?>

