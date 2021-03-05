<?php

require 'bootstrap.php';


require 'Task.php';

$pdo = Connection::make();

$query = new QueryBuilder($pdo);


$tasks = $query->selectALL('todos');

die(var_dump($tasks));

require 'index.view.php';
