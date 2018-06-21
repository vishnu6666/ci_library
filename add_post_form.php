<!-- Add new customer start -->
<script src="<?php echo base_url()?>assets/js/nicEdit-latest.js" type="text/javascript"></script>
 <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page

        bkLib.onDomLoaded(function() {
             new nicEditor().panelInstance('nagarikshala_content');
        }); // convert text area with id area1 to rich text editor.

        bkLib.onDomLoaded(function() {
             new nicEditor({fullPanel : true}).panelInstance('area2');
        }); // convert text area with id area2 to rich text editor with full panel.
</script> 
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Post</h1>
            <small>Add New Post</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#">Post</a></li>
                <li class="active">Add Post</li>
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
                            <h4>Add Post </h4>
                        </div>
                    </div>
                  <?php echo form_open_multipart('Cpost/insert_post', array('class' => 'form-vertical','id' => 'insert_customer'))?>
				 
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Post Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="post_name" id="post_name" type="text" placeholder="Post Name"  required="">
                            </div>
                        </div>	
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Upcomming Advertise Date </label>
                            <div class="col-sm-3">
                                <input class="form-control datepicker" name ="upcomming_date" id="upcomming_date" type="text" placeholder="Upcomming Advertise Date"  >
                            </div>
							<div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_hh1" >
									<option value="00" >HH</option>
									<?php for($i=1;$i<=24;$i++){ ?>
                                    <option value="<?php echo $i;?>" ><?php echo $i;?></option>
									<?php } ?>                                   
                                </select>								
                            </div>
							<div class="col-sm-1">
                                <select class="form-control" style="width:75px;" name="upcomming_date_mm1" >
									<option value="00" >MM</option>
                                   <?php for($j=1;$j<60;$j++){ ?>
                                    <option value="<?php echo $j;?>" ><?php echo $j;?></option>
									<?php } ?>
                                </select>								
                            </div>
							<div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_ss1" >
									<option value="00" >SS</option>
                                    <?php for($k=1;$k<60;$k++){ ?>
                                    <option value="<?php echo $k;?>" ><?php echo $k;?></option>
									<?php } ?>
                                </select>								
                            </div>
                        </div>	
                         <div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Advertise Date </label>
                            <div class="col-sm-3">
                                <input class="form-control datepicker" name ="post_date" id="post_date" type="text" placeholder="Advertise Date" >
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_hh2" >
                                    <option value="00" >HH</option>
                                    <?php for($i=1;$i<=24;$i++){ ?>
                                    <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                    <?php } ?>                                   
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:75px;" name="upcomming_date_mm2" >
                                    <option value="00" >MM</option>
                                   <?php for($j=1;$j<60;$j++){ ?>
                                    <option value="<?php echo $j;?>" ><?php echo $j;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_ss2" >
                                    <option value="00" >SS</option>
                                    <?php for($k=1;$k<60;$k++){ ?>
                                    <option value="<?php echo $k;?>" ><?php echo $k;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                        </div>	

                        

                        <div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Last Date of Post</label>
                            <div class="col-sm-3">
                                <input class="form-control datepicker" name ="application_lastdate" id="application_lastdate" type="text" placeholder="Last Date of Application" >
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_hh3" >
                                    <option value="00" >HH</option>
                                    <?php for($i=1;$i<=24;$i++){ ?>
                                    <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                    <?php } ?>                                   
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:75px;" name="upcomming_date_mm3" >
                                    <option value="00" >MM</option>
                                   <?php for($j=1;$j<60;$j++){ ?>
                                    <option value="<?php echo $j;?>" ><?php echo $j;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_ss3" >
                                    <option value="00" >SS</option>
                                    <?php for($k=1;$k<60;$k++){ ?>
                                    <option value="<?php echo $k;?>" ><?php echo $k;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                        </div>	

                         

                        <div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Exam Date </label>
                            <div class="col-sm-3">
                                <input class="form-control datepicker" name ="exam_date" id="exam_date" type="text" placeholder="Exam Date"  >
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_hh4" >
                                    <option value="00" >HH</option>
                                    <?php for($i=1;$i<=24;$i++){ ?>
                                    <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                    <?php } ?>                                   
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:75px;" name="upcomming_date_mm4" >
                                    <option value="00" >MM</option>
                                   <?php for($j=1;$j<60;$j++){ ?>
                                    <option value="<?php echo $j;?>" ><?php echo $j;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_ss4" >
                                    <option value="00" >SS</option>
                                    <?php for($k=1;$k<60;$k++){ ?>
                                    <option value="<?php echo $k;?>" ><?php echo $k;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                        </div>	

                         <div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Prelim Result Date </label>
                            <div class="col-sm-3">
                                <input class="form-control datepicker" name ="prelim_result_date" id="prelim_result_date" type="text" placeholder="Prelim Result Date"  >
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_hh5" >
                                    <option value="00" >HH</option>
                                    <?php for($i=1;$i<=24;$i++){ ?>
                                    <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                    <?php } ?>                                   
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:75px;" name="upcomming_date_mm5" >
                                    <option value="00" >MM</option>
                                   <?php for($j=1;$j<60;$j++){ ?>
                                    <option value="<?php echo $j;?>" ><?php echo $j;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_ss5" >
                                    <option value="00" >SS</option>
                                    <?php for($k=1;$k<60;$k++){ ?>
                                    <option value="<?php echo $k;?>" ><?php echo $k;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                        </div>  

                         <div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Mains Result Date </label>
                            <div class="col-sm-3">
                                <input class="form-control datepicker" name ="mains_result_date" id="mains_result_date" type="text" placeholder="Mains Result Date"  >
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_hh6" >
                                    <option value="00" >HH</option>
                                    <?php for($i=1;$i<=24;$i++){ ?>
                                    <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                    <?php } ?>                                   
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:75px;" name="upcomming_date_mm6" >
                                    <option value="00" >MM</option>
                                   <?php for($j=1;$j<60;$j++){ ?>
                                    <option value="<?php echo $j;?>" ><?php echo $j;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_ss6" >
                                    <option value="00" >SS</option>
                                    <?php for($k=1;$k<60;$k++){ ?>
                                    <option value="<?php echo $k;?>" ><?php echo $k;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                        </div>  

                         <div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Compurer Test Date</label>
                            <div class="col-sm-3">
                                <input class="form-control datepicker" name ="compurer_test_date" id="compurer_test_date" type="text" placeholder="Compurer Test Date"  >
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_hh7" >
                                    <option value="00" >HH</option>
                                    <?php for($i=1;$i<=24;$i++){ ?>
                                    <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                    <?php } ?>                                   
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:75px;" name="upcomming_date_mm7" >
                                    <option value="00" >MM</option>
                                   <?php for($j=1;$j<60;$j++){ ?>
                                    <option value="<?php echo $j;?>" ><?php echo $j;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_ss7" >
                                    <option value="00" >SS</option>
                                    <?php for($k=1;$k<60;$k++){ ?>
                                    <option value="<?php echo $k;?>" ><?php echo $k;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                        </div>  

                         <div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Interview Date</label>
                            <div class="col-sm-3">
                                <input class="form-control datepicker" name ="interview_date" id="interview_date" type="text" placeholder="Interview Date"  >
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_hh8" >
                                    <option value="00" >HH</option>
                                    <?php for($i=1;$i<=24;$i++){ ?>
                                    <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                    <?php } ?>                                   
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:75px;" name="upcomming_date_mm8" >
                                    <option value="00" >MM</option>
                                   <?php for($j=1;$j<60;$j++){ ?>
                                    <option value="<?php echo $j;?>" ><?php echo $j;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_ss8" >
                                    <option value="00" >SS</option>
                                    <?php for($k=1;$k<60;$k++){ ?>
                                    <option value="<?php echo $k;?>" ><?php echo $k;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Call Letters Date</label>
                            <div class="col-sm-3">
                                <input class="form-control datepicker" name ="call_letters_date" id="call_letters_date" type="text" placeholder="Call Letters Date"  >
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_hh9" >
                                    <option value="00" >HH</option>
                                    <?php for($i=1;$i<=24;$i++){ ?>
                                    <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                    <?php } ?>                                   
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:75px;" name="upcomming_date_mm9" >
                                    <option value="00" >MM</option>
                                   <?php for($j=1;$j<60;$j++){ ?>
                                    <option value="<?php echo $j;?>" ><?php echo $j;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_ss9" >
                                    <option value="00" >SS</option>
                                    <?php for($k=1;$k<60;$k++){ ?>
                                    <option value="<?php echo $k;?>" ><?php echo $k;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Call Letters Link</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="call_letters_link" id="call_letters_link" type="text" placeholder="Call Letters Link"  >
                            </div>
                        </div>					
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Answer Keys Date</label>
                            <div class="col-sm-3">
                                <input class="form-control datepicker" name ="answer_key_date" id="answer_key_date" type="text" placeholder="Answer Keys Date"  >
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_hh0" >
                                    <option value="00" >HH</option>
                                    <?php for($i=1;$i<=24;$i++){ ?>
                                    <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                    <?php } ?>                                   
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:75px;" name="upcomming_date_mm0" >
                                    <option value="00" >MM</option>
                                   <?php for($j=1;$j<60;$j++){ ?>
                                    <option value="<?php echo $j;?>" ><?php echo $j;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                            <div class="col-sm-1">
                                <select class="form-control" style="width:70px;" name="upcomming_date_ss0" >
                                    <option value="00" >SS</option>
                                    <?php for($k=1;$k<60;$k++){ ?>
                                    <option value="<?php echo $k;?>" ><?php echo $k;?></option>
                                    <?php } ?>
                                </select>                               
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Answer Keys Link</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="answer_key_link" id="answer_key_link" type="text" placeholder="Answer Keys Link" >
                            </div>
                        </div>            						
                       										
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Source of Opportunities </label>
                            <div class="col-sm-6">
                                <textarea  class="form-control" name ="source_of_opportunities" id="source_of_opportunities" rows="5" col="10"  ></textarea>
                            </div>
                        </div>						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Recruitment Rules</label>
                            <div class="col-sm-6">
								 <input type="file" name="recruitment_rules" id="recruitment_rules"  />                               
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Exam Rules </label>
                            <div class="col-sm-6">
								<input type="file" name="exam_rules" id="exam_rules"  />
                              
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Duties </label>
                            <div class="col-sm-6">
                                <textarea  class="form-control" name ="duties" id="duties" rows="5" col="10"  ></textarea>
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Powers </label>
                            <div class="col-sm-6">
                                <textarea  class="form-control" name ="powers" id="powers" rows="5" col="10"  ></textarea>
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Details </label>
                            <div class="col-sm-6">
                                <textarea  class="form-control" name ="details" id="details" rows="5" col="10"  ></textarea>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Upload Notification File </label>
                            <div class="col-sm-6">
                                 <input type="file" name="notification" id="notification"  />
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Apply Now <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                 <input type="text" class="form-control" name="apply_now" id="apply_now" placeholder="Apply Now" required />
                            </div>
                        </div>						
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Syllabus </label>
                            <div class="col-sm-6">
							<input type="text" class="form-control" name="syllabus" id="syllabus" placeholder="Syllabus"  />
                               
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Upload Syllabus </label>
                            <div class="col-sm-6"><input type="file" name="upload_syllabus" id="upload_syllabus"  /></div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Previous Papers </label>
                            <div class="col-sm-6">
							    <input type="text" class="form-control" name="previous_papers" id="previous_papers" placeholder="Previous Papers"  />    
                                
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Model Papers </label>
                            <div class="col-sm-6">
							   <input type="text" class="form-control" name="model_papers" id="model_papers" placeholder="Model Papers"  />   
                                
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Previous Cut Off </label>
                            <div class="col-sm-6">
							   
                                <textarea  class="form-control" name ="previous_cut_off" id="previous_cut_off" rows="5" col="10"  ></textarea>
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="post_name" class="col-sm-3 col-form-label">Area of Focus </label>
                            <div class="col-sm-6">
                                <textarea  class="form-control" name ="area_of_focus" id="area_of_focus" rows="5" col="10"  ></textarea>
                            </div>
                        </div>
						
						
                
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
<!-- Add new customer end -->



