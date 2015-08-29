<?PHP

class Search extends CI_Model{
	
public function get_categories_search_page(){
	$this->db->select('*');
	$this->db->order_by('name', 'asc');
	$result = $this->db->get('categories')->result_array();
	return $result;
}// ***** End of get_categories_search_page function


public function find($services){
	$this->db->where('categoryone', $services);
	$this->db->or_where('categorytwo', $services);
	$this->db->or_where('categorythree', $services);
	$this->db->order_by('name', 'asc');
	$results = $this->db->get('resources')->result_array();
	return $results;
}// ***** End of find function

public function find_resource($id){
	$this->db->where('id', $id);
	$resource = $this->db->get('resources')->result_array();
	return $resource;
}// ***** End of find_resource function





}// ***** End of Search Model

?>