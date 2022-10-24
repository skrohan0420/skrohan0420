<?php 

class Admin extends MY_Controller{
	
	// Checks if User is Logged-In
	public function __construct(){
		parent::__construct();
		if (! $this->session->userdata('user_id'))
			return redirect('login');
		
	}


	public function index(){
		if ($this->session->userdata('user_id')){
			return redirect('admin/dashboard');
		}
	}


	public function dashboard(){

		$config = [
			'base_url'=>base_url('admin/dashboard'),
			'per_page'=>3,
			'total_rows'=>$this->articlesmodel->num_rows(),
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






		$articles = $this->articlesmodel->articles_list(
			$config['per_page'],
			$this->uri->segment(3)
		);


		$this->load->view('admin/dashboard',['articles'=>$articles]);
	}





	public function add_article(){
		$this->load->view('admin/add_article');
	}







	public function store_article(){

		$config = [
			'upload_path' => './uploads',
			'allowed_types' => 'jpeg|jpg|gif|png|img'
			
		];

		$this->load->library('upload',$config);

		if($this->form_validation->run('add_article_rules') && $this->upload->do_upload('userfile')){

			$post = $this->input->post();


			// removes btn value form the array 
			unset($post['submit']);

			// all data for files
			$data = $this->upload->data();


			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			// exit;


			// geting img path
			$image_path = base_url("uploads/".$data['raw_name'] . $data['file_ext']);

			$post['image_path'] = $image_path;

			// if articles imserts into database
			if ($this->articlesmodel->add_article($post)) {
				// flash messsege insert sucessfull
				$this->session->set_flashdata('feedback','article added successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				// insert faild
				$this->session->set_flashdata('feedback','failed to add article');
				$this->session->set_flashdata('feedback_class','alert-danger');

			}
			return redirect('admin/dashboard');
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/add_article',compact('upload_error'));
		}
	}










	// Fetch Article for Edit
	public function edit_article($article_id){
		$article = $this->articlesmodel->find_article($article_id);

		$this->load->view('admin/edit_article',['article'=>$article]);

	}










	public function update_article($article_id){
			
		if ($this->form_validation->run('add_article_rules')) {
			
			$post = $this->input->post();
			unset($post['submit']);


			if ($this->articlesmodel->update_article($article_id,$post)) {
				$this->session->set_flashdata('feedback','Article Updated..');
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				$this->session->set_flashdata('feedback','Article Not Updated..');
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('admin/dashboard');
		}else{
			$this->load->view('admin/edit_article');
		}


	}
	public function search(){
		$this->form_validation->set_rules('query','Query','required');

		if(!$this->form_validation->run()){
			$this->index();
		}
		$query = $this->input->post('query');

		$articles = $this->articlesmodel->search_article($query,1,1);

		$this->load->view('admin/search_results',compact('articles'));

	}



	public function delete_article(){
		
		$article_id = $this->input->post('article_id');


		if ($this->articlesmodel->delete_article($article_id,)) {
			$this->session->set_flashdata('feedback','Article Deleted..');
			$this->session->set_flashdata('feedback_class','alert-success');
		}else{
			$this->session->set_flashdata('feedback','Article Not Deleted..');
			$this->session->set_flashdata('feedback_class','alert-danger');
		}
		return redirect('admin/dashboard');


	}



	
}


 ?>