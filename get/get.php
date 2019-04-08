<?php 
	header('content-type:text/html;charset=utf-8');

	// 通过$_GET['key'] 即可得到提交的数据，
	echo "你输入的数据为:";
	echo "<br>";
	echo $_GET['userName'];
	echo $_GET['userSkill'];


	echo '<h1>欢迎你'.$_GET['userName'].'</h1>';
 ?>