<?php
	
	include "koneksi.php";
	$reg_no = $_GET['reg_no'];
	
	$rs = mysql_query(" SELECT *
						FROM student
						where registration_no = '$reg_no'");
	
	
	$items = array();
	
	while($r=mysql_fetch_array($rs))
	{
		$arr[] = $r;
	}
	//echo '{"items":'. json_encode($arr).'}';
	echo $_GET['callback'] . '({"items":'. json_encode($arr).'})';

?>