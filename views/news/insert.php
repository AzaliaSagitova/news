<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
 ?>

<h1>Создание новости</h1>

<?php if( Yii::$app->session->hasFlash('success') ): ?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<?php echo Yii::$app->session->getFlash('success'); ?>
	</div>
<?php endif;?>

<?php if( Yii::$app->session->hasFlash('error') ): ?>
	<div class="alert alert-danger alert-dismissible" role="alert">
		<?php echo Yii::$app->session->getFlash('error'); ?>
	</div>
<?php endif;?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'newsForm']]) ?>
<?= $form->field($model, 'title')?>
<?= $form->field($model, 'short')?>
<?= $form->field($model, 'text')->textarea(['rows'=> 5])?>
<?= Html::submitButton('Создать', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>

