<?PHP

class Search extends CI_Model{
	
public function get_categories_search_page(){

	$this->db->select('*');
	$this->db->order_by('name', 'asc');
	$result = $this->db->get('categories')->result_array();
	return $result;

}// ********************************************************************** End of get_categories_search_page function






}// ********************************************************************** End of Search Model

?>