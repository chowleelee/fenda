<?php
namespace app\api\controller;

class Comment extends \think\Controller
{
	function index()
	{
		//小讲表
		$list = db("comment")
			->field('id,content,sort,create_time,like_num')
			->select();
		return json($list);
	}
	
}


?>