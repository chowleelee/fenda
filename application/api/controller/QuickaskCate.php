<?php
namespace app\api\controller;

class QuickaskCate extends \think\Controller
{
	function index()
	{
		//快问分类
		$list = db("quickask_cate")
			->field('id,cate_name,point,cate_img')
			->select();
		return json($list);
	}
	
}


?>