<?php
	$catalog = ROOT_DIR . "/public/img/gallery";
	$dir = opendir($catalog); 
	$gallery = [];
	while ($element = readdir($dir)) {
   		if(is_file($catalog . "/" . $element)) {
        	//$gallery[] = $catalog . "/" . $element; //Почему то такой полный путь не хочет воспринимать html
        	$gallery[substr($element, 0, -4)] = "img/gallery/" . $element;
   		}
	}
	closedir($dir);
?>