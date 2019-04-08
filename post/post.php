<?php 
	header('content-type:text/html;charset=utf-8');

	// 通过$_GET['key'] 即可得到提交的数据，
	echo "你输入的数据为:";
	echo "<br>";
	echo $_POST['userName'];
	echo $_POST['userSkill'];


	echo '<h1>欢迎你'.$_POST['userName'].'</h1>';


	//$_POST[key]  key的取值就是表单元素的

 ?>