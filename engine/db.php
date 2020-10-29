<?php

function sqlConnection() {
	return mysqli_connect(SERVER, LOGIN, PASSWORD, DB);
}

function addReview ($connection, int $id, string $review) {
	mysqli_query($connection, '
		INSERT INTO reviews (id_parent, text_review)
		VALUES (' . $id . ', \'' . $review .'\')
		');
}

function execute($connection, string $query) {
	mysqli_query($connection, $query);
}

function queryAll($connection){
	$res = mysqli_query($connection, '
		SELECT goods.id, goods.name, goods.short_desc, goods.price, gallery.urlPath 
		FROM goods, gallery
		WHERE gallery.id_parent = goods.id AND gallery.main = 1
		ORDER BY goods.id
		');
	return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function queryOne($connection, int $id){
	$res = mysqli_query($connection, '
		SELECT goods.id, goods.name as name, goods.short_desc, goods.full_desc, goods.price, gallery.urlPath, gallery.name as pic_name
		FROM goods, gallery
		WHERE gallery.id_parent = goods.id AND 
			  goods.id =  ' . $id);
	return mysqli_fetch_all($res, MYSQLI_ASSOC);

}

function queryReview($connection, int $id){
	$res = mysqli_query($connection, '
		SELECT *
		FROM reviews
		WHERE reviews.id_parent = ' . $id);
	return mysqli_fetch_all($res, MYSQLI_ASSOC);

}