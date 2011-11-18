<?php 
$basepath=Yii::app()->request->baseUrl;
$this->pageTitle=Yii::app()->name . ' - 白茶百科';
$this->page = 'wiki';
?> 
<h1>白茶百科</h1>
<div class="view">
	<?php 
		$this->widget('zii.widgets.grid.CGridView',array(
			'id'=>'grid-news',
			'dataProvider'=>$dataProvider,
			'columns'=>array(
				array(
					'class'=>'CLinkColumn',
					'header'=>'标题',
					'labelExpression'=>'(empty($data->repost)?"":"[转] ").CHtml::encode($data->title)',
					'urlExpression'=>'Yii::app()->createUrl("site/wiki",array("id"=>$data->id))',
				),
				array(
					'header'=>'日期',
					'value'=>'date("Y-m-d",strtotime($data->create_date))',
				),
			),
		));
	?>
</div>