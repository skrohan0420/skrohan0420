<?php 


class Articlesmodel extends CI_Model{

	public function articles_list($limit,$offset){
		$user_id = $this->session->userdata('user_id');



		$q = $this->db->select(['title','id'])->from('articles')->where('user_id',$user_id)->limit($limit,$offset)->get();


		return $q->result();
	}



	public function all_articles_list($limit,$offset){

		$q = $this->db->select()->from('articles')->limit($limit,$offset)->order_by('created_at','DESC')->get();


		return $q->result();
	}
 




	public function add_article($arr){
		return $this->db->insert('articles',$arr);
	}





	public function find_article($article_id){

	 	$q = $this->db->select(['id','title','body'])->where('id',$article_id)->get('articles');

	 	return $q->row();

	}


	public function update_article($article_id, array $article){

		return $this->db->update('articles',$article,['id'=>$article_id]);



	}



	public function delete_article($article_id){

		return $this->db->delete('articles',['id'=>$article_id]);

	}



	public function search_article($query, $limit, $offset){
		$q = $this->db->from('articles')->limit($limit,$offset)->like('title',$query)->get();
		return $q->result();
	}

	public function count_search_results($query){
		$q = $this->db->from('articles')->like('title',$query)->get();
		return $q->num_rows();
	}





	public function count_all_articles(){


		$q = $this->db->select(['title','id'])->from('articles')->get();

		return $q->num_rows();


	}









	public function num_rows(){
		$user_id = $this->session->userdata('user_id');

		$q = $this->db->select(['title','id'])->from('articles')->where('user_id',$user_id)->get();


		return $q->num_rows();
	}


	public function find($id){
		$q = $this->db->from('articles')->where(['id' => $id])->get();

		if($q->num_rows()) {
			return $q->row();
		}else{
			return false;
		}


	}


}

 ?>