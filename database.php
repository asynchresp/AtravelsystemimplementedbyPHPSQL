<?php
	//����һ�����ݿ�ȫ�ֱ���
	global $db;
	//�����ݿ�
	$db = new mysqli("localhost","root","ustclyh","project2");
	if (mysqli_connect_errno())
	{
		printf("Database Connect Failed. Error: %s\n",mysqli_connect_error());
		exit();
	}
?>