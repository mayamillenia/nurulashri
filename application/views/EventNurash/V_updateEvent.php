<div class="right_col" role="main">

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Update Event Nurul Ashri</h2>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-12">
					<br />
					<div class="table-responsive">
						<table class="table table-bordered table-hover formatTabel">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Event</th>
									<th>Tanggal Upload</th>
									<th>Tanggal Event</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($event as $k) { ?>
									<tr>
										<td><?php echo $no;?></td>
										<td><a href="<?php echo base_url('EventNurash/Update/UpdateKajian/'.$k['event_id'])?>" title="<?php echo $k['event_name']?>"><?php echo $k['event_name']?></a></td>
										<td><?php echo $k['event_created']?></td>
										<td><?php echo $k['event_date']?></td>
										<td>
											<a title="edit kajian ..." href="<?php echo base_url('EventNurash/Update/UpdateKajian/'.$k['event_id'])?>" class="btn btn-primary btn-xs" ><i class="fa fa-edit"></i></a>
											<a title="delete kajian ..." onclick="hapusKajianMuslim($(this))" class="btn btn-danger btn-xs" value="<?php echo $k['event_id']?>" ><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								</tbody>
								<?php $no++; } ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>