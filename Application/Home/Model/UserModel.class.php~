<?php

namespace Home\Model;

use Think\Model\RelationModel;

class UserModel extends RelationModel {

    protected $tablePrefix = 'think_';

    protected $_auto = array(
	array('created_at','date("Y-m-d H:i:s", time())', 3, 'function'),
	array('updated_at','date("Y-m-d H:i:s", time())', 3, 'function'),
    );

    protected $_link = array(
	'Article' => self::HAS_MANY,
	'class_name' => 'Article',
	'foreign_key' => 'user_id',
    );

}
