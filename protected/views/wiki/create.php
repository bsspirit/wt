<?php
$this->breadcrumbs=array(
	'Wikis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Wiki', 'url'=>array('index')),
	array('label'=>'Manage Wiki', 'url'=>array('admin')),
);
?>

<h1>Create Wiki</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>