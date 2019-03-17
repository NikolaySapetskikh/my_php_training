<?php

class MainController extends AbstractController
{
	public function CallModel(){
		$data = $this->model->getArticlesList();
		$path = realpath(__DIR__ . '/../');
		$this->view->generate($path.'/view/index_view.php', $data);
	}
	
	public function pageNotFound()
	{
		http_response_code(404);
		$this->view->generate($path.'/view/404.php');
	}
}

?>