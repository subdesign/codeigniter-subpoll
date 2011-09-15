<?php if( ! defined('BASEPATH')) exit ('No direct script access allowed');

/**
 *	Example controller for SubPoll library
 *
 */
class SubPoll extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('poll');
	}
	
	public function index()
	{
		$this->poll_item();
	}
	
	/**
	 *	Shows the actual poll and processes the posted vote
	 *  If a user has already voted, error message will be shown
	 *
	 */
	public function poll_item()
	{
		if($this->input->post('submit'))
		{
			if($this->session->userdata('voted') != 'true')
			{
				$this->poll->set_poll($this->input->post('answer'));
				redirect('subpoll/poll_result');
			}
			else
			{
				$this->session->set_flashdata('message', 'You have already voted on this poll!');
				redirect('subpoll');
			}			
		}
		else
		{
			$data['poll'] = $this->poll->get_poll();
			$this->load->vars($data);
			$this->load->view('poll_item');		
		}
	}
	
	/**
	 *	Shows the actual poll's results	
	 *
	 */
	public function poll_result()
	{
		$data['poll'] = $this->poll->get_result();
		$this->load->vars($data);
		$this->load->view('poll_result');		
	}
	
	/**
	 *	Polls management
	 *
	 */
	public function admin_polls()
	{
		$data['polls'] = $this->poll->get_all_polls();
		$this->load->view('poll_admin', $data);
	}
	
	/**
	 *	Add new poll
	 *
	 */
	public function add_new_poll()
	{
		if($this->input->post('submit'))
		{
			$this->load->library('form_validation');
			$val = $this->form_validation;
			$val->set_rules('poll', 'Poll Question', 'required|trim');
			foreach($this->input->post() as $key => $value)
			{
				if(substr($key, 0, 6) == 'answer')
				{
					$val->set_rules('answer'.substr($key, 6), 'Answer '.substr($key, 6), 'required|trim');
					$data['answers'][substr($key, 6)] = $value;
				}
			}
			if($val->run())
			{
				$data['question'] = $val->set_value('poll');
				$this->poll->save_new_poll($data);
				redirect('subpoll/admin_polls');
			}
		}
		$this->load->view('poll_new');
	}
	
	/**
	 *	Set poll status
	 *  @param integer $id
	 *
	 */
	public function set_poll_status($id)
	{
		$this->poll->set_poll_status($id);
		redirect('subpoll/admin_polls');
	}
	
    /**
	 *	Reset poll values
	 *  @param integer $id
	 *
	 */
	public function reset_poll($id)
	{
		$this->poll->reset_poll($id);
		redirect('subpoll/admin_polls');	
	}
}