<?php
$this->breadcrumbs=array(
	'Wiki Stats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WikiStat', 'url'=>array('index')),
	array('label'=>'Manage WikiStat', 'url'=>array('admin')),
);
?>

<h1>Create WikiStat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>