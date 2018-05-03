<?php

/**
* Public Controller
*/
class Users extends MY_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('User_model','umodel');
		
	 	$this->header();

		//$this->footer();
	}
	
	 Public function index(){ 
	 	$data['cover']	= $this->umodel->_cover_query(); 
	 	$data['allData'] = $this->umodel->_index_blog_list(6); 
	 	$data['allCat'] = $this->umodel->m_category_list();
	 	$data['model_obj'] = $this->umodel; 

	 	$this->load->view('photo-master/index',$data); 
	 	$this->footer();
	 }

	 Public function about(){
	 	$data['cover']	= $this->umodel->_cover_query(); 
	 	$data['content'] = $this->umodel->_about_content_query();
	 	$data['clients'] = $this->umodel->_clients_query();
	 	$data['progress'] = $this->umodel->_progress_query();
	 	$this->load->view('photo-master/about',$data);
	 	$this->footer(); 
	 }

	 Public function blog($page=0){
	 	$this->load->library('pagination');
		 $configs = [
		 	'base_url'			=> base_url('users/blog'),
		 	'per_page'			=> 3,
		 	'total_rows'		=> $this->umodel->m_count_rows(),
		 	//'attributes'		=> array('class' => 'page-link'),
		 	'full_tag_open'		=> '<ul class="pagination">',
		 	'full_tag_close'	=> '</ul>',
		 	'next_tag_open'		=> '<li>',
		 	'next_tag_close'	=> '</li>',
		 	'prev_tag_open'		=> '<li>',
		 	'perv_tag_close'	=> '</li>',
		 	'num_tag_open'		=> '<li>',
		 	'num_tag_close'		=> '</li>',
		 	'first_link'		=> FALSE,
		 	'last_link'			=> FALSE,
		 	'cur_tag_open'		=> '<li class="active"><a>',
		 	'cur_tag_close'		=> '</a></li>',
		 ];
		 $this->pagination->initialize($configs); 

	 	$data['allData'] = $this->umodel->m_blog_list($configs['per_page'],$page);
	 	$data['sidebarData'] = $this->umodel->m_side_blog_list();
	 	$data['allCat'] = $this->umodel->m_category_list();
	 	$data['model_obj'] = $this->umodel; 

	 	$this->load->view('photo-master/blog',$data); 
	 	$this->footer();
	 }

	 public function sidebar(){
	 	$data['sidebarData'] = $this->umodel->m_side_blog_list();
	 	$data['allCat'] = $this->umodel->m_category_list();
	 	$data['model_obj'] = $this->umodel;
	 	$this->load->view('photo-master/sidebar',$data);
	 }

	 public function single($post_id){
	 	$data['singleData'] = $this->umodel->m_blog_single($post_id); 
	 	$data['model_obj'] = $this->umodel; 
	 	$this->load->view('photo-master/single_post',$data); 
	 	$this->footer();
	 }

	 Public function contact(){
	 	$data['cover']	= $this->umodel->_cover_query(); 
	 	$this->load->helper('form');
	 	$this->load->view('photo-master/contact',$data);
	 	$this->footer();
	 }

	 public function search(){ 
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$data = $this->input->post('search'); 
		if( $this->form_validation->run('Search_validation') == TRUE ){
			//$this->load->model('articlesmodel');
			//$value['values'] = $this->articlesmodel->search_model($data);
				//$this->load->view('Public/search' ,$value);
			redirect("users/search_with_pagination/$data");
		}else{ 
			//redirect('users/blog'); 
			$this->blog();
		} 

	}

	public function search_with_pagination( $uew ){  
		 $this->load->library('pagination');
		 $configs = [
		 	'base_url'			=> base_url("users/search_with_pagination/$uew"),
		 	'per_page'			=> 3,
		 	'uri_segment'		=> 4,
		 	'total_rows'		=> $this->umodel->m_count_rows_search($uew),
		 	'full_tag_open'		=> '<ul class="pagination">',
		 	'full_tag_close'	=> '</ul>',
		 	'next_tag_open'		=> '<li>',
		 	'next_tag_close'	=> '</li>',
		 	'prev_tag_open'		=> '<li>',
		 	'perv_tag_close'	=> '</li>',
		 	'num_tag_open'		=> '<li>',
		 	'num_tag_close'		=> '</li>',
		 	'first_link'		=> FALSE,
		 	'last_link'			=> FALSE,
		 	'cur_tag_open'		=> '<li class="active"><a>',
		 	'cur_tag_close'		=> '</a></li>',
		 ];
		 $this->pagination->initialize($configs); 

		$data['values'] = $this->umodel->m_search_result($uew,$configs['per_page'],$this->uri->segment(4));
		$data['sidebarData'] = $this->umodel->m_side_blog_list();
	 	$data['allCat'] = $this->umodel->m_category_list();
	 	$data['model_obj'] = $this->umodel;

		$this->load->view('photo-master/blog_search' ,$data);
		//$this->load->view('photo-master/blog',$value); 
		$this->footer();
	}

	public function category($cat_id){

		$this->load->library('pagination');
		 $configs = [
		 	'base_url'			=> base_url("users/category/$cat_id"),
		 	'per_page'			=> 3,
		 	//'uri_segment'		=> 4,
		 	'total_rows'		=> $this->umodel->m_count_rows_cat($cat_id),
		 	'full_tag_open'		=> '<ul class="pagination">',
		 	'full_tag_close'	=> '</ul>',
		 	'next_tag_open'		=> '<li>',
		 	'next_tag_close'	=> '</li>',
		 	'prev_tag_open'		=> '<li>',
		 	'perv_tag_close'	=> '</li>',
		 	'num_tag_open'		=> '<li>',
		 	'num_tag_close'		=> '</li>',
		 	'first_link'		=> FALSE,
		 	'last_link'			=> FALSE,
		 	'cur_tag_open'		=> '<li class="active"><a>',
		 	'cur_tag_close'		=> '</a></li>',
		 ];
		 $this->pagination->initialize($configs);
		$data['values'] = $this->umodel->m_search_cat($cat_id,$configs['per_page'],$this->uri->segment(4));
		$data['sidebarData'] = $this->umodel->m_side_blog_list();
	 	$data['allCat'] = $this->umodel->m_category_list();
	 	$data['model_obj'] = $this->umodel;

		$this->load->view('photo-master/cat_search' ,$data); 
		$this->footer();
	}

	public function main_category($cat_id){

		$this->load->library('pagination');
		 $configs = [
		 	'base_url'			=> base_url("users/main_category/$cat_id"),
		 	'per_page'			=> 9,
		 	//'uri_segment'		=> 4,
		 	'total_rows'		=> $this->umodel->m_count_rows_cat($cat_id),
		 	'full_tag_open'		=> '<ul class="pagination">',
		 	'full_tag_close'	=> '</ul>',
		 	'next_tag_open'		=> '<li>',
		 	'next_tag_close'	=> '</li>',
		 	'prev_tag_open'		=> '<li>',
		 	'perv_tag_close'	=> '</li>',
		 	'num_tag_open'		=> '<li>',
		 	'num_tag_close'		=> '</li>',
		 	'first_link'		=> FALSE,
		 	'last_link'			=> FALSE,
		 	'cur_tag_open'		=> '<li class="active"><a>',
		 	'cur_tag_close'		=> '</a></li>',
		 ];
		 $this->pagination->initialize($configs);
		$data['values'] = $this->umodel->m_search_cat($cat_id,$configs['per_page'],$this->uri->segment(4));
		$data['sidebarData'] = $this->umodel->m_side_blog_list();
	 	$data['allCat'] = $this->umodel->m_category_list();
	 	$data['model_obj'] = $this->umodel;

		$this->load->view('photo-master/cat_index' ,$data); 
		$this->footer();
	}

	public function menus(){
		$items = $this->umodel->_menu_query();
		$this->load->library('multi_menu');
		$url = base_url('users/');
		$config = [
			'nav_tag_open'		=> '<ul class="nav navbar-nav">',
			'nav_tag_close'		=> '</ul>',
			'item_tag_open'		=> '<li class="lien">',
			'item_tag_close'	=> '</li>', 

		]; 
		$this->multi_menu->initialize($config);
 		$this->multi_menu->set_items($items);
 		$nav['menus'] = $this->multi_menu->render();
 		$this->load->view('photo-master/public_header' ,$nav); 
	}
	public function header(){
		$data['navs'] = $this->umodel->_custom_menus();
		$data['logo'] = $this->umodel->_logo_query();
		$this->load->view('photo-master/public_header' ,$data); 
	}

	public function footer(){
		$data['footer'] = $this->umodel->_footer_query();
		$data['social']	= $this->umodel->_social_query();
		$this->load->view('photo-master/public_footer' ,$data);
	}

	public function contact_msg(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div style="color:#f8fc0a;">', '</div>');
		if( $this->form_validation->run('contact_validation') == TRUE){
			$data = $this->input->post(); 
			//$data = unset($data['submit']);  
			$this->_flashandredirect(
	 			$this->umodel->_add_contact_msg($data),
	 			'Message Send Successfully!...',
	 			'Sorry Message Not Send!!...'
	 		);
			 
		}else{
			//$this->load->view('photo-master/contact');
			//echo validation_errors();
			$this->contact();
		}
	}

	public function _flashandredirect($successful,$successMassage,$failerMassage){
	 	if( $successful ){
				$this->session->set_flashdata('feedback_article', $successMassage);
				$this->session->set_flashdata('feedback_article_class','alert alert-dismissible alert-success');
			}else{
				$this->session->set_flashdata('feedback_article', $failerMassage);
				$this->session->set_flashdata('feedback_article_class','alert alert-dismissible alert-secondary');
			}
		 	return redirect('users/contact');
	 }

	public function comments($parent_id = 0){ 
	 		$this->form_validation->set_error_delimiters('<div style="color:#f8fc0a;">', '</div>');
				$data = $this->input->post(); 
				if( $this->form_validation->run('comments_validation') == TRUE){
					 $this->umodel->_comments_insert_child($parent_id,$data);
					 redirect ("users/single/{$data['blog_id']}");
					 //$this->single($data['blog_id']);
				}else{
					redirect ("users/single/{$data['blog_id']}");
					//echo validation_errors();
				}
	}

	public function customPage($page_id=0){
		if($page_id != 0 ){
			$data['page'] = $this->umodel->_page($page_id);
			$this->load->view('photo-master/page',$data);
			$this->footer();
		}else{
			redirect('users/index');
		}
	}

}