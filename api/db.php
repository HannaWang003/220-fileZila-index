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
    $sql = "select $math(`$col`) from `$this->table` ";
    $sql = $this->sql_all($sql,$where,$other);
    return $this->pdo->query($sql)->fetchColumn();
}
function find($where){
    $sql = "select * from `$this->table` ";
    if(is_array($where)){
        $sql.=" where ".join (" && ",$this->a2s($where));
    }
    elseif(is_numeric($where)){
        $sql.=" where `id`='$where'";
    }   
    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}
function all($where='',$other='')
{
    if (isset($this->table) && !empty($this->table)) {
        $sql = "select * from `$this->table` ";
        $sql = $this->sql_all($sql, $where , $other);
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);


}
}
function count($where='',$other=''){
    $sql = "select conunt(*) from $this->table ";
    $sql= $this->sql_all($sql,$where,$other);
    return $this->pdo->query($sql)->fetchColumn();
}
function sum($col,$where='',$other=''){
    return $this->math('sum',$col,$where,$other);

}
function max($col,$where='',$other=''){
    return $this->math('max',$col,$where,$other);

}
function min($col,$where='',$other=''){
    return $this->math('min',$col,$where,$other);

}
}
?>