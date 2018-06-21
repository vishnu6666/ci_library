<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cpost extends CI_Controller {
	public $menu;
	function __construct() {
      parent::__construct();
		$this->load->library('auth');
		$this->load->library('lpost');
		$this->load->library('session');
		$this->load->model('Posts');
		$this->auth->check_admin_auth();
		$this->template->current_menu = 'post';
	  
    }
	//Default loading for Category system.
	public function index()
	{		
	//Calling Customer add form which will be loaded by help of "lcustomer,located in library folder"
		$content = $this->lpost->post_add_form();
	//Here ,0 means array position 0 will be active class
		$this->template->full_admin_html_view($content);
	}
	//Product Add Form
	public function manage_post()
	{
		$content = $this->lpost->post_list();
		$this->template->full_admin_html_view($content);;
	}
	//Insert Product and upload
	public function insert_post()
	{
		  $recruitment_rules='';
		  $exam_rules='';
		  $notification='';
		  $upload_syllabus='';
		  
		  if (isset($_FILES['recruitment_rules']['name'])) {
			//Chapter chapter add start
			$config['upload_path']          = './my-assets/image/notification/';
	        $config['allowed_types']        = '*';
	        $config['max_size']             = "*";
	        $config['max_width']            = "*";
	        $config['max_height']           = "*";
	        $config['encrypt_name'] 		= TRUE;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('recruitment_rules'))
	        {
	           
	        }
	        else
	        {
	        	$image =$this->upload->data();
	        	$recruitment_rules = base_url()."my-assets/image/notification/".$image['file_name'];
	        }
		}
		
		if ($_FILES['exam_rules']['name']) {
			//Chapter chapter add start
			$config['upload_path']          = './my-assets/image/notification/';
	        $config['allowed_types']        = '*';
	        $config['max_size']             = "*";
	        $config['max_width']            = "*";
	        $config['max_height']           = "*";
	        $config['encrypt_name'] 		= TRUE;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('exam_rules'))
	        {
	           
	        }
	        else
	        {
	        	$image2 =$this->upload->data();
	        	$exam_rules = base_url()."my-assets/image/notification/".$image2['file_name'];
	        }
		}
		
		if ($_FILES['notification']['name']) {
			//Chapter chapter add start
			$config['upload_path']          = './my-assets/image/notification/';
	        $config['allowed_types']        = '*';
	        $config['max_size']             = "*";
	        $config['max_width']            = "*";
	        $config['max_height']           = "*";
	        $config['encrypt_name'] 		= TRUE;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('notification'))
	        {
	           
	        }
	        else
	        {
	        	$image3 =$this->upload->data();
	        	$notification = base_url()."my-assets/image/notification/".$image3['file_name'];
	        }
		}
		
		if ($_FILES['upload_syllabus']['name']) {
			//Chapter chapter add start
			$config['upload_path']          = './my-assets/image/notification/';
	        $config['allowed_types']        = '*';
	        $config['max_size']             = "*";
	        $config['max_width']            = "*";
	        $config['max_height']           = "*";
	        $config['encrypt_name'] 		= TRUE;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('upload_syllabus'))
	        {
	           
	        }
	        else
	        {
	        	$image4 =$this->upload->data();
	        	$upload_syllabus = base_url()."my-assets/image/notification/".$image4['file_name'];
	        }
		}
		  $upcomming_date =  $this->input->post('upcomming_date')." ".$this->input->post('upcomming_date_hh1').":".$this->input->post('upcomming_date_mm1').":".$this->input->post('upcomming_date_ss1');
		  

		  $post_date =  $this->input->post('post_date')." ".$this->input->post('upcomming_date_hh2').":".$this->input->post('upcomming_date_mm2').":".$this->input->post('upcomming_date_ss2');

		  $application_lastdate =  $this->input->post('application_lastdate')." ".$this->input->post('upcomming_date_hh3').":".$this->input->post('upcomming_date_mm3').":".$this->input->post('upcomming_date_ss3');

		  $exam_date =  $this->input->post('exam_date')." ".$this->input->post('upcomming_date_hh4').":".$this->input->post('upcomming_date_mm4').":".$this->input->post('upcomming_date_ss4');

		  $prelim_result_date =  $this->input->post('prelim_result_date')." ".$this->input->post('upcomming_date_hh5').":".$this->input->post('upcomming_date_mm5').":".$this->input->post('upcomming_date_ss5');

		  $mains_result_date =  $this->input->post('mains_result_date')." ".$this->input->post('upcomming_date_hh6').":".$this->input->post('upcomming_date_mm6').":".$this->input->post('upcomming_date_ss6');

		  $compurer_test_date =  $this->input->post('compurer_test_date')." ".$this->input->post('upcomming_date_hh7').":".$this->input->post('upcomming_date_mm7').":".$this->input->post('upcomming_date_ss7');

		  $interview_date =  $this->input->post('interview_date')." ".$this->input->post('upcomming_date_hh8').":".$this->input->post('upcomming_date_mm8').":".$this->input->post('upcomming_date_ss8');

		  $call_letters_date =  $this->input->post('call_letters_date')." ".$this->input->post('upcomming_date_hh9').":".$this->input->post('upcomming_date_mm9').":".$this->input->post('upcomming_date_ss9');

		  $answer_key_date =  $this->input->post('answer_key_date')." ".$this->input->post('upcomming_date_hh0').":".$this->input->post('upcomming_date_mm0').":".$this->input->post('upcomming_date_ss0');

		
          $data=array(			
			'post_name' 					=> $this->input->post('post_name'),
			'upcomming_date' 				=> $upcomming_date,
			'post_date' 					=> $post_date,	
			'application_lastdate' 			=> $application_lastdate,
			'exam_date' 					=> $exam_date,
			'prelim_result_date' 			=> $prelim_result_date,
			'mains_result_date' 			=> $mains_result_date,
			'compurer_test_date' 			=> $compurer_test_date,
			'interview_date' 				=> $interview_date,
			'call_letters_date' 			=> $call_letters_date,
			'call_letters_link' 			=> $this->input->post('call_letters_link'),
			'answer_key_date' 				=> $answer_key_date,
			'answer_key_link' 				=> $this->input->post('answer_key_link'),
			'source_of_opportunities' 		=> $this->input->post('source_of_opportunities'),
			'recruitment_rules' 			=> $recruitment_rules,
			'exam_rules' 					=> $exam_rules,
			'duties' 						=> $this->input->post('duties'),
			'powers' 						=> $this->input->post('powers'),
			'details' 						=> $this->input->post('details'),
			'notification' 					=> $notification,
			'apply_now' 					=> $this->input->post('apply_now'),
			'syllabus' 						=> $this->input->post('syllabus'),
			'upload_syllabus' 				=> $upload_syllabus,
			'previous_papers' 				=> $this->input->post('previous_papers'),
			'model_papers' 					=> $this->input->post('model_papers'),
			'previous_cut_off' 				=> $this->input->post('previous_cut_off'),
			'area_of_focus' 				=> $this->input->post('area_of_focus'),
			'status' 						=> 1,
			'date_added' 					=> date("Y-m-d")
			);
/*
          echo "<pre>";
          print_r($data);
          exit;
*/
		$result=$this->Posts->post_entry($data);
		//Previous balance adding -> Sending to customer model to adjust the data.			
		$this->session->set_userdata(array('message'=>display('successfully_added')));
		if(isset($_POST['add-post'])){
			redirect(base_url('Cpost/manage_post'));
			exit;
		}elseif(isset($_POST['add-post-another'])){
			redirect(base_url('Cpost'));
			exit;
		}
		
	}
	//customer Update Form
	public function post_update_form($post_id)
	{	
		$content = $this->lpost->post_edit_data($post_id);
		$this->menu=array('label'=> 'Edit Nagarikshala', 'url' => 'Cpost');
		$this->template->full_admin_html_view($content);
	}
	// customer Update
	public function post_update()
	{
		$this->load->model('Posts');
		$post_id  = $this->input->post('post_id');
		$recruitment_rules='';
		  $exam_rules='';
		  $notification='';
		  $upload_syllabus='';
		if ($_FILES['recruitment_rules']['name']) {
			//Chapter chapter add start
			$config['upload_path']          = './my-assets/image/notification/';
	        $config['allowed_types']        = '*';
	        $config['max_size']             = "*";
	        $config['max_width']            = "*";
	        $config['max_height']           = "*";
	        $config['encrypt_name'] 		= TRUE;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('recruitment_rules'))
	        {
	           
	        }
	        else
	        {
	        	$image =$this->upload->data();
	        	$recruitment_rules = base_url()."my-assets/image/notification/".$image['file_name'];
	        }
		}
		$old_recruitment_rules = $this->input->post('old_recruitment_rules');
		
		if ($_FILES['exam_rules']['name']) {
			//Chapter chapter add start
			$config['upload_path']          = './my-assets/image/notification/';
	        $config['allowed_types']        = '*';
	        $config['max_size']             = "*";
	        $config['max_width']            = "*";
	        $config['max_height']           = "*";
	        $config['encrypt_name'] 		= TRUE;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('exam_rules'))
	        {
	           
	        }
	        else
	        {
	        	$image2 =$this->upload->data();
	        	$exam_rules = base_url()."my-assets/image/notification/".$image2['file_name'];
	        }
		}
		$old_exam_rules = $this->input->post('old_exam_rules');
		
		if ($_FILES['notification']['name']) {
			//Chapter chapter add start
			$config['upload_path']          = './my-assets/image/notification/';
	        $config['allowed_types']        = '*';
	        $config['max_size']             = "*";
	        $config['max_width']            = "*";
	        $config['max_height']           = "*";
	        $config['encrypt_name'] 		= TRUE;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('notification'))
	        {
	           
	        }
	        else
	        {
	        	$image3 =$this->upload->data();
	        	$notification = base_url()."my-assets/image/notification/".$image3['file_name'];
	        }
		}
		$old_notification = $this->input->post('old_notification');
		if ($_FILES['upload_syllabus']['name']) {
			//Chapter chapter add start
			$config['upload_path']          = './my-assets/image/notification/';
	        $config['allowed_types']        = '*';
	        $config['max_size']             = "*";
	        $config['max_width']            = "*";
	        $config['max_height']           = "*";
	        $config['encrypt_name'] 		= TRUE;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('upload_syllabus'))
	        {
	           
	        }
	        else
	        {
	        	$image4 =$this->upload->data();
	        	$upload_syllabus = base_url()."my-assets/image/notification/".$image4['file_name'];
	        }
		}
		  $old_upload_syllabus = $this->input->post('old_upload_syllabus');
		
 		  $upcomming_date =  $this->input->post('upcomming_date')." ".$this->input->post('upcomming_date_hh1').":".$this->input->post('upcomming_date_mm1').":".$this->input->post('upcomming_date_ss1');
 		  echo $upcomming_date;
 		  exit;
		  

		  $post_date =  $this->input->post('post_date')." ".$this->input->post('upcomming_date_hh2').":".$this->input->post('upcomming_date_mm2').":".$this->input->post('upcomming_date_ss2');

		  $application_lastdate =  $this->input->post('application_lastdate')." ".$this->input->post('upcomming_date_hh3').":".$this->input->post('upcomming_date_mm3').":".$this->input->post('upcomming_date_ss3');

		  $exam_date =  $this->input->post('exam_date')." ".$this->input->post('upcomming_date_hh4').":".$this->input->post('upcomming_date_mm4').":".$this->input->post('upcomming_date_ss4');

		  $prelim_result_date =  $this->input->post('prelim_result_date')." ".$this->input->post('upcomming_date_hh5').":".$this->input->post('upcomming_date_mm5').":".$this->input->post('upcomming_date_ss5');

		  $mains_result_date =  $this->input->post('mains_result_date')." ".$this->input->post('upcomming_date_hh6').":".$this->input->post('upcomming_date_mm6').":".$this->input->post('upcomming_date_ss6');

		  $compurer_test_date =  $this->input->post('compurer_test_date')." ".$this->input->post('upcomming_date_hh7').":".$this->input->post('upcomming_date_mm7').":".$this->input->post('upcomming_date_ss7');

		  $interview_date =  $this->input->post('interview_date')." ".$this->input->post('upcomming_date_hh8').":".$this->input->post('upcomming_date_mm8').":".$this->input->post('upcomming_date_ss8');

		  $call_letters_date =  $this->input->post('call_letters_date')." ".$this->input->post('upcomming_date_hh9').":".$this->input->post('upcomming_date_mm9').":".$this->input->post('upcomming_date_ss9');

		  $answer_key_date =  $this->input->post('answer_key_date')." ".$this->input->post('upcomming_date_hh0').":".$this->input->post('upcomming_date_mm0').":".$this->input->post('upcomming_date_ss0');

		
          $data=array(			
			'post_name' 					=> $this->input->post('post_name'),
			'upcomming_date' 				=> $upcomming_date,
			'post_date' 					=> $post_date,	
			'application_lastdate' 			=> $application_lastdate,
			'exam_date' 					=> $exam_date,
			'prelim_result_date' 			=> $prelim_result_date,
			'mains_result_date' 			=> $mains_result_date,
			'compurer_test_date' 			=> $compurer_test_date,
			'interview_date' 				=> $interview_date,
			'call_letters_date' 			=> $call_letters_date,
			'call_letters_link' 			=> $this->input->post('call_letters_link'),
			'answer_key_date' 				=> $answer_key_date,
			'answer_key_link' 				=> $this->input->post('answer_key_link'),
			'source_of_opportunities' 		=> $this->input->post('source_of_opportunities'),
			'recruitment_rules' 			=> (!empty($recruitment_rules)?$recruitment_rules:$old_recruitment_rules),
			'exam_rules' 					=> (!empty($exam_rules)?$exam_rules:$old_exam_rules),
			'duties' 						=> $this->input->post('duties'),
			'powers' 						=> $this->input->post('powers'),
			'details' 						=> $this->input->post('details'),
			'notification' 					=> (!empty($notification)?$notification:$old_notification),
			'apply_now' 					=> $this->input->post('apply_now'),
			'syllabus' 						=> $this->input->post('syllabus'),
			'upload_syllabus' 				=> (!empty($upload_syllabus)?$upload_syllabus:$old_upload_syllabus),
			'previous_papers' 				=> $this->input->post('previous_papers'),
			'model_papers' 					=> $this->input->post('model_papers'),
			'previous_cut_off' 				=> $this->input->post('previous_cut_off'),
			'area_of_focus' 				=> $this->input->post('area_of_focus'),
			'status' 						=> $this->input->post('status'),
			);

         /* echo "<pre>";
          print_r($data);
          exit;*/

		$this->Posts->update_post($data,$post_id);
		$this->session->set_userdata(array('message'=>display('successfully_updated')));
		redirect(base_url('Cpost/manage_post'));
		exit;
	}
	// product_delete
	public function post_delete()
	{	
		$this->load->model('Posts');
		$post_id =  $_POST['post_id'];
		$this->Posts->delete_post($post_id);
		$this->session->set_userdata(array('message'=>display('successfully_delete')));
		return true;
			
	}
	
}