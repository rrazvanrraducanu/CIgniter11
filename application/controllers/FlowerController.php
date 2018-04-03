<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FlowerController extends CI_Controller {
 
function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('FlowerModel'); // load model
}
 
public function index() {
    $this->load->helper('url');
   $this->data['flowers'] = $this->FlowerModel->getFlowers(); // calling Post model method getPosts()
   $this->load->view('flowers_view', $this->data); // load the view file , we are passing $data array to view file
}
public function view($id=NULL){
    $this->load->helper('url');
    $this->data['flower']=$this->FlowerModel->getFlower($id);
    $this->load->view('single_flower_view',$this->data);
}

}

