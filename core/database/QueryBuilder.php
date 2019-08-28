<?php

class QueryBuilder
{
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function insert($table, $parameters)
    {
        $columnPlaceholders = array_map(function ($param) {
            return ":{$param}";
        }, array_keys($parameters));

        $sql = sprintf(
            "insert into %s (%s) values (%s)",
            $table,
            implode(', ', array_keys($parameters)),
            implode(', ', $columnPlaceholders)
        );
        try {
            var_dump($sql);
            $statement = $this->pdo->prepare($sql);
            var_dump($statement);
            $statement->execute($parameters);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
