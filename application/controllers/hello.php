<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {


	public function index()
	{
        $data ['nama']='Jimmi Eduard .s';
		$data ['nim']='201401106';
		$data ['kom']='C';
		$this->load->view('mahasiswa_view',$data);
	}
}