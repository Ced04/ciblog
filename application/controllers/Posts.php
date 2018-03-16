<?php
	/**
	* 
	*/
	class Posts extends CI_Controller{
		public function index(){
			$data['title'] = 'Latest Posts';

			$data['posts'] = $this->post_model->get_posts();

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}


		public function view($id = NULL){
			$data['post'] = $this->post_model->get_posts($id);


			if (empty($data['post'])) {
				show_404();
			}

			$data['title'] = $data['post']['title'];

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}
	}

?>