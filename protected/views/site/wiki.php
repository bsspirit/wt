<?php 
$basepath=Yii::app()->request->baseUrl;
$this->pageTitle=Yii::app()->name . ' - 白茶百科';
$this->page = 'wiki';
?> 
<div class="post">
	<h1><?php if(!empty($model->repost)){ ?>[转]<?php } echo $model->title;?></h1>
	<p>作者: <a href="#"><?php echo $model->email?></a>&nbsp;&nbsp;点击<?php echo $stat->count?>次</p>
	<?php if(!empty($model->repost)){ ?> 
	<p>原文地址: <a href="<?php echo $model->repost?>" title="<?php echo $model->title?>" alt="<?php echo $model->title?>" target="_blank"><?php echo $model->repost?></a></p>
	<?php }?>
	<?php if(!empty($model->image)){ ?>
	<p><img onload="if(this.width>550) {this.width=550;}" src="<?php echo $model->image?>" alt="安吉高山白茶" title="安吉高山白茶"/></p>
	<?php }?>
	<br/>
	<p><?php echo $model->content?></p>
	<p class="post-footer align-right">					
		<span class="date"><?php echo $model->create_date?></span>	
	</p>
	<?php if(!empty($prev)){?><p>上一篇:&nbsp;<a href="/site/wiki/<?php echo $prev->id?>"><?php if(!empty($prev->repost)){ ?>[转]<?php } echo $prev->title;?></a></p><?php }?>
	<?php if(!empty($next)){?><p>下一篇:&nbsp;<a href="/site/wiki/<?php echo $next->id?>"><?php if(!empty($next->repost)){ ?>[转]<?php } echo $next->title;?></a></p><?php }?>
</div>