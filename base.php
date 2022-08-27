<?php
session_start();
date_default_timezone_set("Asia/Taipei");

class DB{
    protected $table;
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=dbq2";
    protected $pdo;

    function __construct($table)
    {
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }

    /*
    1.新增資料 insert() insert int table...
    2.修改資料 update() update table set...
     ->save()
    3.查詢資料 all(),find() select from table...
    4.刪除資料 del() delete from table...
    5.計算 max(),min(),sum(),count(),avg() -> math() select max() from table...
    */

    function all(){
        
    }
    function find(){

    }
    function save(){

    }
    function del(){

    }
    function math(){

    }
}
?>