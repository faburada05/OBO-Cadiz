<?=main_header(['application']);?>
<!-- ############ PAGE START-->
<link rel="stylesheet" href="<?= base_url()?>assets/css/global.css" type="text/css" />
<link rel="stylesheet" href="<?= base_url()?>assets/css/tables.css" type="text/css" />
<div class="padding">	
	<div class="p-a indigo-400 lt box-shadow">
		<div class="row">
			<div class="col-sm-6">
				<h5 class="m-b-0 _300"><i class="fa fa-cubes"></i> APPLICATION </h5>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class='box p-a'>
		<div class="row">				
			<div class="box-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<label style="color: red; font-size: 15px;"><b>Note :</b> Field with asterisk (<b>*</b>) are required. </label>
					</div>
				</div><br>

				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<label class="label-name">Last name: </label>
						<input type="text" class="form-control" data-field="last-name" id="last-name" placeholder="last name">
					</div>
					<div class="col-xs-12 col-sm-4">
						<label class="label-name">First name: </label>
						<input type="text" class="form-control" data-field="first-name" id="first-name" placeholder="first name">
					</div>
					<div class="col-xs-12 col-sm-4">
						<label class="label-name">Middle name: </label>
						<input type="text" class="form-control" data-field="middle-name" id="middle-name" placeholder="middle name">
					</div>
				</div><br>

				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<label class="label-name">Business name / Trade name: </label>
						<input type="text" class="form-control" data-field="buss-trade-name" id="buss-trade-name" placeholder="business / trade name">
					</div>
				</div><br>

				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<label class="label-name">Street: </label>
						<input type="text" class="form-control" data-field="street" id="street" placeholder="street">
					</div>
					<div class="col-xs-12 col-sm-4">
						<label class="label-name">Barangay: </label>
						<select class="form-control" name="brgy" data-field="brgy" id="brgy">
							<option value="" disabled selected>Select.. </option>
						</select>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<label class="label-name">City / Municipality</label>
							<input type="text" class="form-control" data-field="city-mun" id="city-mun" value="Cadiz City">
						</div>
					</div>
				</div>
			</div>							
		</div>			
	</div>
</div>
<!-- page end -->
<?=main_footer();?>