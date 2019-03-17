<?php
	define('HOST', 'localhost');
	define('DBNAME', 'birga');
	define('USER', 'root');
	define('PASS', '');

	$dbc = mysqli_connect(HOST, USER, PASS, DBNAME) or die('Ошибка БД');