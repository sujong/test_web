<?PHP 
	class Board extends CI_Controller{
		
		function __construct()
	    {       
	        parent::__construct();
			$this->load->model('board/board_model');
	    }
		
		
		function view($id){
			
			$obj['obj'] = $this->board_model->get_item_one($id);
			
			
			$this->load->view('header');
			$this->load->view('board/view', $obj);
			$this->load->view('footer');
		}
		
		//작성하기 
		function write(){
			
			$this->load->view('header');
			
			
			$this->load->library('form_validation');
				
			$this->form_validation->set_rules('NAME', '네임', 'required');
			$this->form_validation->set_rules('SUBJECT', '제목', 'required');
			$this->form_validation->set_rules('CONTENTS', '본문', 'required');	
				
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('board/write');
			}
			else
			{
				$itemList = array('NAME' =>  $this->input->post('NAME'),
							'SUBJECT'=> $this->input->post('SUBJECT'),
							'CONTENTS' =>  $this->input->post('CONTENTS'),
							);
				
				$this->board_model->insert_data($itemList);
				
				$this->load->helper('url');
           	    redirect('/board/b_list');
				
			}
			
			
			
			$this->load->view('footer');
			
		}
		
		function b_list(){
			
			$obj = $this->board_model->get_list();
			
			$this->load->view('header');
			$this->load->view('board/list', array('item'=>$obj));
			$this->load->view('footer');
		}
		
	}
?>