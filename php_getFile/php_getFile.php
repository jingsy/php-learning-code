<?php 

	


	//需要修改header 返回的是xml
	header('content-type:text/xml;charset=utf-8');

	//测试 读取文件
	//读取一个xml文件
	echo file_get_contents("01.xml");


 ?>