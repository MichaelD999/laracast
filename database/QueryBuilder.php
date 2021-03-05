<?php

class QueryBuilder
{
    protected $pdo;

    public function __contruct($pdo)
    {
    $this->pdo = $pdo;
    }

	public function selectALL($table)
	{
	$statement = $pdo->pdo->prepare('select * from {$table}');
	$statement->execute();
	return $statement->fetchALL(PDO::FETCH_CLASS);

	}
}