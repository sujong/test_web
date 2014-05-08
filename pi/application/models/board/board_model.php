<?PHP

	class Board_model extends CI_Model{
		
		function __construct()
	    {       
	        parent::__construct();
	    }
		
		function get_list(){
			$query_strings = '';
			$query_strings .= "SELECT * FROM BOARD  ";
			$query_strings .= " ORDER BY ID DESC ";
			return $this->db->query($query_strings)->result();
		}
		
		
		
		function get_item_one($id){
			$query_strings = '';
			$query_strings .= "SELECT * FROM BOARD  ";
			$query_strings .= " WHERE ID = ".$id;
			return $this->db->query($query_strings)->row();
		}
		
		
		function insert_data($itemList){
			
			$this->db->set($itemList);
			$this->db->set('REG_DT', 'NOW()', false);
			$this->db->insert('BOARD');
			
			return $this->db->insert_id();
			
		}
	}
?>