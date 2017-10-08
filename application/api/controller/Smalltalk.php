<?php
namespace app\api\controller;

class Smalltalk extends \think\Controller
{
	function index()
	{
		//小讲表
		$list = db("smalltalk")
			->field('id,title,smalltalk_img,duration,price,summary,join_num,create_time')
			->select();
		return json($list);
	}
	
}


?>