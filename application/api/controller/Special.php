<?php
namespace app\api\controller;

class Special extends \think\Controller
{
	function index()
	{
		//小讲专题
		$list = db("special")
			->field('id,title,introduce,special_img')
			->select();
		return json($list);
	}
	
}


?>