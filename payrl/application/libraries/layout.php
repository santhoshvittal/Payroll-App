<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layout {

	
   public function __construct()
    {
       $this->obj =& get_instance();
       
    }


   public function view($view, $data=null, $return=false){
   	  $output = null;	
   	  $this->obj->load->view('include/header');	
   	  if($this->obj->session->userdata('logged_in'))
   	  {
   	  	
   	  	$this->obj->load->view('include/navigation');
   	  }
   	  
      if($return):

         $output = $this->obj->load->view('templates/'.$view,$data, $return);
      else:

         $this->obj->load->view('templates/'.$view,$data, $return);

      endif;

      $this->obj->load->view('include/footer');
      return $output;
   }
   
}
?>
