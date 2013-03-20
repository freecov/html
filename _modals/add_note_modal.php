<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab_compose" data-toggle="tab">Compose</a></li>
		<li><a href="#tab_extra" data-toggle="tab">Extra fields</a></li>
		<li><a href="#tab_links" data-toggle="tab">Links</a></li>
    </ul>
    
	<div class="tab-content">
		<div class="tab-pane fieldset-group active" id="tab_compose">
			<form>
				<fieldset>
					<legend><i class="icon-group"></i> To users</legend>
					<div class="controls controls-row">
						<input class="span10" type="text" placeholder="Type search user">
						<button class="btn span2" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusersModal" ><i class="icon-plus"></i> Add user</button>
					</div>
					<ul class="list-striped linked-ul inline">
						<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
						<li class="form-inline controls-row">Marijke <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
					</ul>	
				</fieldset>
				
				<!-- Start Users Modal -->
                <div id="addusersModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusersModalLabel" aria-hidden="true">
					<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusersModalLabel"><i class="icon-user"></i> Add users</h4>
                    </div>
                    <div class="modal-body">
					</div>
                    <div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-warning">Add Users</button>
					</div>
				</div>
				<!-- End Users Modal -->
				<fieldset>
					<legend><i class="icon-edit"></i> Compose</legend>
					<div class="controls controls-row">
						<input class="span10" type="text" placeholder="Subject:">
					</div>
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
		<div class="tab-pane fieldset-group" id="tab_extra">
			<form>
				<fieldset>
					<legend><i class="icon-list"></i> Extra fields</legend>
					<select class="span6">
						<option>Select extra fields</option>
						<option value="2">gespreksnotitie</option>
						<option value="3">new group</option>
					</select>
					<div class="controls controls-row">
						<input class="span6" type="text" placeholder="Extra1">
						<input class="span6" type="text" placeholder="Extra2">
					</div>
					<div class="controls controls-row">
						<select class="span6">
							<option>Select extra options</option>
							<option value="2">option1</option>
							<option value="3">option2</option>
						</select>
						<input class="span6" type="text" placeholder="Extra4">
					</div>
				</fieldset>
			</form>
		</div>
		<div class="tab-pane fieldset-group" id="tab_links">
			<form>
				<legend><i class="icon-link"></i> Links</legend>
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<legend><i class="icon-book"></i> Contacts</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_contact_classification_modal.php" data-target="#addcontactModal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">Klant-CRM <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>
						</fieldset>
					</div>
					
					<!-- Start Add Contact Modal -->
					<div id="addcontactModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addcontactModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addcontactModalLabel"><i class="icon-book"></i> Add contacts</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add Contact</button>
						</div>
					</div>
					<!-- End Add Contact Modal -->
					
					
					<div class="span6">
						<fieldset>
							<legend><i class="icon-list"></i> Project</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search project">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_project_classification_modal.php" data-target="#addprojectModal" ><i class="icon-plus"></i> Add</button>
							</div>
						</fieldset>
					</div>
					
					<!-- Start Add Project Modal -->
					<div id="addprojectModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addprojectModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addprojectModalLabel"><i class="icon-list"></i> Add project</h4>
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
							<legend><i class="icon-bolt"></i> Customer care</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search customer care">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_customer_care_classification_modal.php" data-target="#addccModal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">546444896 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">879789879 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>
						</fieldset>
					</div>
					<!-- Start Add CC Modal -->
					<div id="addccModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addccModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addccModalLabel"><i class="icon-bolt"></i> Add customer care</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add Customer Care</button>
						</div>
					</div>
					<!-- End Add CC Modal -->
					
					<div class="span6">
						<fieldset>
							<legend><i class="icon-bar-chart"></i> Sales items</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search item">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_sales_item_classification_modal.php" data-target="#addsiModal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Item1 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">Item2 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="odd form-inline controls-row">Item3 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>

						</fieldset>
					</div>
					<!-- Start Add CC Modal -->
					<div id="addsiModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addsiModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addsiModalLabel"><i class="icon-bar-chart"></i> Add sales item</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add Sales Item</button>
						</div>
					</div>
					<!-- End Add CC Modal -->
				</div>
				<fieldset>
					<legend><i class="icon-magic"></i> Create</legend>
					<br>
					<label class="checkbox inline">
						<input type="checkbox"> new customer contact
					</label>
					<label class="checkbox inline">
						<input type="checkbox"> new todo
					</label>
					<label class="checkbox inline">
						<input type="checkbox"> new sales item
					</label>
				</fieldset>
			</form>
		</div>
    </div>
</div>