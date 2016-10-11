<?php
use app\assets\AppAsset;
use yii\helpers\html;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<h1>privet</h1>
<div class="wrap">
	<div class="container">
		<ul class="nav nav-pills">
  <!--<li role="presentation" class="active"><a href="#">Home</a></li>-->
  <li role="presentation" class="active"><?=Html::a('Главная',['site/index']) ?></li>

  <!--<li role="presentation"><a href="#">Profile</a></li>-->
  <li role="presentation"><?=Html::a('Статья',['post/test']) ?></li>

  <!--<li role="presentation"><a href="#">Messages</a></li>-->
  <li role="presentation"><?=Html::a('Статьи',['post/show']) ?></li>

</ul>
<?= $content ?>
	</div>
</div>
	

    <footer>Моя компания &copy; 2014</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

