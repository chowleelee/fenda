<?php
namespace app\api\controller;

class Reply extends \think\Controller
{
	function index()
	{
		//小讲回复表
		$list = db("reply")
			->field('id,content')
			->select();
		return json($list);
	}
	
}


?>