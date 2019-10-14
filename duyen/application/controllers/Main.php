<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->search=isset($_GET['search'])?$_GET['search']:FALSE;
		$this->load->model('default/m_product');
	}
	public function index()
	{
		$this->data['banners'] = $this->M_myweb->set_table('home_banner')->sets(array('deleted'=>0,'active'=>1))->gets();
		// $this->data['categories'] = $this->M_myweb->set_table('category')->sets(array('deleted'=>0,'active'=>1,'level'=>0))->gets();
		// $this->data['products'] = $this->M_myweb->set_table('product')->sets(array('deleted'=>0,'active'=>1,'hot'=>1))->gets();
		// $this->data['hotproducts'] = $this->M_myweb->set_table('home_hot_product')->gets()[0];
		// $this->data['com_info'] = $this->M_myweb->set_table('home_info_compa')->gets()[0];
		// $this->data['news_datas'] = $this->M_myweb->set_table('tin_tuc')->sets(array('deleted'=>0,'active'=>1))->set_orderby('ngay_tao','desc')->gets();
		// $this->data['mon_an'] = $this->M_myweb->set_table('mon_an')->set('deleted',0)->set_orderby('date_added','desc')->gets();
		// $this->data['hinh_anh'] = $this->M_myweb->set_table('gallery_detail')->sets(array('deleted'=>0,'active'=>1))->set_orderby('id','desc')->gets();
		$this->data['new_products']=$this->M_myweb->set_table('product')->sets(array('deleted'=>0,'new'=>1))->gets();
		foreach($this->data['new_products'] as $key => $item)
		{
			$category=$this->M_myweb->set_table('category')->sets(array('deleted'=>0,'active'=>1,'id'=>$item->category))->get();
			if(!$category){
				unset($this->data['new_products'][$key]);
			}
			else if(!$this->M_myweb->set_table('category')->sets(array('deleted'=>0,'active'=>1,'id'=>$category->parent_1))->get()){
				unset($this->data['new_products'][$key]);
			}
		}
		$this->data['title']	= "Trang Chủ";
		$this->data['subview'] 	= 'default/index/V_index';
		$this->load->view('default/_main_page',$this->data);
	}

	public function search()
	{
		if($this->search)
		{
			$search=explode(" ",$this->search);
			if(count($search)<2){
				$this->data['title']="Tìm Kiếm";
				$this->data['error']="Vui lòng nhập nhiều hơn 1 từ";
				$this->data['subview'] 	= 'default/search/V_search';
				$this->load->view('default/_main_page',$this->data);
			}
			else{
				$this->data['title']="Tìm Kiếm";
				$this->data['search']=$this->m_nguyenquan->getSearchData($this->search);
				$this->data['subview'] 	= 'default/search/V_search';
				$this->load->view('default/_main_page',$this->data);
			}

		}
		else
		{
			redirect(site_url());
		}
	}

	
}
