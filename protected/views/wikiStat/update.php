<?php
$this->breadcrumbs=array(
	'Wiki Stats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WikiStat', 'url'=>array('index')),
	array('label'=>'Create WikiStat', 'url'=>array('create')),
	array('label'=>'View WikiStat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage WikiStat', 'url'=>array('admin')),
);
?>

<h1>Update WikiStat <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>