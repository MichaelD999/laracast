<?php

require 'Task.php';

try{
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','root', '');
} catch (PDOException $e) {
	die($e->getMessage());

}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchALL(PDO::FETCH_CLASS, 'Task');

var_dump($tasks[0]->foobar());


require 'index.view.php';
