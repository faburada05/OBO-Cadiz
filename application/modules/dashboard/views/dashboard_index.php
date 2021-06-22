<?php
	main_header(['dashboard']);	
?>
<!-- ############ PAGE START-->
<link rel="stylesheet" href="<?= base_url()?>assets/css/global.css" type="text/css" />
<link rel="stylesheet" href="<?= base_url()?>assets/css/tables.css" type="text/css" />
<div class="padding">	
	<div class="p-a indigo-400 lt box-shadow">
		<div class="row">
			<div class="col-sm-6">
				<h5 class="m-b-0 _300"><i class="fa fa-cubes"></i> DASHBOARD </h5>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class='box p-a'>
		<div class="row">								
			<div class="box-body">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<div class="box p-a" style="border: 1px solid gray">
							<div class="pull-left m-r">
								<span class="w-48 rounded accent">
									<i class="fa fa-envelope"></i></i>
								</span>
							</div>
							<div class="clear">
								<h4 class="m-a-0 text-lg _300">
									<a href="">10 <span class="text-sm"> Emails</span></a>
								</h4>
								<small class="text-muted">10 new arrivals. </small>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-4">
						<div class="box p-a" style="border: 1px solid gray">
							<div class="pull-left m-r">
								<span class="w-48 rounded accent">
									<i class="fa fa-envelope"></i></i>
								</span>
							</div>
							<div class="clear">
								<h4 class="m-a-0 text-lg _300">
									<a href="">20 <span class="text-sm"> Emails</span></a>
								</h4>
								<small class="text-muted">10 new arrivals. </small>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-4">
						<div class="box p-a" style="border: 1px solid gray">
							<div class="pull-left m-r">
								<span class="w-48 rounded accent">
									<i class="fa fa-envelope"></i></i>
								</span>
							</div>
							<div class="clear">
								<h4 class="m-a-0 text-lg _300">
									<a href="">40 <span class="text-sm"> Emails</span></a>
								</h4>
								<small class="text-muted">10 new arrivals. </small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
</div>
<!-- page end -->
<?php
	main_footer();
?>
<script src="<?php echo base_url()?>/assets/js/dashboard/index.js"></script>