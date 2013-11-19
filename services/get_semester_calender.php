<?php
	
	include "koneksi.php";
	
	$rs = mysql_query(" SELECT * FROM semester
						WHERE academic_calender <> ''");
	
	
	$items = array();
	
	while($r=mysql_fetch_array($rs))
	{
		$arr[] = $r;
	}
	//echo '{"items":'. json_encode($arr).'}';
	echo $_GET['callback'] . '({"items":'. json_encode($arr).'})';

?>