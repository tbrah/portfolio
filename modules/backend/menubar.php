<div id="menuBar">

	<a class="addNews" href="<?php echo $prefix; ?>admin/pages/add_news.php">Add work</a>
	<a class="addTech" href="<?php echo $prefix; ?>admin/pages/add_tech.php">Add tech</a>

	<ul>
		<li><a class="<?php if($site == 'news'){echo 'menuActive';} ?>" href="<?php echo $prefix; ?>admin/index.php">Showcase</a></li>
		<li><a class="<?php if($site == 'tech'){echo 'menuActive';} ?>" href="<?php echo $prefix; ?>admin/pages/tech.php">Technologies</a></li>
	</ul>


</div>