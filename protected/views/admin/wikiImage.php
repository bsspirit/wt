<?php
$this->pageTitle=Yii::app()->name . ' - 上传标题图片';
$this->page='admin';
$this->breadcrumbs=array(
	'后台管理控制台'=>array('/admin/index'),
	'百科标题图片',
);
?>

<div class="post">
	<h1>上传标题图片<span style="font-size:0.6em;">建议上传400px * 400px的图片</span></h1>
	<div class="row">
		<?php echo CHtml::form('', 'post', array('enctype'=>'multipart/form-data')); ?>
		<?php echo CHtml::errorSummary($form); ?>
		<?php echo CHtml::activeFileField($form, 'image'); ?>
		&nbsp;&nbsp;
		<?php echo CHtml::submitButton('上传'); ?>
		<input type="hidden" name="id" value="<?php echo $model['id']?>" />
		<?php echo CHtml::endForm(); ?>
	</div>
	<div class="row">
		<span style="color:red;font-size:12px;">如果图片已上传，再次上传将覆盖之前的。</span>
	</div>
	<?php if(!empty($model['image'])){?>
	<br/>
	<div class="row">
	<p>文件预览</p>
	<img src="<?php echo Yii::app()->request->baseUrl.$model['image']?>"></img>
	<?php }?>
	</div>
</div>