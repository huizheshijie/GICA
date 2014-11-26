<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2013 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi.cn@gmail.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------
namespace OT\TagLib;
use Think\Template\TagLib;
/**
 * 文档模型标签库
 */
class Hzsj extends TagLib{
    /**
     * 定义标签列表
     * @var array
     */
    protected $tags   =  array(
        // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
        'listBorrow' => array('attr' => 'id,field,page,name', 'close' => 1), //段落列表
    );

    public function _listBorrow($tag,$content) {
        

        /* 进行标的查询 */
        $listBorrow   = D('z_borrow_info');
        if(false === $listBorrow){
            $this->error('获取列表数据失败！');
        }
        $this->assign('lists',$listBorrow);//列表
        $this->assign('page',D('z_borrow_info')->page);//分页

        $this->display();
        return $parse;

    }
}