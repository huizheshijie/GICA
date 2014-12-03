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
        $count      = $listBorrow ->where('borrow_status not in (1,5,3)')->count();
        $Page = new  \Think\Page($count, 8);
        $show       = $Page->show();
        $orderby['id']='desc';
        $list = $listBorrow->where('borrow_status not in (1,5,3)')->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();
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
        is_login() || $this->error('您还没有登录，请先登录！', U('Home/User/login'));
        $uid        =   is_login();//获取当前用户UID

        $listMember = M('member');
        $condition['gica_member.uid'] =$uid;
        $list =$listMember->join('RIGHT JOIN gica_ucenter_member ON gica_member.uid = gica_ucenter_member.id' )->join('RIGHT JOIN gica_z_member_money ON gica_member.uid = gica_z_member_money.uid' )->where($condition)->select();

        // $list2 =$listMember->join('LEFT JOIN gica_z_member_money ON gica_member.uid = gica_z_member_money.uid' )->where($condition)->select();
        
        $this->assign('list', $list);
        $this->assign('list2', $list2);

    //$borrowinfo = M("z_borrow_info bi")->field('bi.*,ac.type_name,ac.type_nid')->join('z_article_category ac on ac.id= bi.danbao')->where('bi.id='.$id)->find();
    // if(!is_array($borrowinfo) || ($borrowinfo['borrow_status']==0 && $this->uid!=$borrowinfo['borrow_uid']) ) $this->error("数据有误");
    $map = array('id' => $id);
    $listBorrow  = M('z_borrow_info');
    $list = $listBorrow->where($map)->select();
    $this->assign('list3',$list);
    var_dump($list);
      $this->display();
    }
    public function add($id= 0){
    $uid  = is_login();//获取当前用户UID
    
    $bid = $id;//投标id赋值
        $listMember = M('member');
        $condition['gica_member.uid'] =$uid ;
        $list =$listMember->join('RIGHT JOIN gica_ucenter_member ON gica_member.uid = gica_ucenter_member.id' )->join('RIGHT JOIN gica_z_member_money ON gica_member.uid = gica_z_member_money.uid' )->where($condition)->select();

        var_dump($list);
        $this->assign('list', $list);
        $this->assign('list2', $list2);

    //$borrowinfo = M("z_borrow_info bi")->field('bi.*,ac.type_name,ac.type_nid')->join('z_article_category ac on ac.id= bi.danbao')->where('bi.id='.$id)->find();
    // if(!is_array($borrowinfo) || ($borrowinfo['borrow_status']==0 && $this->uid!=$borrowinfo['borrow_uid']) ) $this->error("数据有误");
    $map = array('id' => $id);
    $listBorrow  = M('z_borrow_info');
    $list3 = $listBorrow->where($map)->select();

//从表单中获取来的数据 

$capital=$_POST["capital"];
//创建一个表对象，将传来的数据插入到数据库中
$m=M("z_borrow_investor");
$m->investor_capital=$capital;
$m->investor_uid=$uid;
// 判断余额不足
if($list[0]['account_money'] >= $capital ){
if($capital <= 0){// 上传错误提示错误信息

            $this->error('投资金额不能小于1元');
        }
        else{
        	$count=$m->add();
            // $this->success('投资成功！',U('Borrow/detail?id='.$bid));

            $uid=is_login(); 
            $condition1['uid'] =$uid;
            $money=M("z_member_money");
            $money=$money->field('account_money')->where($condition1)->select();//余额查询
            $m1=M("z_member_money");
            $money=intval ($money[0]['account_money'])-intval ($capital);//余额减掉金额
            $data1['account_money']=$money;

             if ($m1 = $m1->where($condition1)->save($data1)) { //保存成功
            //成功提示
            $this->success(L('投资成功。->>>>这不是真实金额'));
            } else {
            //失败提示
            $this->error(L('投资失败，如发现金额已经投出，请及时联系我们处理。'));
            }
     }
    $this->assign('list3',$list3);
    }
else{
    $this->error('抱歉，您余额不足。请充值。');
}
}
}