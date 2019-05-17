<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	//导航蓝色背景设置
    	$cate=D('cate');
    	$cateid=12;
    	$cateids=$cate->find($cateid);
    	$this->assign('cateids',$cateids);
    	
    	//文章内容循环
    	// $first=D('first');
    	// $firsts=$first->select();
    	// $this->assign('firsts',$firsts);

        //文章分页
        $first=D('first');
        $count=$first->count();// 查询满足要求的总记录数
        $Page=new\Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(2)
        $show=$Page->show();// 分页显示输出
        $list=$first->limit($Page->firstRow.','.$Page->listRows)->select();// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();

    }


    public function article(){
    	//导航蓝色背景设置
    	$cate=D('cate');
    	$cateid=12;
    	$cateids=$cate->find($cateid);
    	$this->assign('cateids',$cateids);

    	//获取文章内容
    	$first=D('first');
    	$firstid=I('id');
    	$firsts=$first->find($firstid);
    	$this->assign('firsts',$firsts);

    	$this->display();
    }
}