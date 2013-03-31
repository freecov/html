		<div class="fieldset-group">
			<form>
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
								<legend><i class="icon-user"></i> For user</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusers_atmModal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
					<!-- Start Users addusers_activ1 Modal -->
					<div id="addusers_atmModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusers_atmModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusers_atmModalLabel"><i class="icon-user"></i> Add users</h4>
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
								<input type="text" class="span3" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Date">
								<input type="text" class="span3" value="" placeholder="Time">
								<input type="text" class="span3" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="End date">
								<input type="text" class="span3" value="" placeholder="End time">
								
							</div>
						</fieldset>
						<div class="alert alert-success margin-t">
							<i class="icon-thumbs-up"></i> No errors
						</div>
					</div>
				</div>

				<div class="row-fluid">

					<div class="span6">
						<fieldset>
							<legend><i class="icon-info-sign"></i> Status</legend>
							<div class="controls controls-row ">
								<select class="span9">
									<option value="1">Active</option>
									<option value="2">Passive</option>
								</select>
							</div>
						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-signal"></i> Priority</legend>
							<div class="controls controls-row ">
								<select class="span9">
									<option value="1">1 - high</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5" selected="selected">5 - normal</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10 - low</option>
								</select>
								<label class="checkbox span3 inline">
									<input type="checkbox"><i class="icon-flag"></i> Alert
								</label>
							</div>
						</fieldset>
					</div>
				</div>

				<fieldset>
					<input class="span12" type="text" placeholder="Subject">
					<div class="row-fluid">
						<div class="span10 margin-b"><img src="img/wysiwyg.png"></div>
						<div class="span2"><button class="btn btn-block active"  type="button"  data-toggle="button">HTML-mode</button></div>
					</div>
					<div class="controls controls-row">
						<textarea rows="4" class="span12"></textarea>
					</div>
				</fieldset>
				
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<legend><i class="icon-book"></i> Contacts</legend>
							<div class="controls controls-row">
								<ul class="list-striped linked-ul inline">
									<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
									<li class="form-inline controls-row">Klant-CRM <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								</ul>
								
								<a class="btn" type="button" data-toggle="modal" href="_modals/add_contact_classification_modal.php" data-target="#addcontactapdpmModal" ><i class="icon-link"></i> Link Contact</a>
							</div>
						</fieldset>
					</div>
					
					<!-- Start Add Contact apd Modal -->
					<div id="addcontactapdpmModal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addcontactapdpmModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addcontactapdpmModalLabel"><i class="icon-book"></i> Add contacts</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add Contact</button>
						</div>
					</div>
					<!-- End Add Contact apd Modal -->
					
					<div class="span6">
						<fieldset>
							<legend><i class="icon-list"></i> Project</legend>
							<div class="controls controls-row">
								<ul class="list-striped linked-ul inline">
									<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
									<li class="form-inline controls-row">Klant-CRM <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								</ul>
								<a class="btn" type="button" data-toggle="modal" href="_modals/add_project_classification_modal.php" data-target="#addproject_atmModal" ><i class="icon-link"></i> Link Project</a>
							</div>
						</fieldset>
					</div>
					
					<!-- Start Add Project Modal -->
					<div id="addproject_atmModal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addproject_atmModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addproject_atmModalLabel"><i class="icon-list"></i> Add project</h4>
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
				
			</form>
		</div>