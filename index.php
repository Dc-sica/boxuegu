<?php
	// 1. 获取用户在连接最后面传进来的 /模块名称/文件名
	// print_r $_SERVER;
	// var_dump($_SERVER);
	// echo $_SERVER['PATH_INFO'];
	$path = "/dashboard/index";
	if(array_key_exists('PATH_INFO', $_SERVER)){
		$path = $_SERVER['PATH_INFO'];
	}
	//获取目录名称
	$pathArr = explode('/', substr($path, 1));
	$directory = 'dashboard';
	$fileName = 'index';

	//如果用户既传进来目录名又传进来文件名
	if(count($pathArr==2)){
		$directory = $pathArr[0];
		$fileName = $pathArr[1];
	}else if(count($pathArr==1)){
		//如果只传进来目录名
		$directory = $pathArr[0];
	}

	//如果用户啥都没传 那就目录和文件全都是默认值

	$filePath = "/views/".$directory."/".$fileName.".html";

	include $filePath;
?>