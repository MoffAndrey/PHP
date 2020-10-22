<?php
function renderGallery(array $galary)
{
	foreach ($galary as $itemName => $itemPath) {
		echo "<div class=\"gallery-game\">
			<a href=\"{$itemPath}\" target=\"_blank\"><img src=\"{$itemPath}\" alt=\"{$itemName}\" class=\"gallery-img\"></a>	
			<h4 class=\"gallery-h4\">{$itemName}</h4>
			<a href=\"#\" class=\"gallery-button\">Buy</a>
		</div>";
	}
}
?>