<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {

    public function addUser(){
        $user = M('think_user');
	$data['username'] = 'ThinkPHP';
	$data['email'] = 'ThinkPHP@gmail.com';
	$user->create($data);
	$record = $user->add();
	dump($record);
    }
    
    public function findUser(){
	$user = M('think_user');
	$record = $user->find(93);
	// $record = $user->where('username="ThinkPHP"')->find();
	// $record = $user->where('id=93')->getField('username');
	// $record = $user->getField('email,username');
	// $record = $user->select('1,3,8');
	dump($record);
    }

    public function updateUser(){
	$user = M('think_user');
	//$data['username'] = 'ThinkPHPSave';
	//$data['email'] = 'ThinkPHPSave@outlook.com';
	//$record = $user->where('id=93')->save($data);

	//$user->username = 'ThinkPHP';
	//$user->email = 'ThinkPHP@outlook.com';
	//$record = $user->where('id=93')->save();

	//$record = $user->where('id=93')->setField('username','ThinkPHPChangeName');

	$data = array('username'=>'ThinkPHPChangeArray','email'=>'ThinkPHP@array.com');
	$record = $user->where('id=93')->setField($data);
	dump($record);
    }

    public function deleteUser(){
	$user = M('think_user');
	$record = $user->where('id=3')->delete();
	//$record = $user->delete('1,2,5');
	dump($record);
    }
   
    public function autoComplete(){
	$user = D('User');
	$data['username'] = 'ThinkPHPAutoComplete';
	$data['email'] = 'ThinkPHPAutoComplete@gmail.com';
	$user->create($data);
	$record = $user->add();
	dump($record);
    }

    public function register(){
	$this->display();
    }

    public function registerValidate(){
	$data['username'] = $_POST['username'];
	$data['email'] = $_POST['email'];
	if ($this->checkVerify($_POST['captcha'])) {
	    $user = D("User");
	    if (!$user->create($data)) {
	        $result = 'Register failed';
	    }
	    $result = 'Success';
	} else {
	    $result = 'Enter code not passed! ';
	}
	$this->assign('result', $result);
	$this->display('register');
    }

    public function relationFind(){
	$user = D('User');
	$record = $user->relation(true)->find(93);
	dump($record);
    }

    public function uploadDemo(){
	$this->display();
    }

    public function uploadFile(){
	$upload = new \Think\Upload();
	$upload->maxSize = 3145728;
	$upload->exts = array('jpg','gif','png','jpeg');
	$upload->rootPath = './Uploads/';
	$upload->savePath = 'images/';
	$info = $upload->upload();
	if (!$info) {
	    $this->error($upload->getError());
	} else {
	    $this->success('upload done!');
	}
    }

    public function dealImage(){
	$image = new \Think\Image();
	$image->open('./shiyanlou.png');
	// $crop = $image->crop(400,400)->save('./Uploads/images/crop.png');
	// $thumb = $image->thumb(256,256)->save('./Uploads/images/thumb.png');
	$water = $image->water('./logo.png')->save("./Uploads/images/water_mark.png");
    }

    public function verify(){
	$config = array(
	    'fontSize' => 30,
	    'length' => 5,
	    'useNoise' => true,	
	    'useZh' => false,
	);
	$verify = new \Think\Verify($config);
	$verify->entry();
    }

    public function checkVerify($code,$id=''){
	$verify = new \Think\Verify();
	return $verify->check($code,$id);
    }

}


