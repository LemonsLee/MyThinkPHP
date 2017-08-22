<?php

namespace Home\Model;

use Think\Model\RelationModel;

class ArticleModel extends RelationModel {

    protected $tablePrefix = 'think_';

    protected $_auto = array(
	array('created_at','date("Y-m-d H:i:s", time())', 3, 'function'),
	array('updated_at','date("Y-m-d H:i:s", time())', 3, 'function'),
    );

    protected $_link = array(
	'User' => self::BELONGS_TO
    );

}
