<?php
$this->breadcrumbs=array(
	'Wiki Stats',
);

$this->menu=array(
	array('label'=>'Create WikiStat', 'url'=>array('create')),
	array('label'=>'Manage WikiStat', 'url'=>array('admin')),
);
?>

<h1>Wiki Stats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
