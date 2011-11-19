<?php
$this->breadcrumbs=array(
	'Origins',
);

$this->menu=array(
	array('label'=>'Create Origin', 'url'=>array('create')),
	array('label'=>'Manage Origin', 'url'=>array('admin')),
);
?>

<h1>Origins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
