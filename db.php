<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_database='hitman';
$db_port='3307';

$db = new mysqli($db_host,$db_user,$db_pass,$db_database,$db_port);

if($db->connect_errno){
    print view('_error/errordb');
}
$db-> set_charset("utf8mb4");


function pq($str,$force=false){
    if((is_numeric($str)||empty($str))&&!$force) return $str;
    return "'".$str."'";
}