<?php
class cos extends CI_Controller
{
    function __construct()
    {
    parent::__construct();
    $this->load->helper(array('url','form'));
    }

    public function index()
    {
      $data['x1']=(int)$this->input->post('x1',true);
      $data['result']=cos($data['x1']);
      $this->load->view('kelompok9/vcos',$data);
   }
}
