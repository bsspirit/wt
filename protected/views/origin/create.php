<?php
$this->breadcrumbs=array(
	'Origins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Origin', 'url'=>array('index')),
	array('label'=>'Manage Origin', 'url'=>array('admin')),
);
?>

<h1>Create Origin</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>