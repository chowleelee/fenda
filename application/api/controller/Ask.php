<?php
namespace app\api\controller;

class Ask extends \think\Controller
{
	function index()
	{
		//小讲表
		$list = db("ask")
			->field('id,ask_content,create_time,answer_content,like_num,listen_num,is_public,duration')
			->select();
		return json($list);
	}
	
}


?>