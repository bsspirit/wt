<?php
$this->breadcrumbs=array(
	'Origins'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Origin', 'url'=>array('index')),
	array('label'=>'Create Origin', 'url'=>array('create')),
	array('label'=>'View Origin', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Origin', 'url'=>array('admin')),
);
?>

<h1>Update Origin <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>