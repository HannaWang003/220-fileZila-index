<?php
date_default_timezone_set('Asia/Taipei');
session_start();
function dd($ary){
    echo "<pre>";
    print_r($ary);
    echo "</pre>";
}
function to($url){
    header("location:$url");
}
class DB{
private $pdo;
private $dsn = "mysql:host=localhost;chartset=utf8;dbname=s1120403";
private $table;

public function __construct($table){
    $this->pdo =new PDO($this->dsn,'root','');

}
}

?>