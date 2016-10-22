<h1 class="my">Show Action</h1>

<button class="btn btn-success">click me...</button>

<?php
$this->registerJsFile('@web/js/scripts.js',['depends'=>'yii\web\YiiAsset'])
?>
<?php

$this->registerCssFile('@web/css/style.css',['depends'=>'yii\bootstrap\BootstrapAsset']);



?>
<?php

foreach($cats as $cat){

	/*echo '<br/>' . $cat->title. '<br/>';
	echo '<br/>' . $cat->text. '<br/>';
	echo '<br/>' . $cat->author. '<br/>';
	echo '<br/>' . $cat->mark. '<br/>';*/

	echo '<table style="margin-top:40px;width:300px;">';
	echo '<tr><td>Название</td><td>Текст</td><td>Автор</td></tr>';
	
	echo '<tr><td>'. $cat->title. '</td><td>'. $cat->text. '</td><td>'. $cat->author.'</td></tr>';
	
	echo '</table>';
}

?>

