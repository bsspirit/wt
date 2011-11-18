<?php $basepath=Yii::app()->request->baseUrl; ?>
<ul>
<li><a href="<?php echo $basepath?>/default/index" <?php if($page=='index'){echo 'id="current"';}?>>首页</a></li>
<li><a href="<?php echo $basepath?>/site/drink" <?php if($page=='drink'){echo 'id="current"';}?>>品味白茶</a></li>
<li><a href="<?php echo $basepath?>/site/photo" <?php if($page=='photo'){echo 'id="current"';}?>>实景照片</a></li>
<li><a href="<?php echo $basepath?>/site/consult" <?php if($page=='consult'){echo 'id="current"';}?>>购买咨询</a></li>
<li><a href="<?php echo $basepath?>/site/message" <?php if($page=='message'){echo 'id="current"';}?>>留言板</a></li>
<li><a href="<?php echo $basepath?>/site/wiki" <?php if($page=='wiki'){echo 'id="current"';}?>>白茶百科</a></li>
<!--<li><a href="/about">关于本站</a></li>-->
</ul>