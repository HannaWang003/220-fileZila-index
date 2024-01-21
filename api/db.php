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
    private function a2s($ary){
        foreach($ary as $idx=>$val){
            $tmp[]="`$idx`='$val'";
        }
        return $tmp;
    }
    private function sql_all($sql,$where,$other){
        if(is_array($where)){
            if(!empty($where)){
                $sql.=" where ".join(" && ",$this->a2s($where));
            }
        }else{
            $sql.=" $where";
        }
        $sql.=" $other";
        return $sql;
    }
private function math($math,$col,$where,$other){
    $sql = "select $math(`$col`) from $this->table ";
    $sql = $this->sql_all($sql,$where,$other);
    return $this->pdo->query($sql)->fetchColumn();
}
}
?>