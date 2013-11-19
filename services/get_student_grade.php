<?php
	
	include "koneksi.php";
	$id = $_GET['id'];
	
	$rs = mysql_query(" SELECT distinct class_subject.code,name_ind,name_eng,grade,percentage
						FROM student_schedule_grade,class_subject
						where 
						student_schedule_grade.subject_code = class_subject.code AND
						student_schedule_grade.student_reg_no = '10813659' AND
						student_schedule_grade.semester_id = '$id'");
	
	
	$items = array();
	
	while($r=mysql_fetch_array($rs))
	{
		$arr[] = $r;
	}
	//echo '{"items":'. json_encode($arr).'}';
	echo $_GET['callback'] . '({"items":'. json_encode($arr).'})';

?>