<?php 
	header('content-type:text/html;charset=utf-8');

	//数组

	//普通数组 数字，字符串，布尔等等
	$foodArr = array('红烧又','鱼香肉丝','东坡肘子' );
	echo $foodArr[1];

	echo "<br>";

	//关系型数组
	$personArr = array('name' =>'小李子','age'=>'25','skill'=>'水枪' );
	echo $personArr['name'];

	//php‘’里无论是什么都是字符串  “ $变量” 只会识别变量不会识别$
	//可以混用 避免一对
 ?>