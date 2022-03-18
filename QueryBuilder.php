<?php

class QueryBuilder
{
    public $dsn ="mysql:host=localhost;dbname=coding-academy";
    public $username = "root";
    public $pass = "";
    private $pdo ;
    private $finalQuery;

    /**
     * @param $pdo
     */
    public function __construct()
    {
        $this->pdo = new PDO($this->dsn,$this->username,$this->pass);
        echo "Connected successfully to DB";
    }

    public function select($columns = "*",$table,$condition = null){
        if($condition != null)$this->finalQuery="SELECT ".$columns." FROM ".$table." WHERE $condition";
        else $this->finalQuery="SELECT ".$columns." FROM ".$table;
        return $this;
    }

    public function update($table,$columns,$values,$condition){
        if(count($columns) == count($values)){
            $this->finalQuery = "UPDATE ".$table." SET ";
            for ($i=0 ; $i<count($values) ; $i++) {
                $column = $columns[$i];
                $value = $values[$i];
                if ($i == count($values) - 1) $pair = "$column = \"$value\"";
                else $pair = "$column = $value , ";
                $this->finalQuery .= $pair;
            }
            $this->finalQuery.=" WHERE ".$condition;
            echo $this->finalQuery;
        }
        return $this;
    }

    public function delete($table,$condition){
        $this->finalQuery = "DELETE FROM $table WHERE $condition";
        return $this;
    }

    public function insert($table,$columns,$values){
        if(count($columns) == count($values)){
            $this->finalQuery = "INSERT INTO $table (";
            for ($i=0 ; $i<count($columns) ; $i++) {
                $column = $columns[$i];
                if ($i == count($columns) - 1) $this->finalQuery.="$column)";
                else $this->finalQuery.="$column, ";
            }
            $this->finalQuery.=" VALUES (";
            for ($i=0 ; $i<count($values) ; $i++) {
                $value = $values[$i];
                if ($i == count($values) - 1) $this->finalQuery.=" $value)";
                else $this->finalQuery.="$value, ";
            }
                echo $this->finalQuery;
        }
        return $this;
    }

    public function orderBy ($columns){
        $this->finalQuery .= " ORDER BY $columns";
        return $this;
    }

    public function  count($columns,$table){
//        str_replace("SELECT","SELECT count($table)",$this->finalQuery);
        $this->finalQuery="SELECT COUNT($columns) FROM $table";
        return $this;
    }

    public function limit($rowCount,$offset = null){
        if($offset!= null){
            $this->finalQuery.=" LIMIT $offset , $rowCount";
        }else{
            $this->finalQuery.=" LIMIT $rowCount";
        }
        echo $this->finalQuery;
        return $this;
    }

    public function innerJoin($columns, $table1, $table2,$condition){
        $this->finalQuery = "SELECT $columns FROM $table1 INNER JOIN $table2 ON $condition";
        return $this;
    }

    public function leftJoin($columns, $table1, $table2,$condition){
        $this->finalQuery = "SELECT $columns FROM $table1 LEFT JOIN $table2 ON $condition";
        return $this;
    }

    public function rightJoin($columns, $table1, $table2,$condition){
        $this->finalQuery = "SELECT $columns FROM $table1 RIGHT JOIN $table2 ON $condition";
        return $this;
    }

    public function runQuery(){
//        $stm = $this->pdo->prepare('select * from users where id=4 order by id desc ');
        $stm = $this->pdo->prepare($this->finalQuery);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }
}