<?php
include "connection.php";
$q = $_REQUEST["q"];
if (!$q) return;

$sql = "select DISTINCT CITY as CITY from `air8910` where CITY LIKE '%$q%'";


$st = mysql_query($sql);


if($st)
{while($rs = mysql_fetch_array($st)) {
	$cname = $rs['CITY'];
	echo $cname."\n";}
}

?>