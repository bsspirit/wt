<div class="msg">
	<p><b><?php echo CHtml::encode($data->name); ?></b>&nbsp;&nbsp;<a><?php echo CHtml::encode($data->email); ?></a></p>
	<p><?php echo CHtml::encode($data->content); ?></p>
	<p class="post-footer align-right">	
		<span class="date"><?php echo CHtml::encode($data->create_date); ?></span>	
	</p>
</div>

