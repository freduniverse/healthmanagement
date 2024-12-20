<?php
 class CRUD{
var $table;
var $obj=array();
function arrayToQuery($query){
$query_array=array();
foreach($query as $key=>$key_value){
if($key_value=="NOW()"){
$query_array[]="$key=$key_value";
}
else{
$query_array[]="$key='".htmlspecialchars($key_value,ENT_QUOTES)."'";
}
}
return implode(', ',$query_array);
}
function list($query=""){
$query=$query?"where ".$query:"";
$db=Database::connect();
$pdo=$db->prepare("select * from $this->table $query");
$pdo->execute();
$result=$pdo->fetchAll(PDO::FETCH_OBJ);
Database::disconnect();
return $result;
}
function count($query=""){
$query=$query?"where ".$query:"";
$db=Database::connect();
$pdo=$db->prepare("select * from $this->table $query");
$pdo->execute();
Database::disconnect();
return $pdo->rowCount();
}
function get($args){
$db=Database::connect();
$pdo=$db->prepare("select * from $this->table where $args");
$pdo->execute();
$result=$pdo->fetch(PDO::FETCH_OBJ);
Database::disconnect();
return $result;
}
function create(){
$object=$this->arrayToQuery($this->obj);
$db=Database::connect();
$pdo=$db->prepare("insert into $this->table set $object");
$pdo->execute();
Database::disconnect();
}
function update($args){
$object=$this->arrayToQuery($this->obj);
$db=Database::connect();
$pdo=$db->prepare("update $this->table set $object where $args");
$pdo->execute();
Database::disconnect();
}
function delete($args){
$db=Database::connect();
$pdo=$db->prepare("delete from $this->table where $args");
$pdo->execute();
Database::disconnect();
}
}
 ?>