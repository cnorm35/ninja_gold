<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	public function index()
	{
		$this->load->view('gold_view');
	}

	public function gold()
	{

		if(!$this->session->userdata('activities'))
		{
			$this->session->set_userdata('activities', array());
		}
		$temp = $this->session->userdata('activities');
		// $this->session->set_userdata($activity_log);

		if($this->input->post('farm'))
		{
			$current_gold = $this->session->userdata('gold');
			$value = rand(10,20);
			$this->session->set_userdata('gold', ($value + $current_gold));
			$temp[] = "Earned " . $value . " gold from the farm " . date('F jS, Y g:i a');
		}

		if($this->input->post('cave'))
		{
			$current_gold = $this->session->userdata('gold');
			$value = rand(5,10);
			$this->session->set_userdata('gold', ($value + $current_gold));
			$this->session->set_userdata('gold', ($value + $current_gold));
			$temp[] = "Earned " . $value . " gold from the cave " . date('F jS, Y g:i a');
		}

		if($this->input->post('house'))
		{
			$current_gold = $this->session->userdata('gold');
			$value = rand(10,20);
			$this->session->set_userdata('gold', ($value + $current_gold));
			$temp[] = "Earned " . $value . " gold from the house " . date('F jS, Y g:i a');
		}

		if($this->input->post('casino'))
		{
			$chance = rand(0,1);
			if($chance)
			{
				$current_gold = $this->session->userdata('gold');
				$value = rand(0,50);
				$this->session->set_userdata('gold', ($current_gold + $value));
				$this->session->set_userdata('gold', ($value + $current_gold));
				$temp[] = "Earned " . $value . " gold from the casino " . date('F jS, Y g:i a');
			}
			else
			{
				$current_gold = $this->session->userdata('gold');
				$value = rand(0,50);
				$this->session->set_userdata('gold', ($current_gold - $value));
				$this->session->set_userdata('gold', ($value + $current_gold));
				$temp[] = "Lost " . $value . " gold from the casino " . date('F jS, Y g:i a');
			}


		}


		$this->session->set_userdata('activities', $temp);
		$this->load->view('gold_view');
	}

	public function reset()
	{
		$this->session->set_userdata('gold', 0);
		$this->session->set_userdata('activities', array());
		$this->load->view('gold_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */