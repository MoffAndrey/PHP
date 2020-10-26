<?php

function sqlConnection() {
	return mysqli_connect(SERVER, LOGIN, PASSWORD, DB);
}

function execute($connection, string $query) {
	mysqli_query($connection, $query);
}

function queryAll($connection, string $query = ' '){
	$res = mysqli_query($connection, 'SELECT * FROM gallery' . $query . 'ORDER BY views DESC');
	return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function queryOne($connection, int $id){
	$res = mysqli_query($connection, 'SELECT * FROM gallery WHERE ID = ' . $id);
	return mysqli_fetch_assoc($res);

}