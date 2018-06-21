<script src="<?php echo base_url()?>assets/js/tinymce/tinymce.min.js" type="text/javascript"></script>
<script>
 tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: 'print preview fullpage powerpaste searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
  </script>
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Edit Post</h1>
            <small>Edit Post</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#">Post</a></li>
                <li class="active">Edit Post</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        <?php
            $message = $this->session->userdata('message');
            if (isset($message)) {
        ?>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $message ?>                    
        </div>
        <?php 
            $this->session->unset_userdata('message');
            }
            $error_message = $this->session->userdata('error_message');
            if (isset($error_message)) {
        ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $error_message ?>                    
        </div>
        <?php 
            $this->session->unset_userdata('error_message');
            }
        ?>

        <!-- New customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Upload Post Files </h4>
                        </div>
                    </div>
                  <?php echo form_open_multipart('Cpost/post_upload',array('class' => 'form-vertical', 'id' => 'insert_customer'))?>
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Name of Post <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="post_name" id="post_name" type="text" placeholder="Name of Post" value="{post_name}" >
                            </div>
                        </div>  
					                       
                         

                        						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Recruitment Rules</label>
                            <div class="col-sm-6">
                                <input type="file" name="recruitment_rules" id="recruitment_rules"  />
                            </div>
                        </div>
						<?php if(isset($recruitment_rules) && !empty($recruitment_rules)){ ?>
						<div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="old_recruitment_rules" type="hidden" value="{recruitment_rules}">
									<a href="{recruitment_rules}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Download Recruitment Rules"><i class="fa fa-download" ></i></a>
															
								
								 
                            </div>
                        </div>
						<?php } ?>
					
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Exam Rules </label>
                            <div class="col-sm-6">
                                <input type="file" name="exam_rules" id="exam_rules"  />
                            </div>
                        </div>
						<?php if(isset($exam_rules) && !empty($exam_rules)){ ?>
						<div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="old_exam_rules" type="hidden" value="{exam_rules}">
									<a href="{exam_rules}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Download Exam Rules"><i class="fa fa-download" ></i></a>
															
								
								 
                            </div>
                        </div>
						<?php } ?>						
											
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Upload Advertisement Published  </label>
                            <div class="col-sm-6">
                                 <input type="file" name="advertisement_published" id="advertisement_published"  />
                            </div>
                        </div>
						<?php if(isset($advertisement_published) && !empty($advertisement_published)){ ?>
						<div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label">Download Here</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="old_advertisement_published" type="hidden" value="{advertisement_published}">
									<a href="{advertisement_published}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Download  Advertisement Published"><i class="fa fa-download" ></i></a>
															
								
								 
                            </div>
                        </div>
						<?php } ?>
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Upload Notification File </label>
                            <div class="col-sm-6">
                                 <input type="file" name="notification" id="notification"  />
                            </div>
                        </div>
						<?php if(isset($notification) && !empty($notification)){ ?>
						<div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label">Download Here</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="old_notification" type="hidden" value="{notification}">
									<a href="{notification}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Download  notification"><i class="fa fa-download" ></i></a>
															
								
								 
                            </div>
                        </div>
						<?php } ?>
						
												
					
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Upload Syllabus </label>
                            <div class="col-sm-6"><input type="file" name="upload_syllabus" id="upload_syllabus"  /></div>
                        </div>
						<?php if(isset($upload_syllabus) && !empty($upload_syllabus)){ ?>
						<div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label">Download Here</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="old_upload_syllabus" type="hidden" value="{upload_syllabus}">
									<a href="{upload_syllabus}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Download  upload_syllabus"><i class="fa fa-download" ></i></a>
															
								
								 
                            </div>
                        </div>
						<?php } ?>
						
											
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Upload Question Paper </label>
                            <div class="col-sm-6"><input type="file" name="question_papers" id="question_papers"  /></div>
                        </div>
						<?php if(isset($question_papers) && !empty($question_papers)){ ?>
						<div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label">Download Here</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="old_question_papers" type="hidden" value="{question_papers}">
									<a href="{question_papers}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Download  Question Papers"><i class="fa fa-download" ></i></a>
															
								
								 
                            </div>
                        </div>
						<?php } ?>	
					
						
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Upload Provisional Answer Key  </label>
                            <div class="col-sm-6"><input type="file" name="provisional_answer_key" id="provisional_answer_key"  /></div>
                        </div>
						
						<?php if(isset($provisional_answer_key) && !empty($provisional_answer_key)){ ?>
						<div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label">Download Here</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="old_provisional_answer_key" type="hidden" value="{provisional_answer_key}">
									<a href="{provisional_answer_key}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Download  Provisional Answer key"><i class="fa fa-download" ></i></a>															
								
								 
                            </div>
                        </div>
						<?php } ?>	
						
											
						
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Upload Final Answer Key </label>
                            <div class="col-sm-6"><input type="file" name="final_answer_key" id="final_answer_key"  /></div>
                        </div>
						
						<?php if(isset($final_answer_key) && !empty($final_answer_key)){ ?>
						<div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label">Download Here</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="old_final_answer_key" type="hidden" value="{final_answer_key}">
									<a href="{final_answer_key}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Download  Final Answer key"><i class="fa fa-download" ></i></a>															
								
								 
                            </div>
                        </div>
						<?php } ?>	
						
					
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Upload Result </label>
                            <div class="col-sm-6"><input type="file" name="result" id="result"  /></div>
                        </div>
						
						<?php if(isset($result) && !empty($result)){ ?>
						<div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label">Download Here</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="old_result" type="hidden" value="{result}">
									<a href="{result}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Download Result"><i class="fa fa-download" ></i></a>															
								
								 
                            </div>
                        </div>
						<?php } ?>	
						
					
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Upload Post Logo </label>
                            <div class="col-sm-6"><input type="file" name="post_logo" id="post_logo"  /></div>
                        </div>
						
						<?php if(isset($post_logo) && !empty($post_logo)){ ?>
						<div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label">Download Here</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="old_post_logo" type="hidden" value="{post_logo}">
									<a href="{post_logo}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Download Post Logo"><i class="fa fa-download" ></i></a>															
								
								 
                            </div>
                        </div>
						<?php } ?>						
											
						<input type="hidden" value="{id}" name="post_id" >				
                
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-post" class="btn btn-success btn-large" name="add-post" value="<?php echo display('save') ?>" />
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Edit customer end -->



