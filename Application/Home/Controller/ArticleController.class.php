<?php
namespace Home\Controller;

use Think\Controller;

class ArticleController extends Controller {

    public function addArticle(){
        $article = M('think_article');
	$data['title'] = 'relation';
	$data['body'] = 'Test article connect to user 93';
	$data['user_id'] = 93;
	$article->create($data);
	$record = $article->add();
	dump($record);
    }
    
}
