<?php
$this->breadcrumbs=array(
	'Wikis'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Wiki', 'url'=>array('index')),
	array('label'=>'Create Wiki', 'url'=>array('create')),
	array('label'=>'View Wiki', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Wiki', 'url'=>array('admin')),
);
?>

<h1>Update Wiki <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>