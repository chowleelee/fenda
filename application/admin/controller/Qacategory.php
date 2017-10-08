<?php
namespace app\admin\controller;

class Qacategory extends \think\Controller
{
    public function index()
    {
    	$qacate_list = db('quickask_cate')
    				->paginate(8);
    	$this->assign('qacate_list',$qacate_list);
        return $this->fetch();
    }

    public function delete()
    {
    	db('quickask_cate')->delete(input());
    	
        $this->success('删除成功','index');
    }

    public function add()
    {
        return $this->fetch();
    }

    public function edit()
    {   
        $qacate_info = db('quickask_cate')->find(input());
        $this->assign('qacate_info',$qacate_info);

        return $this->fetch();
    }

    public function update()
    {
       db("quickask_cate")->update(input());
       $this->success('更新成功','index');
    }    

    public function save()
    {
        db("quickask_cate")->insert(input());
        $this->success('添加成功', 'index');
    }
}
