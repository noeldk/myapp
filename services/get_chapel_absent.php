<?php
	
	include "koneksi.php";
	
	$rs = mysql_query(" SELECT absent_date,absent_type
						FROM chaple_absent,semester
						WHERE chaple_absent.semester_id = semester.id AND
						chaple_absent.student_reg_no = '10813659' AND
						semester.status = '1' order by absent_date desc");
	
	
	$items = array();
	
	while($r=mysql_fetch_array($rs))
	{
		$arr[] = $r;
	}
	//echo '{"items":'. json_encode($arr).'}';
	echo $_GET['callback'] . '({"items":'. json_encode($arr).'})';

?>