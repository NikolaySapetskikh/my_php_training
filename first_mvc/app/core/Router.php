<?php

class Router{
	
	static function start(){

		$page = filter_input(INPUT_GET, 'page');

		if ($page === NULL || $page === 'index') {
			$controller = new MainController();
			$controller->CallModel();
		}
		elseif ($page === 'article') {
			$controller = new ArticlesController();
			$controller->article(filter_input(INPUT_GET, 'article_id'));
		}else{
			$controller = new MainController();
			$controller->pageNotFound();
		}
	}
}

?>