<?php
namespace app\api\controller;

class SmalltalkContent extends \think\Controller
{
	function index()
	{
		//讲单内容表
		$list = db("smalltalk_content")
			->field('id,title')
			->select();
		return json($list);
	}
	
}


?>