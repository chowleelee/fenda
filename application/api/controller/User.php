<?php
namespace app\api\controller;

class User extends \think\Controller
{
	function index()
	{	
		//用户表
		$list = db("user")
			->field('id,user_name,phone')
			->select();
		return json($list);
	}
	
}


?>