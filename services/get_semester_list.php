<?php
	
	include "koneksi.php";
	
	$rs = mysql_query(" SELECT distinct semester.id,semester_desc,total_semester_gpa,major_semester_gpa 
						FROM student_schedule_grade,semester,student_semester_gpa
						WHERE student_schedule_grade.semester_id = semester.id AND
						student_semester_gpa.semester_id = semester.id AND
						student_schedule_grade.student_reg_no = '10813659' order by semester.id desc");
	
	
	$items = array();
	
	while($r=mysql_fetch_array($rs))
	{
		$arr[] = $r;
	}
	//echo '{"items":'. json_encode($arr).'}';
	echo $_GET['callback'] . '({"items":'. json_encode($arr).'})';

?>