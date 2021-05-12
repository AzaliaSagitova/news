<?php

$q = $_GET['q'];

// echo '<pre>' . print_r($q, true) . '</pre>'; 

 ?>

<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
 ?>
<div class="container">
 <form method="get" action="<?= \yii\helpers\Url::to(['news/search']) ?>">
 <input class="form-control" type="text" placeholder="Поиск…" name="q"></form>
 	<div class="row">
	  <div class="col-md-9">
	    <div class="page-header"><h1>Результат поиска</h1></div>
		  <?php if(!empty($results)): ?>
		    <?php foreach($results as $result): ?>
			<div class="row">
			  <div class="col-md-3">
			    <a href="<?= \yii\helpers\Url::to(['/search', 'q' => $result->title, 'name' => $result->sections->id]) ?>" class="thumbnail">
			        <img src="<?= $result->image?>" alt="">
			    </a>
			  </div>
			  <div class="col-md-9">
			  <h4><a href="<?= \yii\helpers\Url::to(['/search', 'q' => $result->title, 'name' => $result->sections->id]) ?>"><?= $result->title?></a></h4>
			    <p>
			      <?= $result->short?>
			    </p>
			    <p><a class="btn btn-info btn-sm" href="<?= \yii\helpers\Url::to(['/post', 'post_id' => $result->id, 'name' => $result->sections->id])  ?>">Читать полностью</a></p>
			    <br/>
			    <ul class="list-inline">
			        <li><i class="glyphicon glyphicon-list"></i> <?= $result->sections->name ?>| </li>
<?php if ($result['mark'] == '1'):?>
			        <li><i class="glyphicon glyphicon-mark"></i>Избранная нововсть</li>
			    </ul>
<?php endif; ?>
			  </div>
			</div>
			<hr>
		<?php endforeach; ?>
 <?php else: ?>
 <h2>Ничего не найдено</h2>
<?php endif; ?>
</div>
</div>
</div>
