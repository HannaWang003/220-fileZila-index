<?php
date_default_timezone_set('Asia/Taipei');
session_start();

function dd($ary)
{
    echo "<pre>";
    print_r($ary);
    echo "</pre>";
}
function to($url)
{
    header("location:$url");
}
Class DB{
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=index220";
    protected $pdo;
    protected $table;
    function __construct($table){
        $this->table = $table;
        $this->pdo = new PDO($this->dsn,'root','');
    }

}
?>