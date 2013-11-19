<?php
	include "koneksi.php";
	function antiinjection($data){
  		$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  		return $filter_sql;
	}

	$username = antiinjection($_GET['username']);
	$pass     = antiinjection($_GET['password']);

	$login=mysql_query("SELECT * FROM user WHERE username='$username' AND password='$pass'");
	$ketemu=mysql_num_rows($login);
	$r=mysql_fetch_array($login);

	// Apabila username dan password ditemukan
	if ($ketemu > 0){
  		//session_start();
  		//session_register("namauser");
  		//session_register("passuser");

   		//$_SESSION[reg_no]  = $r['username'];
  		//$_SESSION[passuser]  = $r['password'];
        $data = 1;
  		echo $_GET['callback'] . '('.json_encode($data).')';
    }
	else{
		$data = 0;
  		echo $_GET['callback'] . '('.json_encode($data).')';
	}
?>