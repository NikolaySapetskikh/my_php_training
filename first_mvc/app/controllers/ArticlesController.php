<?php

class ArticlesController extends AbstractController
{
	public function article($article_id){
		$article_data = $this->model->getArticle($article_id);
		$path = realpath(__DIR__ . '/../');
		$this->view->generate($path.'/view/article_view.php', $article_data);
	}
}

?>