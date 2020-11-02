<?php
	foreach ($catalog as $item) :
?>
	<div class="gallery-game">
			<a href="/single.php?id=<?=$item['id']?>"><img src="<?=$item['urlPath']?>" alt="<?=$item['name']?>" class="gallery-img"></a>
			<h4 class="gallery-h4"><?=$item['name']?></h4>
			<h4 class="gallery-h4"><?=$item['short_desc']?></h4>
			<form action="index.php" method="post">
				<input type="hidden" name="basket_id" value="<?=$item['id']?>">
				<input type="hidden" name="basket_name" value="<?=$item['name']?>">
				<input type="hidden" name="basket_price" value="<?=$item['price']?>">
				<input type="submit" class="gallery-button" value="Buy $<?=$item['price']?>">
			</form>
	
	</div>
<? endforeach;?>
