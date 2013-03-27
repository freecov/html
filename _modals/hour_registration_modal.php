<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab_maininfo_hrm" data-toggle="tab">Main information</a></li>
		<li><a href="#tab_batchhour_hrm" data-toggle="tab">Batch hour input</a></li>
		<li><a href="#tab_otherproject_hrm" data-toggle="tab">Other project costs</a></li>
    </ul>
    
	<div class="tab-content">
		<div class="tab-pane fieldset-group active" id="tab_maininfo_hrm">
			<form>
				<legend><i class="icon-info-sign"></i> Main information</legend>

				<div class="row-fluid">
					<div class="span6">
						<fieldset>
								<legend><i class="icon-user"></i> For user</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusers_hrmModal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
					<!-- Start Users addusers_activ1 Modal -->
					<div id="addusers_hrmModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusers_hrmModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusers_hrmModalLabel"><i class="icon-user"></i> Add users</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add Users</button>
						</div>
					</div>
					<!-- End Users addusers_activ1 Modal -->
					<div class="span6">
						<fieldset>
							<legend><i class="icon-calendar"></i> Date</legend>
							<div class="controls controls-row ">
								<input type="text" class="span3" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Select date">
								<input type="text" class="span3" value="" placeholder="Start">
								<input type="text" class="span3" value="" placeholder="End">
								
							</div>
						</fieldset>
						<div class="alert alert-error margin-t">
							<i class="icon-warning-sign"></i> Start time should be before end time
						</div>
					</div>
				</div>

				<div class="row-fluid">

					<div class="span6">
						<fieldset>
							<legend><i class="icon-list"></i> Project</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search project">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_project_classification_modal.php" data-target="#addproject_hrmModal" ><i class="icon-plus"></i> Add</button>
							</div>
						</fieldset>
					</div>
					
					<!-- Start Add Project Modal -->
					<div id="addproject_hrmModal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addproject_hrmModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addproject_hrmModalLabel"><i class="icon-list"></i> Add project</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add Project</button>
						</div>
					</div>
					<!-- End Add Project Modal -->
					
				
					<div class="span6">
						<fieldset>
							<legend><i class="icon-thumbs-up"></i> Activity</legend>
							<div class="controls controls-row ">
								<select class="span6">
									<option value="0" selected="selected">geen</option>
									<optgroup title="willem" label="willem">
										<option value="2">aanvraagprogrammadownloaden</option>
									</optgroup>
									<optgroup title="osdn" label="osdn">
										<option value="3">aanvraagprogrammadownloaden</option>
										<option value="4">Activity name</option>
									</optgroup>
								</select>
								<label class="checkbox span4 inline">
									<input type="checkbox"> Send an invoice
								</label>
							</div>
						</fieldset>
					</div>
				</div>

				<fieldset>
					<div class="row-fluid">
						<div class="span10 margin-b"><img src="img/wysiwyg.png"></div>
						<div class="span2"><button class="btn btn-block active"  type="button"  data-toggle="button">HTML-mode</button></div>
					</div>
					<div class="controls controls-row">
						<textarea rows="4" class="span12"></textarea>
					</div>
				</fieldset>
			</form>
		</div>
				
		<div class="tab-pane fieldset-group" id="tab_batchhour_hrm">
			<form>
				<legend><i class="icon-info-sign"></i> Batch hour input</legend>

				<div class="row-fluid">
					<div class="span6">
						<fieldset>
								<legend><i class="icon-user"></i> For user</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusers_hrm_2Modal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
					<!-- Start Users addusers_activ1 Modal -->
					<div id="addusers_hrm_2Modal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusers_hrm_2ModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusers_hrm_2ModalLabel"><i class="icon-user"></i> Add users</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add Users</button>
						</div>
					</div>
					<!-- End Users addusers_activ1 Modal -->
					
					<div class="span6">
						<fieldset>
							<legend><i class="icon-list"></i> Project</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search project">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_project_classification_modal.php" data-target="#addproject_hrm_2Modal" ><i class="icon-plus"></i> Add</button>
							</div>
						</fieldset>
					</div>
					
					<!-- Start Add Project Modal -->
					<div id="addproject_hrm_2Modal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addproject_hrm_2ModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addproject_hrm_2ModalLabel"><i class="icon-list"></i> Add project</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add Project</button>
						</div>
					</div>
					<!-- End Add Project Modal -->
					
				</div>

				<div class="row-fluid">
					
					<div class="span6">
						<fieldset>
							<legend><i class="icon-calendar"></i> Date</legend>
							<div class="controls controls-row ">
								<input type="text" class="span4" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Select date">
								<input type="text" class="span4" value="" placeholder="Hours">
							</div>
						</fieldset>
					</div>
					
				
					<div class="span6">
						<fieldset>
							<legend><i class="icon-thumbs-up"></i> Activity</legend>
							<div class="controls controls-row ">
								<select class="span6">
									<option value="0" selected="selected">geen</option>
									<optgroup title="willem" label="willem">
										<option value="2">aanvraagprogrammadownloaden</option>
									</optgroup>
									<optgroup title="osdn" label="osdn">
										<option value="3">aanvraagprogrammadownloaden</option>
										<option value="4">Activity name</option>
									</optgroup>
								</select>
								<label class="checkbox span4 inline">
									<input type="checkbox"> Send an invoice
								</label>
							</div>
						</fieldset>
					</div>
				</div>

				<fieldset>
					<div class="row-fluid">
						<div class="span10 margin-b"><img src="img/wysiwyg.png"></div>
						<div class="span2"><button class="btn btn-block active"  type="button"  data-toggle="button">HTML-mode</button></div>
					</div>
					<div class="controls controls-row">
						<textarea rows="4" class="span12"></textarea>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="tab-pane fieldset-group" id="tab_otherproject_hrm">
			
			<form>
				<legend><i class="icon-info-sign"></i> Other project costs</legend>

				<div class="row-fluid">
					<div class="span6">
						<fieldset>
								<legend><i class="icon-user"></i> For user</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusers_hrm_3Modal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
					<!-- Start Users addusers_activ1 Modal -->
					<div id="addusers_hrm_3Modal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusers_hrm_3ModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusers_hrm_3ModalLabel"><i class="icon-user"></i> Add users</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add Users</button>
						</div>
					</div>
					<!-- End Users addusers_activ1 Modal -->
					
					<div class="span6">
						<fieldset>
							<legend><i class="icon-list"></i> Project</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search project">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_project_classification_modal.php" data-target="#addproject_hrm_3Modal" ><i class="icon-plus"></i> Add</button>
							</div>
						</fieldset>
					</div>
					
					<!-- Start Add Project Modal -->
					<div id="addproject_hrm_3Modal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addproject_hrm_3ModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addproject_hrm_3ModalLabel"><i class="icon-list"></i> Add project</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add Project</button>
						</div>
					</div>
					<!-- End Add Project Modal -->
					
				</div>

				<div class="row-fluid">
					
					<div class="span4">
						<fieldset>
							<legend><i class="icon-calendar"></i> Date</legend>
							<div class="controls controls-row ">
								<input type="text" class="span8" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Select date">
							</div>
						</fieldset>
					</div>
					
				
					<div class="span4">
						<fieldset>
							<legend><i class="icon-tag"></i> Type</legend>
							<div class="controls controls-row ">
								<select class="span6">
									<option value="0" selected="selected">geen</option>
									<optgroup title="willem" label="willem">
										<option value="2">aanvraagprogrammadownloaden</option>
									</optgroup>
									<optgroup title="osdn" label="osdn">
										<option value="3">aanvraagprogrammadownloaden</option>
										<option value="4">Activity name</option>
									</optgroup>
								</select>
								<label class="checkbox span6 inline">
									<input type="checkbox"> Send an invoice
								</label>
							</div>
						</fieldset>
					</div>
					
					<div class="span4">
						<fieldset>
							<legend><i class="icon-money"></i> Finance</legend>
							<div class="controls controls-row ">
								<input type="text" class="span6" value="" placeholder="Purchase €">
								<input type="text" class="span6" value="" placeholder="Price €">
							</div>
						</fieldset>
					</div>
				</div>

				<fieldset>
					<div class="row-fluid">
						<div class="span10 margin-b"><img src="img/wysiwyg.png"></div>
						<div class="span2"><button class="btn btn-block active"  type="button"  data-toggle="button">HTML-mode</button></div>
					</div>
					<div class="controls controls-row">
						<textarea rows="4" class="span12"></textarea>
					</div>
				</fieldset>
			</form>
			
		</div>
    </div>
</div>