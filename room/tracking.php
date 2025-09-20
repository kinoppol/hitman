<?php
require_once('../db.php');
$sql='select count(*) as remain from target where status="live"';
$result=$db->query($sql);
$r=$result->fetch_assoc();
print 'คงเหลือ '.$r['remain'].' รายชื่อ<br>';

$sql='select count(*) as male_remain from target_data td left join target t on td.id=t.id where status="live" and td.gender="male"';
$result=$db->query($sql);
$r=$result->fetch_assoc();
print 'เพศชายเหลือ '.$r['male_remain'].' รายชื่อ<br>';

$sql='select count(*) as female_remain from target_data td left join target t on td.id=t.id where status="live" and td.gender="female"';
$result=$db->query($sql);
$r=$result->fetch_assoc();
print 'เพศหญิงเหลือ '.$r['female_remain'].' รายชื่อ<br>';