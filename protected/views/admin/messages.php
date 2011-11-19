<?php 
$this->pageTitle=Yii::app()->name . ' - 留言板管理';
$this->page='admin';
$this->breadcrumbs=array(
	'后台管理控制台'=>array('/admin/index'),
	'留言板管理',
);

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'message-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id',
		'name',
		'email',
		'content',
		'create_date',
		'ip',
		array(
			'class'=>'CButtonColumn',
			'header'=>'操作',
			'buttons'=>array(
	            'delete'=>array(
		           	'label'=>'删除',	
        		   	'url'=>'Yii::app()->controller->createUrl("/admin/messageDelete",array("id"=>$data->id))',
	            	'imageUrl'=>null,
	            ),
             ),
        	'template'=>'{delete}',
            'htmlOptions'=>array(
		        'style'=>'width:80px;'
		    ),
		)
	),
)); ?>