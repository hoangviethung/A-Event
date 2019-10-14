<?php 

class M_product extends M_myweb
{
	private $where;
    private $order;
    private $by;
	private $limit;
	private $offset;
	private $page;
	//lay danh sach tat ca product
	public function __construct() {
		parent::__construct();
		//$this->table = 'member';
		if (!isset($this->where )) 
		   $this->where = array();
		if(!isset($order_by)){
			$this->order_by=array();
		}
		if (!isset($this->page)){
		$this->page = 1;}
		if (!isset($this->limit)){
		$this->limit = 1;}
		$this->order=false;
		$this->by=false;
		$this->whereIn=false;
	}
	public function getProducts()
	{
		if($this->page<=1){
            $this->offset=0;
        }else{
            $this->offset = ($this->page-1) * $this->limit;
        }
		$this->db->select("	product.*,
							category.id as `category_id`,
							category.name as `category_name`,
							category.slug as `category_slug`,
							category.parent_1");
		$this->db->where('product.deleted',0);
		$this->db->where('category.active',1);
		if($this->where)
		{
			$this->db->where($this->where);
		}
		if($this->whereIn)
		{
			foreach($this->whereIn as $item)
			{
				$this->db->where_in($item['where'],$item['value']);
			}

		}
		if($this->by)
		{
			$this->db->order_by($this->by,$this->order);
		}
		$this->db->join('category','category.id = product.category');
		if(isset($this->where['product.id'])||isset($this->where['product.slug']))
		{
			$result= $this->db->get('product')->row();
			if($this->getCategoryParent($result->parent_1))
			{
				return $result;
			}else{
				return false;
			}
		}else{
			$result= $this->db->get('product',$this->limit,$this->offset)->result();
			foreach($result as $key => $item)
			{
				if(!$this->getCategoryParent($item->parent_1))
				{
					unset($result[$key]);
				}
			}
			return $result;
		}
	}
	public function getTotalProduct()
	{
		$this->db->select("	product.*,
							category.id as `category_id`,
							category.name as `category_name`,
							category.slug as `category_slug`");
		$this->db->where('product.deleted',0);
		if($this->where)
		{
			$this->db->where($this->where);
		}
		if($this->by)
		{
			$this->db->order_by($this->by,$this->order);
		}
		$this->db->join('category','category.id = product.category');
		return $this->db->count_all_results('product');
	}
	public function setWhere($where,$value)
	{
		$this->where[$where] = $value;
	}
	public function setWhereIn($where,$value)
	{
			$this->whereIn[$where]['where'] = $where;
			$this->whereIn[$where]['value'][]=$value;
	}
    public function setOrderBy($order,$by)
	{
        $this->order    =   $order;
        $this->by       =   $by;
    }

	public function setPage($page)
	{
		$this->page = $page;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
	}
	public function getCategoryParent($category_id)
	{
		$arr= array();
        $this->db->where('active',1);
        $this->db->where('deleted',0);
        $this->db->where('id',$category_id);
        $query=$this->db->get('category');
        foreach($query->result() as $row)
        {
            $arr[]=$row;
        }
        if(!empty($arr)){
            return $arr;
        }
        return False;
	}
}

?>