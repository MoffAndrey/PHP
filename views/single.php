<div class="buy-product">	
		<?php
			foreach ($dbItem as $item) :
		?>
		<div class="gallery-game">
			<img src="<?=$item['urlPath']?>" alt="<?=$item['pic_name']?>">
		</div>
		<? endforeach;?>	
	<div class="buy-product-text">
		<h2 class="product-text-h2"><?=$dbItem[0]['name']?></h2>
		<h3 class="product-text-h2"><?=$dbItem[0]['short_desc']?></h3>
		<h4 class="product-text-h2"><?=$dbItem[0]['full_desc']?></h4>
		<h3 class="product-text-h2">Купить $<?=$dbItem[0]['price']?></h3>
		<br>
		<h3>Отзывы:</h3>
		<?php
			foreach ($reviews as $revItem) :
		?>
		<p><?=$revItem['text_review']?></p>
		<br>
		<? endforeach;?>
	</div>
</div>