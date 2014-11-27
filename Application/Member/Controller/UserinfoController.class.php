<?php
namespace Member\Controller;
use OT\DataDictionary;
use Think\Controller;
class UserinfoController extends MemberController {
    public function index(){
    	
        
    $this->display();
    }
        public function bevip(){
            
    	
        
    $this->display();
    }
        public function userapplyforvip(){
    	
        
    $this->display();
    }
        public function userbankInfo(){
    	
        
    $this->display();
    }
        public function userbankset(){
    	
        
    $this->display();
    }
        public function userbasicdata(){
    	
        
    $this->display();
    }
        public function userbasicinfo(){
    	
        
    $this->display();
    }
        public function userchagerwithdraw(){
    	
        
    $this->display();
    }
        public function userchangebankInfo(){
    	
        
    $this->display();
    }
        public function userchangepass(){
    	
        
    $this->display();
    }
        public function userchangephone(){
    	
        
    $this->display();
    }
        public function userfinanceindex(){
    	
        
    $this->display();
    }
        public function userfindpass(){
    	
        
    $this->display();
    }
        public function userfindpassbyphone(){
    	
        
    $this->display();
    }
        public function userfindpaypass(){
    	
        
    $this->display();
    }
        public function userinfoinformset(){
    	
        
    $this->display();
    }
        public function userinfowork(){
    	
        
    $this->display();
    }
        public function usermailbanding(){
    	
        
    $this->display();
    }
        public function userpapersinfo(){
    	
        
    $this->display();
    }
        public function userrenewalvip(){
    	
        
    $this->display();
    }
        public function userreplaymail(){
    	
        
    $this->display();
    }
        public function userreport(){
    	
        
    $this->display();
    }
        public function userricelist(){
    	
        
    $this->display();
    }
        public function userselfidcard(){
    	
        
    $this->display();
    }
    public function userselfset(){


    	
        
    $this->display();
    }
    public function add(){
                    //从表单中获取来的数据 
        $uid=is_login();
// $real_name=$_POST["real_name"];
// $idcard=$_POST["idcard"];
// $sex=$_POST["sex"];
// $zy=$_POST["zy"];
// $cell_phone=$_POST["cell_phone"];
// $education=$_POST["education"];
// $income=$_POST["income"];
// $address=$_POST["address"];
// //创建一个表对象，将传来的数据插入到数据库中

// $m->uid=$uid;
// $m->real_name=$real_name;
// $m->idcard=$idcard;
// $m->sex=$sex;
// $m->zy=$zy;
// $m->cell_phone=$cell_phone;
// $m->education=$education;
// $m->income=$income;
// $m->address=$address;
// $count=$m->add();
// $this->success('保持成功');
        // if(is_login()){

        // } else {

        // }    
        $m=M("z_member_info");
        $data['real_name']=$_POST["real_name"];
        $data['idcard']=$_POST["idcard"];
        $data['sex']=$_POST["sex"];
        $data['zy']=$_POST["zy"];
        $data['cell_phone']=$_POST["cell_phone"];
        $data['education']=$_POST["education"];
        $data['income']=$_POST["income"];
        $data['address']=$_POST["address"];
        $condition['uid'] =$uid;
        //保存当前数据对象
        if ($m = $m->where($condition)->save($data)) { //保存成功
            //成功提示
            $this->success(L('保存成功'));
        } else {
            //失败提示
            $this->error(L('保存失败'));
        }

    }
        public function userselfset_2(){
    	
        
    $this->display();
    }
        public function userselfsetok(){
    	
        
    $this->display();
    }
        public function usertrustlevel(){
    	
        
    $this->display();
    }
        public function userwithdrawindex(){
    	
        
    $this->display();
    }
        public function userwithdrawrice(){
    	
        
    $this->display();
    }
}