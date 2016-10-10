<?php
use app\assets\AppAsset;

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

	<?= $content ?>

    <footer>Моя компания &copy; 2014</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

