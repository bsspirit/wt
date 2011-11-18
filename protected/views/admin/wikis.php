<?php 
$this->breadcrumbs=array(
	'后台管理控制台'=>array('/admin/index'),
	'百科管理',
);

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'message-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id',
		'name',
		'email',
		'title',
		'create_date',
		'ip',
		array(
			'class'=>'CButtonColumn',
			'header'=>'操作',
			'buttons'=>array(
				'update'=>array(
		           	'label'=>'修改',	
        		   	'url'=>'Yii::app()->controller->createUrl("/admin/wikiUpdate",array("id"=>$data->id))',
	            	'imageUrl'=>null,
	            ),
	            'delete'=>array(
		           	'label'=>'删除',	
        		   	'url'=>'Yii::app()->controller->createUrl("/admin/wikiDelete",array("id"=>$data->id))',
	            	'imageUrl'=>null,
	            ),
             ),
        	'template'=>'{update} {delete}',
            'htmlOptions'=>array(
		        'style'=>'width:80px;'
		    ),
		)
	),
)); ?>