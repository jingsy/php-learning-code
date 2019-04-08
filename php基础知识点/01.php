<?php
	
	//php告诉浏览器按照什么文本编码解析
	header('content-type:text/html;charset=utf-8');
	
	//单行注释
	/* 多行 */ 
	//php定义变量 $
	$num =1; //整型
	$str ="123";//字符串
	$bool=true;
	$float=1.1;

	//
	echo "hello php";
	echo "<br>";
	echo $num;
	echo $float;
	echo "<input type='button' value='click me'>";



	$male='girl';

	if ($male=='man') {
		echo "男人";
	}else{
		echo '女生';
		echo "<br>";
	}

	$day = 'monday';
	if ($day=='monday') {
		echo "今天是周一";
	}

//	php中用. 拼接字符串
	for ($i=0; $i <10 ; $i++) { 
		echo "string".$i;
		echo "<br>";
	}

	//while loop
	$num=0;
	while ($num<=10) {
		echo "我好饿啊";
		$num++;
	}

	//三元表达式
	//php如果报错 错误信息最后有行数
	$five=3;
	$result=($five == 5?"yes": "no");
	echo $result;

	






?>
