<?php
$this->breadcrumbs=array(
	'Wikis',
);

$this->menu=array(
	array('label'=>'Create Wiki', 'url'=>array('create')),
	array('label'=>'Manage Wiki', 'url'=>array('admin')),
);
?>

<h1>Wikis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
