<?php
namespace app\api\controller;

class QuickaskAnswer extends \think\Controller
{
	function index()
	{
		//快问回答
		$list = db("quickask_answer")
			->field('id,content,is_select,create_time,listen_num,like_num')
			->select();
		return json($list);
	}
	
}


?>