<?php 
$basepath=Yii::app()->request->baseUrl;
$this->pageTitle=Yii::app()->name . ' - 留言板';
$this->page = 'message';
?> 

<h1>留言板</h1>
<div class="view">
	<div class="msg-form">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'message-form',
			'enableAjaxValidation'=>false,
		)); ?>
		<p><?php echo $form->errorSummary($model); ?></p>
		<p>
		用户名:<?php echo $form->textField($model,'name',array('size'=>16,'maxlength'=>16,'style'=>'width:230px;')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		E-mail:<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>64,'style'=>'width:230px;')); ?>
		</p>
		<p><?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50, 'style'=>'width:580px;')); ?></p>
		<p><input type="submit" value="发布"/></p>
		<?php $this->endWidget(); ?>
	</div>
	
	<div class="view">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view_msg',
		)); ?>
	</div>
	
	
</div>