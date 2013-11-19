<?php
	
	include "koneksi.php";
	
	$rs = mysql_query(" SELECT absent_date,absent_type,subject_code,name_ind,name_eng
						FROM class_absent,student_schedule_grade,semester,class_subject
						WHERE class_absent.student_schedule_id = student_schedule_grade.id AND
						student_schedule_grade.subject_code = class_subject.code AND
						student_schedule_grade.semester_id = semester.id AND
						student_schedule_grade.student_reg_no = '10813659' AND
						semester.status = '1' order by subject_code,absent_date desc");
	
	
	$items = array();
	
	while($r=mysql_fetch_array($rs))
	{
		$arr[] = $r;
	}
	//echo '{"items":'. json_encode($arr).'}';
	echo $_GET['callback'] . '({"items":'. json_encode($arr).'})';

?>