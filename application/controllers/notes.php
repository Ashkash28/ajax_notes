<?php
 class Notes extends CI_Controller {

 	public function __construct(){
 		parent::__construct();
 		$this->load->model("Note");
 	}

 	public function index()
 	{
 		$array["notes"] = $this->Note->get_notes();
  		$this->load->view("index.php", $array);
 	}

 	public function create()
 	{
 		// var_dump($this->input->post());
 		// die();
 		$this->Note->create_note($this->input->post());
 		$this->retrieve_partial();
 	}

 	public function update()
 	{
 		$this->Note->update_note($this->input->post());
 		$this->retrieve_partial();
 	}

 	public function delete()
 	{
 		$this->Note->delete_note($this->input->post());
 		$this->retrieve_partial();
 	}

 	private function retrieve_partial()
 	{
 		$array["notes"] = $this->Note->get_notes();
 		$this->load->view('partial_index', $array);
 	}


 	
 }