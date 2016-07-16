<?php

class DataBase 
{
    private $connection;

    public function __construct($configuration)
    {
        $this->connection = new mysqli($configuration["host"], $configuration["user"], $configuration["password"], $configuration["schema"]);
    }

    public function insert($table, $fields, $values)
    {
        $fieldsSql = implode(',', $fields);
        $valuesSql = implode(',', $values);
        return $this->connection->query("INSERT INTO {$table} ({$fieldsSql}) VALUES ({$valuesSql})");
    }

}