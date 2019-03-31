<?php

class Model
{
	public $data = array(
				array('id' =>'0',
					  'title_name' =>'Новость №1!',
					  'title_content' =>'Содержание новости №1' ),
				array('id' =>'1',
					  'title_name' =>'Новость №2!',
					  'title_content' =>'Содержание новости №2' ),
				array('id' =>'2',
					  'title_name' =>'Новость №3!',
					  'title_content' =>'Содержание новости №3' ),
				array('id' =>'3',
					  'title_name' =>'Новость №4!',
					  'title_content' =>'Содержание новости №4' ),
				array('id' =>'4',
					  'title_name' =>'Новость №5!',
					  'title_content' =>'Содержание новости №5' ),
	 );

	public function getArticlesList(){	
		$articles_list = array();
		$count = 0;
		foreach ($this -> data as $key) {
			foreach ($key as $key1 => $value) {
				if ($key1 === 'title_name') {
					$articles_list[$count] = $value;
					$count++;
				}
			}
		}
	return $articles_list;	
	}

	public function getArticle($article_id){
		$article_content = array(); 
		foreach ($this -> data as $key) {
			foreach ($key as $key1 => $value) {
				if ($value === $article_id) {
					 $article_content [0]= $key['title_name'];
					 $article_content [1]= $key['title_content'];
					 return $article_content;
				}
			}
		}
	}
}

?>