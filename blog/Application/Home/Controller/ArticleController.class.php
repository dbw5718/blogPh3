<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function index(){
    	$cate=D('cate');
    	$cateid=11;
    	$cateids=$cate->find($cateid);
    	$this->assign('cateids',$cateids);
    	$this->display();
        $this->display();
    }
}