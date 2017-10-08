<?php
namespace app\api\controller;

class SmalltalkCate extends \think\Controller
{
	function index()
	{
		//小讲分类表
		$list = db("smalltalk_cate")
			->field('id,cate_name')
			->select();
		return json($list);
	}
	
}


?>