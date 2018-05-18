<?php


namespace app\models;

use app\models\Connection;



abstract class Model {

    protected $connection;


    public function __construct(){
        $this->connection = Connection::connect();
    }


    public function all(){
        $sql = "select * from {$this->table}";
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

    public function find($field, $value){
        $sql = "select * from {$this->table} where {$field} = ?";
        $list = $this->connection->prepare($sql);
        $list->bindValue(1, $value);
        $list->execute();

        return $list->fetch();
    }

    public function delete(){
        $sql = "delete from {$this->table} where $field = ?";

        $list = $this->connection->prepare($sql);
        $list->bindValue(1, $value);
        $list->execute();

        return $delete->rowCount();
    }
}