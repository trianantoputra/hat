<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('mexican');
	}
	public function output()
	{
		//0,0.5, 0.8, 1, 0.8, 0.5,0
		$this->load->model('M_main');
		$data1 = $this->input->post('vector');
		$data3 = $this->input->post('radius');
		$data4 = $this->input->post('constant');
		$data5 = $this->input->post('tmax');
		//$data1 = explode(",", $data1);
		//$data2 = 

		$data2 = $this->M_main->mexican($data1,$data3,$data4,$data5);
		$data_step = $this->M_main->step_rumus();
		$data_step_value = $this->M_main->step_value();
		$data_step_hasil = $this->M_main->step_hasil();
		$data_step_fungsi = $this->M_main->step_fungsi();
		/*
		echo "<pre>";
		print_r($data2);
		print_r($data_step_value);
		echo "</pre>";
		*/

		$data =  array(
			'data1' => $data1,
			'data2' => $data2,
			'data3' => $data3,
			'data4' => $data4,
			'data5' => $data5,
			'data_step' => $data_step,
			'data_step_value' => $data_step_value,
			'data_step_hasil' => $data_step_hasil,
			'data_step_fungsi' => $data_step_fungsi );
		
		
		$this->load->view('output',$data);
	}
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */