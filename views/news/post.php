<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
 ?>
<?php

$post_id = $_GET['post_id'];
$section_id = $_GET['name'];

 ?>

 <div class="container">
 	<div class="row">
		<div class="col-md-3">
			<a href="#" class="thumbnail">
			    <img src="<?= $post->image?>" alt="">
			</a>
		</div>
 		<div class="col-md-9">
 			<div class="page-header">
 				<h1><?= $post->title ?></h1>
 				<p>
			    <?= $post->short?>
			    </p>
 			</div>
 			<div class="post-content">
 				<p>
				<?= $post->text ?>
				</p>
			</div>
 			<ul class="list-inline">
			    <li><i class="glyphicon glyphicon-list"></i><?= $post->sections->name ?> | </li>
<?php if ($post['mark'] == '1'):?>
			        <li><i class="glyphicon glyphicon-mark"></i>Избранная нововсть</li>
			    </ul>
<?php endif; ?>
 		</div>
 	</div>
 </div>

<div class="page-header"><h4>Похожие новости</h4></div>
	<div class="carousel-inner">
	  <div class="carousel-item active">
	    <div class="row">
	      <?php foreach($name as $post): ?>
	      <div class="col-md-2" >
	        <div class="item-box-blog">
				<a href="<?= \yii\helpers\Url::to(['/post', 'post_id' => $post->id, 'name' => $post->sections->id]) ?>" class="thumbnail">
					<img src="<?= $post->image?>" alt="">
				</a>
	          <div class="item-box-blog-body">
	            <!--Heading-->
	            <div class="item-box-blog-heading">
	              <a href="#" tabindex="0">
	                <h5><a href="<?= \yii\helpers\Url::to(['/post', 'post_id' => $post->id, 'name' => $post->sections->id]) ?>"><?= $post->title?></a></h5>
	              </a>
	            </div>
	          </div>
	        </div>
	      </div>
	      <?php endforeach; ?>
	    </div>
	   </div>
	 </div>

<?php 
// echo '<pre>' . print_r($section_id, true) . '</pre>';
// echo '<pre>' . print_r($name, true) . '</pre>';  
?>