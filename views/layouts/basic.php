<?php

use yii\helpers\Html;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= $this->title ?></title>
	<?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

	<div class="wrap">
		<div class="container">
			<ul class="nav nav-pills">
				<li class="nav-item">
				  <a class="nav-link" aria-current="page"><?= Html::a('Главная', ['/'])?></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link"><?= Html::a('Все новости', ['/all-news'])?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link"><?= Html::a('Добавить новость', ['/insert'])?></a>
				</li>
			</ul>

			<?= $content ?>

		</div>
	</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
