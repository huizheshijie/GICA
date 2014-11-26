<?php

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {

	//系统首页
    public function index(){

        $category = D('Category')->getTree();
        $map = array('category_id' => 2);
        $map1 = array('category_id' => 40);
        $lists    = D('Document')->where($map)->lists(null);
        $lists1    = D('Document')->where($map1)->lists(null);
        $lists2    = D('z_borrow_investor')->order('id desc')->select();

        
        //$this->assign('page',D('Document')->page);//分页
        //正在进行的贷款
        //       $searchMap = array();
		// $searchMap['z_borrow_status']=array("in",'2,4,6,7');
		// $searchMap['is_tuijian']=0;
		// $parm=array();
		// $parm['map'] = $searchMap;
		// $parm['limit'] = 10;
		// $parm['orderby']="b.borrow_status ASC,b.id DESC";
		// var_dump($listBorrow);
		// $this->assign("listBorrow",$listBorrow);

		   // $searchMap['z_borrow_status']=array("in",'2,4,6,7');
        //       $listBorrow = M('z_borrow_info')->where($searchMap);
        //       $this->assign("listBorrow",$listBorrow);
        //       var_dump($listBorrow); 
        import('ORG.Util.Page');// 导入分页类
        $listBorrow  = M('z_borrow_info');
        $count      = $listBorrow ->count();
        $Page = new  \Think\Page($count, 8);
        $show       = $Page->show();
        $orderby['id']='desc';
        $list = $listBorrow->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('category',$category);//栏目
        $this->assign('lists',$lists);//列表
        $this->assign('lists1',$lists1);
        $this->assign('lists2',$lists2);
        $this->assign('list2',$list);
        $this->assign('page',$show);
        // $this->assign('page',$listBorrow->page);//分页
         // var_dump($lists2);
        $this->display();
    }


}