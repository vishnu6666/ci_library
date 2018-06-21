<!-- Manage Category Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1>Manage Post</h1>
	        <small>Manage Your Post</small>
	        <ol class="breadcrumb">
	            <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#">Post</a></li>
	            <li class="active">Manage Post</li>
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

		<!-- Manage Category -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4>Manage Post</h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th class="text-center"><?php echo display('sl') ?></th>
										<th class="text-center">Post Name</th>
										<th class="text-center">Post Date</th>
										<th class="text-center">Last Date of Application</th>
										<th class="text-center">Exam Date</th>
										<th class="text-center">Status</th>
										<th class="text-center"><?php echo display('action') ?></th>
									</tr>
								</thead>
								<tbody>
								<?php
									if ($post_list) {
								?>
								{post_list}
									<tr>
										<td class="text-center">{sl}</td>
										<td class="text-center">{post_name}</td>
										<td class="text-center">{post_date}</td>
										<td class="text-center">{application_lastdate}</td>
										<td class="text-center">{exam_date}</td>
										<td class="text-center">{status}</td>
										<td>
											<center>
											
											
												<a href="" class="DeletePost btn btn-danger btn-sm" name="{id}" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
												
												<a href="<?php echo base_url().'Cpost/post_update_form/{id}'; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
												
												
												<a href="<?php echo base_url().'Cmodelpaper/manage_modelpaper/{id}'; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Create Model Paper"><i class="fa fa-slideshare" aria-hidden="true"></i></a>

											
											</center>
										</td>
									</tr>
								{/post_list}
								<?php
									}
								?>
								</tbody>
		                    </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>
</div>
<!-- Manage Category End -->

<!-- Delete Category ajax code -->
<script type="text/javascript">
	//Delete Category 
	$(".DeletePost").click(function()
	{	
		var post_id=$(this).attr('name');
		var csrf_test_name=  $("[name=csrf_test_name]").val();
		var x = confirm("Are You Sure,Want to Delete ?");
		if (x==true){
		$.ajax
		   ({
				type: "POST",
				url: '<?php echo base_url('Cpost/post_delete')?>',
				data: {post_id:post_id,csrf_test_name:csrf_test_name},
				cache: false,
				success: function(datas)
				{
					alert(datas);
				} 
			});
		}
	});
</script>



