<?php

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class BorrowController extends HomeController {

	//系统首页
    public function index(){
        $this->display();
    }
    public function papersinfo(){
      $this->display();
    }
    public function circulation(){

      $this->display();
    }
    public function circulation_save(){
        //从表单中获取来的数据 
        $uid=is_login(); 
        $m=M("z_borrow_info");
        $data['borrow_name']=$_POST['borrow_name'];
        $data['borrow_money']=$_POST["borrow_money"];
        $data['borrow_interest_rate']=$_POST["borrow_interest_rate"];
        $data['borrow_use']=$_POST["borrow_use"];
        $data['collect_day']=$_POST["collect_day"];
        $data['borrow_min']=$_POST["borrow_min"];
        $data['borrow_max']=$_POST["borrow_max"];
        $data['collect_time']=$_POST["collect_time"];
        $data['repayment_type']=$_POST["repayment_type"];
        $data['reward_vouch_rate']=$_POST["reward_vouch_rate"];
        $data['borrow_info']=$_POST["borrow_info"];
        $data['borrow_uid']=$uid;
        $condition['uid'] =$uid;
        //保存当前数据对象
        if ($m = $m->where($condition)->add($data)) { //保存成功
            //成功提示
            $this->success(L('发布审核已提交'));
        } else {
            //失败提示
            $this->error(L('发布失败'));
        }
    }
     /**
     * 新增页面初始化
     */
    public function circulation_add(){
        $listBorrow = M('z_borrow_info');
        $data['borrow_uid'] = $this->uid;
        $data['borrow_name'] = $_POST['title'];
        $data['borrow_name'] = $_POST['title'];
        $data['borrow_name'] = $_POST['title'];
        $data['borrow_name'] = $_POST['title'];
        $data['borrow_name'] = $_POST['title'];
        // $data['borrow_interest'] = getBorrowInterest($data['repayment_type'],$data['borrow_money'],$data['borrow_duration'],$data['borrow_interest_rate']);
        // $data['borrow_fee'] = getFloatValue($fee_rate*$data['borrow_money'],2);
        $data['borrow_status'] = 0;
        $data['add_time'] = time();
        $data['add_ip'] = get_client_ip();
        $data['total']=($data['repayment_type']==1)?$data['borrow_duration']:"1";
        // $data['content'] = I('post.content');
        // $data['cid'] = I('post.cid');
        // $model_id   =   I('get.model_id');
        // $model      =   M('Model')->field('title,name,field_group')->find($model_id);
        // $this->assign('model',$model);
        // $this->assign('info', array('model_id'=>$model_id));
        // $this->meta_title = '新增属性';
      var_dump($data);


        if ($listBorrow->add($data)) {
                $this->success(L('已提交发布，审核结果请注意查收邮箱!'));
            } else {
                $this->error(L('对不起，提交不成功。'));
            }
    }
    public function detail($id = 0, $p = 1){
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
    //上传
    public function upload(){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    $upload->savePath  =     ''; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{// 上传成功
        $this->success('上传成功！');
    }
}

}