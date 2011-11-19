<?php $basepath=Yii::app()->request->baseUrl;?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'wiki-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		作者：<?php echo $form->textField($model,'name',array('size'=>16,'maxlength'=>16, 'value'=>'admin','style'=>'width:230px')); ?>&nbsp;&nbsp;&nbsp;&nbsp;
		Email：<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>64, 'value'=>'bsspirit@gmail.com','style'=>'width:230px')); ?>
	</div>

	<div class="row">
		标题：<?php echo $form->textField($model,'title',array('size'=>16,'maxlength'=>16,'style'=>'width:530px')); ?>
	</div>
	
	<div class="row">
		原文：<?php echo $form->textField($model,'repost',array('size'=>60,'maxlength'=>256, 'style'=>'width:530px')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<textarea id="content" name="Wiki[content]" style="width:800px;height:400px;visibility:hidden;"><?php echo $model->content?></textarea>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>
<?php $this->endWidget(); ?>
</div>

<script type="text/javascript" src="<?php echo $basepath ?>/js/editor/kindeditor-min.js"></script>
<script type="text/javascript" src="<?php echo $basepath ?>/js/editor/zh_CN.js"></script>
<script type="text/javascript">
var editor_content;
KindEditor.ready(function(K) {
	editor_content = K.create('textarea[#content]', {
		uploadJson : '/admin/upload',
		fileManagerJson : 'manager',
		allowFileManager : false
	});
});

</script>