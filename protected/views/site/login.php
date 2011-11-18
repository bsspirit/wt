<?php $this->pageTitle=Yii::app()->name . ' - 管理员登陆';?>

<h1>管理员登陆</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p><?php echo $form->errorSummary($model); ?></p>

	<div class="row">
		用户名：
		<?php echo $form->textField($model,'username'); ?>
	</div>

	<div class="row">
		密码：
		<?php echo $form->passwordField($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('登陆'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
