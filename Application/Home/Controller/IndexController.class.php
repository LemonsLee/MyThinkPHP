<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index(){
        $user = D('User');
	$userInfo = $user->find(2);	
	$this->assign('user',$userInfo);

	$list = $user->limit(10)->select();
	$this->assign('list', $list);
	$this->display();
    }
    
   

}
