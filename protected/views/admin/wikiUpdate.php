<?php
$this->pageTitle=Yii::app()->name . ' - 百科修改';
$this->page='admin';
$this->breadcrumbs=array(
	'后台管理控制台'=>array('/admin/index'),
	'百科修改',
);

echo $this->renderPartial('_form_wiki', array('model'=>$model)); 

?>