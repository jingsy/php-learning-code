<?php 
	// header('content-type:text/html;charset=utf-8');
	// $twoArr = array(
	// 				array('西兰花','西葫芦','西红柿'),
	// 				array('牛肉','鸡肉','鸭肉')
	// 			);


	// echo $twoArr[1][1];

	// //php中输出变量的详细内容 print_r是个php预定义的函数

	// print_r($twoArr);

	//模拟用户数据
	$personArr = array(
				'jack'=>array('name'=>'jack','age'=>'18','skill'=>'handsome'),
				'rose'=>array('name'=>'jack','age'=>'18','skill'=>'handsome'),
				'ice'=>array('name'=>'ice','age'=>'180','skill'=>'cold'),
			 	);

	//模拟浏览器输入用户名到服务器，服务器返回用户名

	$key=$_POST['name'];

	//从数组获取对应的用户数据
	// print_r($personArr[$key]['age']);
	echo '姓名： '.$personArr[$key]['name'].' 年龄: '.$personArr[$key]['age']. '技能:' .$personArr[$key]['skill'];

	//可以将$personArr[$key]单独存为一个数组 方便使用
	
 ?>