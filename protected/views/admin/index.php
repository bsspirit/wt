<?php 
$this->pageTitle=Yii::app()->name . ' - 后台管理控制台';
$this->page='admin';
?>
<div class="post">
	<h1>后台管理控制台</h1>
	<!--<p>产品目录:&nbsp;&nbsp;<a href="/admin/products">列表</a>&nbsp;|&nbsp;<a href="/admin/product">增加</a></p>-->
	
	<h2>百科管理</h2>
	<p>
		<a href="/admin/wikis">列表</a>&nbsp;|&nbsp;
		<a href="/admin/wikiAdd">增加</a>
	</p>
	<h2>留言板管理</h2>
	<p>
		<a href="/admin/messages">列表</a>&nbsp;
	</p>
</div>