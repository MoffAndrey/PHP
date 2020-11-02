<?php

	foreach ($basket as $item) :
?>
	<div class="gallery-game">
		<form action="basket.php" method="get">
			<input type="hidden" name="basket_id" value="<?=$item['id']?>">
			<h3 class="gallery-h4"><?=$item['name']?></h3>
			<h4 class="gallery-h4">Цена $<?=$item['price']?></h4>
			<h4 class="gallery-h4">Количество: <?=$item['quantity']?></h4>
			<input type="submit" class="gallery-button" value="Удалить">
		</form>
		<br>
	</div>
<? endforeach;?>