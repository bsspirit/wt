<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'wiki-stat-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'wkid'); ?>
		<?php echo $form->textField($model,'wkid'); ?>
		<?php echo $form->error($model,'wkid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'count'); ?>
		<?php echo $form->textField($model,'count'); ?>
		<?php echo $form->error($model,'count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operate'); ?>
		<?php echo $form->textField($model,'operate',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'operate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->