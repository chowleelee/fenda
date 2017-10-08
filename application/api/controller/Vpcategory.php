<?php
namespace app\api\controller;

class Vip extends \think\Controller
{
	function index()
	{
		//答主分类
		$list = db("vip_cate")
			->field('id,cate_name')
			->select();
		return json($list);
	}
	
}


?>