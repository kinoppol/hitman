<?php
require_once('../db.php');
$sql='select count(*) as remain from target where status="live"';
$result=$db->query($sql);
$r=$result->fetch_assoc();
print 'คงเหลือ '.$r['remain'].' รายชื่อ<br>';

$sql='select * from target_data td left join target t on td.id=t.id where status="live" and td.gender="male"';
$result=$db->query($sql);
$num=0;
while($r=$result->fetch_assoc()){
$num++;
}
print 'เพศชายเหลือ '.$num.' รายชื่อ<br>';

$sql='select * from target_data td left join target t on td.id=t.id where status="live" and td.gender="female"';
$result=$db->query($sql);
$num=0;
while($r=$result->fetch_assoc()){
$num++;
}
print 'เพศหญิงเหลือ '.$num.' รายชื่อ<br>';