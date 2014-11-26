<?php

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class FinanceController extends HomeController {

	//系统首页
    public function index(){
        import('ORG.Util.Page');// 导入分页类
    	$listBorrow  = M('z_borrow_info');
        $count      = $listBorrow ->count();
        $Page = new  \Think\Page($count, 8);
        $show       = $Page->show();
        $orderby['id']='desc';
        $list = $listBorrow->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list2',$list);
        $this->assign('page',$show);
      $this->display();
    }
    public function papersinfo(){
      $this->display();

    }
    public function tranferdetail(){
      $this->display();

    }
    public function invest($id = 0, $p = 1){
    /* 标识正确性检测 */
    if(!($id && is_numeric($id))){
      $this->error('投标ID错误！');
    }

    /* 页码检测 */
    $p = intval($p);
    $p = empty($p) ? 1 : $p;

    //$borrowinfo = M("z_borrow_info bi")->field('bi.*,ac.type_name,ac.type_nid')->join('z_article_category ac on ac.id= bi.danbao')->where('bi.id='.$id)->find();
    // if(!is_array($borrowinfo) || ($borrowinfo['borrow_status']==0 && $this->uid!=$borrowinfo['borrow_uid']) ) $this->error("数据有误");
    $map = array('id' => $id);
    $listBorrow  = M('z_borrow_info');
    $list = $listBorrow->where($map)->select();
    $this->assign('list3',$list);
    var_dump($list);
      $this->display();

    }

}