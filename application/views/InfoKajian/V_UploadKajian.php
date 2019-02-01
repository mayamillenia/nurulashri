<div class="right_col" role="main">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Upload Kajian Nurul Ashri</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?php echo base_url('KajianMuslim/Newest/uploadkajian')?>" method="post" > 
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Judul Kajian <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="judul_kajian" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Pemateri <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="pemateri_kajian" id="last-name" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="tanggal_kajian" class="form-control has-feedback-left tanggalNurash">
								<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Upload file<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<img id="image-preview" alt="image preview"/>
								<br/>
								<input type="file" id="image-source" name="image_kajian" onchange="previewImage();"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="textarea" required="required" name="deskripsi_kajian" class="form-control col-md-7 col-xs-12"></textarea>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>