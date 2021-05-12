<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
 ?>

  

<div class="container">
<form method="get" action="<?= \yii\helpers\Url::to(['news/search']) ?>">
 <input class="form-control" type="text" placeholder="Поиск…" name="q"></form>
	<div class="row">
		<div class="col-md-9">
			<div class="page-header">
				<h1>Все новости</h1>
			</div>
			<?php foreach($news as $post): ?>
			<div class="row">
			  <div class="col-md-3">
			    <a href="<?= \yii\helpers\Url::to(['/post', 'post_id' => $post->id, 'name' => $post->sections->id ]) ?>" class="thumbnail">
			        <img src="<?= $post->image?>" alt="">
			    </a>
			  </div>
			  <div class="col-md-9">
			  <h4><a href="<?= \yii\helpers\Url::to(['/post', 'post_id' => $post->id, 'name' => $post->sections->id ]) ?>"><?= $post->title?></a></h4>
			    <p>
			      <?= $post->short?>
			    </p>
			    <p><a class="btn btn-info btn-sm" href="<?= \yii\helpers\Url::to(['/post', 'post_id' => $post->id, 'name' => $post->sections->id]) ?>">Читать полностью</a></p>
			    <br/>
			    <ul class="list-inline">
			        <li><i class="glyphicon glyphicon-list"></i>
			         <!-- <a href="<?= \yii\helpers\Url::to(['news/search', 'q' => $post->sections->id]) ?>"> -->
			         	<?= $post->sections->name ?>
			         		
			         	<!-- </a> -->
			         	 | </li>
<?php if ($post['mark'] == '1'):?>
			        <li><i class="glyphicon glyphicon-mark"></i>Избранная нововсть</li>
			    </ul>
<?php endif; ?>
			  </div>
			</div>
			<hr>
		<?php endforeach; ?>
		</div>
	</div>
</div>



