		<div class="fieldset-group" id="tab_links_asim">
			<form>
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<legend><i class="icon-user"></i> User</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search user">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusersModal_astm" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-calendar"></i> Dates</legend>
							<div class="controls controls-row">
								<input class="span3" type="text" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Start date">
								<input class="span3" type="text" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="End date">
							</div>
						</fieldset>
					</div>
				</div>
				<!-- Start Users Modal -->
                <div id="addusersModal_astm" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusersModal_astm_Label" aria-hidden="true">
					<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusersModal_astm_Label"><i class="icon-user"></i> Add users</h4>
                    </div>
                    <div class="modal-body">
					</div>
                    <div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-warning">Add Users</button>
					</div>
				</div>
				<!-- End Users Modal -->
				
				
				<div class="row-fluid">
					<div class="span12">
				        <fieldset>
							<legend><i class="icon-info-sign"></i> Information</legend>
							<div class="controls controls-row">
								<input class="span2" type="text" placeholder="Phonecalls">
								<input class="span2" type="text" placeholder="Appointments">
								<input class="span2" type="text" placeholder="Visits">
								<input class="span2" type="text" placeholder="Orders">
								<input class="span2" type="text" placeholder="Turnover">
							</div>
						</fieldset>
					</div>
				</div>
			</form>
		</div>