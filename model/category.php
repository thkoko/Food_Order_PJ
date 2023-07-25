<?php
include_once __DIR__.'/../vendor/db/db.php';

class Category{

    public function getCategoriesList(){
        //1.db connection
        $con=Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //2.write sql
        $sql="select * from category";
        $statement=$con->prepare($sql);
        //3.sql excute
        if($statement->execute()){
            //4.result
            $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;
        
    }
}