<?php
$this->breadcrumbs=array(
	'Wiki Stats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List WikiStat', 'url'=>array('index')),
	array('label'=>'Create WikiStat', 'url'=>array('create')),
	array('label'=>'Update WikiStat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete WikiStat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WikiStat', 'url'=>array('admin')),
);
?>

<h1>View WikiStat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'wkid',
		'count',
		'operate',
	),
)); ?>
