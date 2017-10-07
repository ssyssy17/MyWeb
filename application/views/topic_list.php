<div class="span2">
	<ul>
	<?php
		foreach($topics as $entry){
	?>		
		<li><a href="/PHP_SSY/index.php/topic/get/<?=$entry->id?>"><?=$entry->title?></a></li>
	<?php
		}
	?>
	</ul>
</div>