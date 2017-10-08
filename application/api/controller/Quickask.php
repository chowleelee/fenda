<?php
namespace app\api\controller;

class Quickask extends \think\Controller
{
	function index()
	{
		//快问
		$list = db("quickask")
			->field('id,content,price,is_anonymous,create_time,duration')
			->select();
		return json($list);
	}
	
}


?>