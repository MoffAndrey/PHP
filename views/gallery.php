<?php
	foreach ($gallery as $item) :
?>
	<div class="gallery-game">
			<a href="/photo.php?id=<?=$item['id']?>"><img src="<?=$item['urlPath']?>" alt="<?=$item['name']?>" class="gallery-img"></a>
			<h4 class="gallery-h4"><?=$item['name']?></h4>
			<a href="#" class="gallery-button">Buy</a>
	</div>
<? endforeach;?>
