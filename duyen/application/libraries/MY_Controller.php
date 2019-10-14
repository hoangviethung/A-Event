<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    public $data = array();
	public function __construct() {
		parent::__construct();
		$this->load->helper('obisys');
        $this->load->model('M_myweb');
        $this->load->model('default/M_nguyenquan',"m_nguyenquan");
        //$this->data['company_info'] = $this->m_nguyenquan->getCompanyInfo();
        $this->data['categories'] = $this->M_myweb->set_table('category')->sets(array('deleted'=>0,'active'=>1))->set_orderby('id')->gets();
        $products=array();
		if(isset($_SESSION['cart'])){
			foreach($_SESSION['cart'] as $item)
			{
				if(isset($item['id']))
				{
					$products[$item['id']]=$this->M_myweb->set_table('product')->sets(array('id'=>$item['id'],'deleted'=>0))->get();
					$products[$item['id']]->cart=$_SESSION['cart'][$item['id']];
				}

			}
		}
		if(!empty($products))
		{
			$this->data['cart_products']=$products;
		}
    }
}