<?php
	
	include "koneksi.php";
	$id = $_GET['id'];
	
	$rs = mysql_query(" SELECT * FROM student
						WHERE  registration_no = '10813659'");
	
	
	$items = array();
	
	while($r=mysql_fetch_array($rs))
	{
		$arr[] = $r;
	}
	//echo '{"items":'. json_encode($arr).'}';
	echo $_GET['callback'] . '({"items":'. json_encode($arr).'})';

?>