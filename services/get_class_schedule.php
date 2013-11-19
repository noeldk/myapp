<?php
	
	include "koneksi.php";
	
	$rs = mysql_query(" SELECT *
						FROM student_schedule_grade,schedule,class_subject,semester,lecturer
						WHERE 
						    schedule.teacher_id = lecturer.reg_number AND
							student_schedule_grade.schedule_id = schedule.id AND
							schedule.subject_code = class_subject.code AND 
							student_schedule_grade.semester_id = semester.id AND 
							semester.status = '1'");
	
	
	$items = array();
	
	while($r=mysql_fetch_array($rs))
	{
		$arr[] = $r;
	}
	//echo '{"items":'. json_encode($arr).'}';
	echo $_GET['callback'] . '({"items":'. json_encode($arr).'})';

?>