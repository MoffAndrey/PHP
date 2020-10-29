<?php
	foreach ($catalog as $item) :
?>
	<div class="gallery-game">
			<a href="/single.php?id=<?=$item['id']?>"><img src="<?=$item['urlPath']?>" alt="<?=$item['name']?>" class="gallery-img"></a>
			<h4 class="gallery-h4"><?=$item['name']?></h4>
			<h4 class="gallery-h4"><?=$item['short_desc']?></h4>
			<a href="#" class="gallery-button">Buy $<?=$item['price']?></a>
	</div>
<? endforeach;?>
