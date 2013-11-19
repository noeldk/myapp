<?php
	
	include "koneksi.php";
	$id = $_GET['id'];
	
	$rs = mysql_query(" SELECT semester_desc
						FROM semester
						WHERE 
						id = '$id'");
	
	
	$items = array();
	
	while($r=mysql_fetch_array($rs))
	{
		$arr[] = $r;
	}
	//echo '{"items":'. json_encode($arr).'}';
	echo $_GET['callback'] . '({"items":'. json_encode($arr).'})';

?>