<?php 
$basepath=Yii::app()->request->baseUrl;
$this->pageTitle=Yii::app()->name . ' - 留言板';
$this->page = 'message';
?> 

<h1>留言板</h1>
<div class="view">
	<div class="msg-form">
		<form method="POST" action="/message">
			<p>
			用户名:<input style="width:240px;" type="text" name="name" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			E-mail:<input style="width:240px;" type="text" name="email" />
			</p>
			<p><textarea name="content" style="width:600px;"></textarea></p>
			<p><input type="submit" value="发布"/></p>
		</form>
	</div>
	
	<div class="view">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
	</div>
	
	
</div>