<?php 
function html($img){
	return '<img height="80px" src="'.Yii::app()->request->baseUrl.$img.'"/>';
}

$this->pageTitle=Yii::app()->name . ' - 百科管理';
$this->page='admin';
$this->breadcrumbs=array(
	'后台管理控制台'=>array('/admin/index'),
	'百科管理',
);

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'message-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id',
		array(
			'header'=>'图片',
			'type'=>'HTML',
			'value'=>'empty($data->image)?"":html($data->image)',
		),
		'title',
		//'name',
		//'email',
		'create_date',
		'ip',
		array(
			'class'=>'CButtonColumn',
			'header'=>'操作',
			'buttons'=>array(
				'view'=>array(
		           	'label'=>'详细',	
        		   	'url'=>'Yii::app()->controller->createUrl("/site/wiki",array("id"=>$data->id))',
	            	'imageUrl'=>null,
	            	'options'=>array('target'=>'_blank'),
	            ),
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
	            'pic'=>array(
		           	'label'=>'图片',	
        		   	'url'=>'Yii::app()->controller->createUrl("/admin/wikiImage",array("id"=>$data->id))',
	            	'imageUrl'=>null,
		      		'options'=>array('target'=>'_blank'),
	            ),
             ),
        	'template'=>'{view} {update} {delete} {pic}',
            'htmlOptions'=>array(
		        'style'=>'width:110px;',
		    ),
		)
	),
)); ?>