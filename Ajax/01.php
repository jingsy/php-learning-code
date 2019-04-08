<?php
	
	$key = $_POST['name'];

	//获取一个value
	$starArr = array(
			'baby'=>array('img/bli.jpg','111'),
			'jay'=>array('img/bli.jpg','11221'),
			'ming'=>array('img/bli.jpg','111333')
	);


	//传入key获取对应的value

	$oneStar = $starArr[$key];

	//返回给浏览器即可
	echo $oneStar[0];

	echo '|';

	echo $oneStar[1];










?>
