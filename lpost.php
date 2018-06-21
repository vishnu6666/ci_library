<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lpost {
	//Retrieve  Customer List	
	public function post_list()
	{
		$CI =& get_instance();
		$CI->load->model('Posts');
        
		$post_list = $CI->Posts->post_list();  //It will get only Credit Customers
		
		$i=0;
		$total=0;
		if(!empty($post_list)){	
			foreach($post_list as $k=>$v){$i++;
			   $post_list[$k]['sl']=$i;
			   if($post_list[$k]['status'] == 1){
					$post_list[$k]['status']='Active';
               }else{ 				   
			        $post_list[$k]['status']='InActive';
			   }	
			}
		}              
		$data = array(
				'title' => display('post_list'),
				'post_list' => $post_list,
                               			
			);
		$customerList = $CI->parser->parse('post/post',$data,true);
		return $customerList;
	}
	//Sub Category Add
	public function post_add_form()
	{
		$CI =& get_instance();
		$CI->load->model('Posts');
		$data = array(
				'title' => display('add_post')
				
			);
		
		$customerForm = $CI->parser->parse('post/add_post_form',$data,true);
		
		return $customerForm;
	}

	//customer Edit Data
	public function post_edit_data($post_id)
	{
		$CI =& get_instance();
		$CI->load->model('Posts');
		$post_detail = $CI->Posts->retrieve_post_editdata($post_id);

		$upcomming_date = explode(" ",$post_detail[0]['upcomming_date']);
        $udate = $upcomming_date[0];
        $utime = $upcomming_date[1];
		$upcomming_time = explode(":",$utime);


		$post_date = explode(" ",$post_detail[0]['post_date']);
        $p_date = $post_date[0];
        $post_time = $post_date[1];
		$post_date_time = explode(":",$post_time);


		$application_lastdate = explode(" ",$post_detail[0]['application_lastdate']);
        $a_lastdate = $application_lastdate[0];
        $a_lasttime = $application_lastdate[1];
		$application_last_time = explode(":",$a_lasttime);


		$exam_date = explode(" ",$post_detail[0]['exam_date']);
        $e_date = $exam_date[0];
        $e_time = $exam_date[1];
		$exam_time = explode(":",$e_time);


		$prelim_result_date = explode(" ",$post_detail[0]['prelim_result_date']);
        $p_date = $prelim_result_date[0];
        $p_time = $prelim_result_date[1];
		$prelim_result_time = explode(":",$p_time);


		$mains_result_date = explode(" ",$post_detail[0]['mains_result_date']);
        $m_date = $mains_result_date[0];
        $m_time = $mains_result_date[1];
		$main_result_time = explode(":",$m_time);


		$compurer_test_date = explode(" ",$post_detail[0]['compurer_test_date']);
        $c_date = $compurer_test_date[0];
        $c_time = $compurer_test_date[1];
		$computer_test_time = explode(":",$c_time);


		$interview_date = explode(" ",$post_detail[0]['interview_date']);
        $i_date = $interview_date[0];
        $i_time = $interview_date[1];
		$interview_time = explode(":",$i_time);


		$call_letters_date = explode(" ",$post_detail[0]['call_letters_date']);
        $co_date = $call_letters_date[0];
        $co_time = $call_letters_date[1];
		$call_letters_time = explode(":",$co_time);


		$answer_key_date = explode(" ",$post_detail[0]['answer_key_date']);
        $ans_date = $answer_key_date[0];
        $ans_time = $answer_key_date[1];
		$answer_key_time = explode(":",$ans_time);




		/*print_r($answer_key_date);
		print_r($answer_key_time) ;exit;
		//echo $upcomming_date;
		exit;*/

		
		$data=array(
			'id' 					=> $post_detail[0]['id'],
			'post_name' 			=> $post_detail[0]['post_name'],

			'upcomming_date'		=> $upcomming_date[0],
			'upcomming_time'		=> $upcomming_time,

			'post_date' 			=> $post_date[0],
			'post_date_time'		=> $post_date_time,
			
			'application_lastdate' 	=> $application_lastdate[0],
			'application_last_time' => $application_last_time,

			'exam_date' 			=> $exam_date[0],
			'exam_time'				=> $exam_time,

			'prelim_result_date' 			=> $prelim_result_date[0],
			'prelim_result_time'    		=> $prelim_result_time ,

			'mains_result_date' 			=> $mains_result_date[0],
			'main_result_time' 				=>$main_result_time,

			'compurer_test_date' 			=> $compurer_test_date[0],
			'computer_test_time'  			=> $computer_test_time,

			'interview_date' 				=> $interview_date[0],
			'interview_time' 				=> $interview_time,

			'call_letters_date' 			=> $call_letters_date[0],
			'call_letters_time' 			=> $call_letters_time,
			'call_letters_link' 			=>$post_detail[0]['call_letters_link'],

			'answer_key_date' 				=> $answer_key_date[0],
			'answer_key_time' 				=> $answer_key_time,
			'answer_key_link' 				=> $post_detail[0]['answer_key_link'],

			'source_of_opportunities' 		=> $post_detail[0]['source_of_opportunities'],
			'recruitment_rules' 	=> $post_detail[0]['recruitment_rules'],
			'exam_rules' 			=> $post_detail[0]['exam_rules'],
			'duties' 				=> $post_detail[0]['duties'],
			'powers' 				=> $post_detail[0]['powers'],
			'details' 				=> $post_detail[0]['details'],
			'notification' 			=> $post_detail[0]['notification'],			
			'apply_now' 			=> $post_detail[0]['apply_now'],
			'syllabus' 				=> $post_detail[0]['syllabus'],
			'upload_syllabus' 		=> $post_detail[0]['upload_syllabus'],
			'previous_papers' 		=> $post_detail[0]['previous_papers'],
			'model_papers' 			=> $post_detail[0]['model_papers'],
			'previous_cut_off' 		=> $post_detail[0]['previous_cut_off'],
			'area_of_focus' 		=> $post_detail[0]['area_of_focus'],			
			'status' 				=> $post_detail[0]['status']
			);
		/*echo "<pre>";
		print_r($data);
		exit;*/
		$chapterList = $CI->parser->parse('post/edit_post_form',$data,true);
		return $chapterList;
			
	}
	
}
?>