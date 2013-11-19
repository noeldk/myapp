<?php
	
	include "koneksi.php";
	
	$rs = mysql_query(" SELECT semester_desc from semester where status = '1'");
	
	
	$items = array();
	
	while($r=mysql_fetch_array($rs))
	{
		$arr[] = $r;
	}
	//echo '{"items":'. json_encode($arr).'}';
	echo $_GET['callback'] . '({"items2":'. json_encode($arr).'})';

?>