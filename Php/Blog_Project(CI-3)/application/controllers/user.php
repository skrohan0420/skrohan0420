<?php 

class User extends MY_Controller{
	
	public function index(){

		$config = [
			'base_url'=>base_url('user/index'),
			'per_page'=>3,
			'total_rows'=>$this->articlesmodel->count_all_articles(),
			'full_tag_open'=>'<div class="d-flex justify-content-center"><ul class="pagination pagination-md">',
			'full_tag_close'=>'</ul></div>',
			'first_tag_open'=>'<li class="page-item">',
			'first_tag_close'=>'</li>',
			'last_tag_open'=>'<li class="page-item">',
			'last_tag_close'=>'</li>',
			'next_tag_open'=>'<li class="page-item">',
			'next_tag_close'=>'</li>',
			'prev_tag_open'=>'<li class="page-item">',
			'prev_tag_close'=>'</li>',
			'num_tag_open'=>'<li class="page-item">',
			'num_tag_close'=>'</li>',
			'cur_tag_open'=>'<li class="page-item active"><a class="page-link">',
			'cur_tag_close'=>'</a></li>'
		];

		$this->pagination->initialize($config);

		$articles = $this->articlesmodel->all_articles_list($config['per_page'], $this->uri->segment(3));

		$this->load->view('public/aticles_list',compact('articles'));
	} 





	public function search(){
		$this->form_validation->set_rules('query','Query','required');

		if(!$this->form_validation->run()){
			return $this->index();
		}
		$query = $this->input->post('query');
		return redirect("user/search_results/$query");

		// $articles = $this->articlesmodel->search_article($query);

		// $this->load->view('public/search_results',compact('articles'));

	}

	public function search_results($query){

		$config = [
			'base_url'=>base_url("user/search_results/$query"),
			'per_page'=>2,
			'total_rows'=>$this->articlesmodel->count_search_results($query),
			'full_tag_open'=>'<div class="d-flex justify-content-center"><ul class="pagination pagination-md">',
			'full_tag_close'=>'</ul></div>',
			'first_tag_open'=>'<li class="page-item">',
			'first_tag_close'=>'</li>',
			'last_tag_open'=>'<li class="page-item">',
			'last_tag_close'=>'</li>',
			'next_tag_open'=>'<li class="page-item">',
			'next_tag_close'=>'</li>',
			'prev_tag_open'=>'<li class="page-item">',
			'prev_tag_close'=>'</li>',
			'num_tag_open'=>'<li class="page-item">',
			'num_tag_close'=>'</li>',
			'cur_tag_open'=>'<li class="page-item active"><a class="page-link">',
			'cur_tag_close'=>'</a></li>'
		];

		$this->pagination->initialize($config);

		$articles = $this->articlesmodel->search_article($query,$config['per_page'],$this->uri->segment(4));


		$this->load->view('public/search_results',compact('articles'));

	}




	public function article($id){

		$article = $this->articlesmodel->find($id);
		$this->load->view('public/article_detail',compact('article'));

		// print_r($article);

	}



}


 ?>