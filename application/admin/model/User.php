<?php
namespace app\admin\model;

class User extends \think\Model{
 
	public function addUser(){
		db('user')->insert([
			'user_name'=>input('user_name'),
			'total_income'=>input('total_income'),
			'total_profit'=>input('total_profit'),
			'phone'=>input('phone'),
			'user_pwd'=>md5(input('user_pwd')),
			'head_img'=>input('head_img'),
			'create_time'=>time()
			]);
	}

	public function getUserInfo()
	{	
		return db('user')
			->where("id=".input('id'))
			->find();
	}

	public function getUserList()
	{
		//条件查询
		$searchParam = ['query'=>[]];
		$pageParam = ['query'=>[]];

		$user_name = input('user_name');
		$phone = input('phone');

		/*if(!$vip_name && !$vip_cate && !$floor_price && !$ceil_price){
			return db('vip')->paginate(8);
		}*/

		//用户姓名
		if($user_name){
			$searchParam['query']['user_name'] = ['like','%'.$user_name.'%'];
			$pageParam['query']['user_name'] = $user_name;
		}

		//手机号
		if($phone){
			$searchParam['query']['phone'] = ['like',$phone.'%'];
			$pageParam['query']['phone'] = $phone;
		}

		$user_list = db('user')
					->where($searchParam['query'])
					->paginate(8,false,$pageParam);

		return $user_list;
	}
}

?>