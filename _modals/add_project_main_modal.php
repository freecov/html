		<div class="fieldset-group">
			<form>
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<legend><i class="icon-list"></i> Project number / name</legend>
							<div class="controls controls-row">
								<input class="span12" type="text" placeholder="Type project number or name">
								<label class="checkbox span3 inline">
									<input type="checkbox"> Active
								</label>
							</div>
						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-info-sign"></i> Project description</legend>
							<div class="controls controls-row">
								<textarea rows="2" class="span12"></textarea>
							</div>
						</fieldset>
					</div>
				</div>

				
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<legend><i class="icon-user"></i> Project manager</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search user">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addmanagerpmModal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-lock"></i> Access</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search user">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addaccessuserspmModal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Sed  <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">Quisque  <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="odd form-inline controls-row">Suspendisse  <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">Fusce  <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
				</div>
				<!-- Start addmanager Modal -->
                <div id="addmanagerpmModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addmanagerpmModalLabel" aria-hidden="true">
					<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addmanagerpmModalLabel"><i class="icon-user"></i> Add project manager</h4>
                    </div>
                    <div class="modal-body">
					</div>
                    <div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-warning">Add project manager</button>
					</div>
				</div>
				<!-- End addmanager Modal -->

			
				<!-- Start addaccessusers Modal -->
                <div id="addaccessuserspmModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addaccessuserspmModalLabel" aria-hidden="true">
					<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addaccessuserspmModalLabel"><i class="icon-user"></i> Add users</h4>
                    </div>
                    <div class="modal-body">
					</div>
                    <div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-warning">Add users</button>
					</div>
				</div>
				<!-- End addaccessusers Modal -->
			
				
				<div class="row-fluid">
					<div class="span12">
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
					
				</div>



			</form>
		</div>
