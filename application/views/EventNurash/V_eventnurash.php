<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Upload Events Nurul Ashri <small>Click to add/edit events</small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Cari</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Events Nurash</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?php echo base_url('EventNurash/Upload/UploadEventNurash')?>" method="post" > 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Event Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="event_name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Event Date<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="event_date" class="form-control has-feedback-left tanggalNurash">
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
               </div>
             </div>
             <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Event Description<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <textarea id="textarea" required="required" name="event_description" class="form-control col-md-7 col-xs-12"></textarea>
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
</div>
<!-- /page content -->