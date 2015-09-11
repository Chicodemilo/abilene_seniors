<?php 

/**
This is for getting Blog posts 
*/
class Blog_model extends CI_Model
{
	
	function get_all_blog($year)
	{
		$s_month = 1;
		$s_day = 1;
		$f_month = 12;
		$f_day = 31;
		$this->db->where('date >=', date('Y-m-d', mktime(0,0,0,$s_month,$s_day,$year)));
		$this->db->where('date <=', date('Y-m-d', mktime(0,0,0,$f_month,$f_day,$year)));
		// $this->db->select('*');
		$this->db->order_by('date', 'desc');
		$results = $this->db->get('blog')->result_array();
		return $results;
		
		
	}

	function get_one_post($id)
	{
		$this->db->where('id', $id);
		$blog = $this->db->get('blog')->result_array();
		return $blog;
	}


	function get_years(){
		$this->db->select('*');
		$blog = $this->db->get('blog')->result_array();
		$years = array();
		foreach ($blog as $value) {
			$date = new DateTime($value['date']);
        	$year = date_format($date, 'Y');
			array_push($years, $year);
		}
		$years = array_unique($years);
		return $years;
	}
}


?>