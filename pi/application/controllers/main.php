<?PHP

class Main extends CI_Controller {

	public function __construct()
       {
            parent::__construct();
            // 생성자 코드에 기능추가
       }
	public function index()
	{
		$query_strings = '';
		$query_strings = "SELECT * FROM BOARD ORDER BY ID DESC LIMIT 0, 5 ";
		
		$data['query'] = $this->db->query($query_strings);

 		$this->load->view('header');
		$this->load->view('main', $data);
		$this->load->view('footer');
	}
}
?>