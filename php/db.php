<?php 

$db = new PDO(
	'mysql:host=localhost;dbname=mysite',
	'root', // (Student)
	''
);

$result = $db->query('SELECT * FROM `users`');

print_r($result);