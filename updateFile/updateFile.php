<?php 
	header('content-type:text/html;charset=utf-8');


	//让代码延迟一会
	//传人的是秒
	// sleep(3);

	// print_r($_FILES);
	

	//Array ( [updateFile] => Array ( [name] => sundog2.jpg [type] => image/jpeg [tmp_name] => /Applications/AMPPS/tmp/phpdC7ppV [error] => 0 [size] => 108598 ) )

	//获取上传的文件信息 关系型数组
	$fileArr=$_FILES['updateFile'];

	//获取上传文件的原本名字
	$fileName = $fileArr['name'];

	echo $fileName.'<br>';

	//获取 保持在服务器的位置
	$filePath = $fileArr['tmp_name'];
	echo $filePath.'<br>';

	//知道 如何在php将文件保存
	//参数2是相对路径 相对于该php文件 的php文件夹保存为test.png
	move_uploaded_file($filePath,'../test.png');

 ?>