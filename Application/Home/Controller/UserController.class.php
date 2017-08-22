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
	$this->display('register');
    }

    public function registerValidate(){
	$data['username'] = $_POST['username'];
	$data['email'] = $_POST['email'];
	$user = D("User");
	if (!$user->create($data)) {
	    exit($user->getError());
	}
	echo 'validation passes';
    }

    public function relationFind(){
	$user = D('User');
	$record = $user->relation(true)->find(93);
	dump($record);
    }
}
