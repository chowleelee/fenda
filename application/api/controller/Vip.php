<?php
namespace app\api\controller;

class Vip extends \think\Controller
{
	function index()
	{
		//答主列表
		$list = db("vip")
			->field('id,identity,price,introduce')
			->select();
		return json($list);
	}
}


?>