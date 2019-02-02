<div class="right_col" role="main">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Edit Kajian Nurul Ashri</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?php echo base_url('EventNurash/Upload/EditEventNurash/'.$event[0]['event_id'])?>" method="post" > 
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Name <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="event_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $event[0]['event_name']?>">
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Event Date<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="event_date" class="form-control has-feedback-left tanggalNurash" value="<?php echo $event[0]['event_date']?>">
								<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Upload file<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<img id="image-preview" alt="image preview"/>
								<br/>
								<input type="file" id="image-source" name="event_image" onchange="previewImage();"/>
								<img src="<?php echo base_url('assets/images/event/'.$event[0]['event_image']) ?>" width="300" height="300"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Description<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="textarea" required="required" name="event_description" class="form-control col-md-7 col-xs-12"><?php echo $event[0]['event_description']?></textarea>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<a href="<?php echo base_url('EventNurash/Update')?>">
									<button type="button" class="btn btn-primary">Back</button>
								</a>
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
