<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab_general" data-toggle="tab">General</a></li>
		<li><a href="#tab_costs" data-toggle="tab">Costs</a></li>
		<li><a href="#tab_links" data-toggle="tab">Access / Links</a></li>
		<li><a href="#tab_attachments" data-toggle="tab">Dates / Attachments</a></li>
		<li><a href="#tab_communication" data-toggle="tab">Sales communication</a></li>
    </ul>
    
	<div class="tab-content">
		<div class="tab-pane fieldset-group active" id="tab_general">
			<form>
				<fieldset>
					<legend><i class="icon-edit"></i> General</legend>
					<div class="controls controls-row">
						<input class="span6" type="text" placeholder="Title">
						<select class="span3"><option>Status</option><option>Pending</option><option>Close to decision</option><option>Close to lost</option><option>Close to won</option></select>
						<label class="checkbox span3 inline">
							<input type="checkbox"> Active
						</label>
					</div>
					<div class="controls controls-row">
						<label>Description</label>
						<textarea rows="4" class="span12"></textarea>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="tab-pane fieldset-group" id="tab_costs">
			<form>
				<fieldset>
					<legend><i class="icon-money"></i> Costs</legend>
					<div class="controls controls-row">
						<div class="input-prepend span6">
							<span class="add-on">%</span>
							<input class="span11 no-float" type="text" placeholder="Expected score in %">
						</div>
						<div class="input-prepend span6">
							<span class="add-on">€</span>
							<input class="span11 no-float" type="text" placeholder="Total costs in €">
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<div class="tab-pane fieldset-group" id="tab_links">
			<form>
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<legend><i class="icon-group"></i> Users</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search user">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusersModal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">Marijke <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-eye-open"></i> Readonly Users</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search user">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusersreadModal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">Marijke <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
				</div>
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
				
				<!-- Start ReadOnly Users Modal -->
                <div id="addusersreadModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusersreadModalLabel" aria-hidden="true">
					<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusersreadModalLabel"><i class="icon-user"></i> Add users</h4>
                    </div>
                    <div class="modal-body">
					</div>
                    <div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-warning">Add Users</button>
					</div>
				</div>
				<!-- End ReadOnly Users Modal -->
				
				
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
					<div id="addcontactModal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addcontactModalLabel" aria-hidden="true">
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
					<div id="addprojectModal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addprojectModalLabel" aria-hidden="true">
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
					<div class="span12">
				        <fieldset>
							<legend><i class="icon-exchange"></i> Classfication information</legend>
							<div class="controls controls-row">
								<ul class="list-striped linked-ul inline">
									<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
									<li class="form-inline controls-row">Klant-CRM <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								</ul>
	
								<a class="btn" type="button" data-toggle="modal" href="_modals/add_classification_modal.php" data-target="#bcClassificationModal" ><i class="icon-link"></i> Link Classfication</a>

								<!-- Start classification Modal -->
								<div id="bcClassificationModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="classificationModalLabel" aria-hidden="true">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
										<h4 id="classificationModalLabel"><i class="icon-exchange"></i> Link Classification</h4>
									</div>
									<div class="modal-body">
	
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
										<button class="btn btn-warning">Link Classification</button>
									</div>
								</div>
								<!-- End classification Modal -->
							</div>
						</fieldset>
					</div>
				</div>
			</form>
		</div>
		<div class="tab-pane" id="tab_attachments">
			<form>
				<legend><i class="icon-check"></i> To do</legend>
				<div class="well well-covide">
			
					<table class="table table-condensed table-striped table-hover">
						<colgroup>
							<col width="10%">
							<col width="5%">
							<col width="5%">
                    		<col width="20%">
							<col width="15%">
					        <col width="10%">
							<col width="10%">
					        <col width="25%">
						</colgroup>
						
                		<thead>
                    		<tr>
                        		<th>Subject</th>
                        		<th>Date</th>
								<th>End date</th>
                        		<th>Contact</th>
								<th>Project</th>
								<th>Status</th>
								<th>Priority</th>
                        		<th>Actions</th>
                    		</tr>
                		</thead>
                		<tbody>
                    		<tr>
                        		<td>Werfgsdf</td>
                        		<td>15.04.2013</td>
								<td>15.04.2013</td>
                        		<td>konstantin.cherniak</td>
								<td>Werfgsdf</td>
								<td><span data-original-title="active" class="label label-active label-success">A</span></td>
				                <td><div data-original-title="high" class="progress progress-small progress-striped"><div class="bar bar-danger" style="width: 100%;"></div></div></td>
                        		<td>
									<div class="btn-group">
										<button class="btn btn-small"><i class="icon-info-sign"></i></button>
										<button class="btn btn-small"><i class="icon-thumbs-up"></i></button>
										<button class="btn btn-small"><i class="icon-edit"></i></button>
										<button class="btn btn-small"><i class="icon-calendar"></i></button>
									</div>
								</td>
                    		</tr>
							<tr>
                        		<td>Werfgsdf</td>
                        		<td>15.04.2013</td>
								<td>15.04.2013</td>
                        		<td>konstantin.cherniak</td>
								<td>Werfgsdf</td>
								<td><span data-original-title="active" class="label label-active label-success">A</span></td>
				                <td>
									<div data-original-title="medium" class="progress progress-small progress-striped">
										<div class="bar bar-warning" style="width: 66%;"></div>
									</div>
								</td>
                        		<td>
									<div class="btn-group">
										<button class="btn btn-small"><i class="icon-info-sign"></i></button>
										<button class="btn btn-small"><i class="icon-thumbs-up"></i></button>
										<button class="btn btn-small"><i class="icon-edit"></i></button>
										<button class="btn btn-small"><i class="icon-calendar"></i></button>
									</div>
								</td>
                    		</tr>
							<tr>
                        		<td>Werfgsdf</td>
                        		<td>15.04.2013</td>
								<td>15.04.2013</td>
                        		<td>konstantin.cherniak</td>
								<td>Werfgsdf</td>
								<td><span data-original-title="active" class="label label-active label-success">A</span></td>
				                <td><div data-original-title="high" class="progress progress-small progress-striped"><div class="bar bar-danger" style="width: 100%;"></div></div></td>
                        		<td>
									<div class="btn-group">
										<button class="btn btn-small"><i class="icon-info-sign"></i></button>
										<button class="btn btn-small"><i class="icon-thumbs-up"></i></button>
										<button class="btn btn-small"><i class="icon-edit"></i></button>
										<button class="btn btn-small"><i class="icon-calendar"></i></button>
									</div>
								</td>
                    		</tr>
							
		                </tbody>
        		    </table>
				</div>
				
				<div class="controls controls-row">
					<input type="text" class="span2"  data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Action date">
					<button class="btn span2"><i class="icon-check"></i> Add To do</button>
				</div>
				
				<div class="controls controls-row">
					<input type="text" class="span2"  data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Prospect">
				</div>
				
				<div class="controls controls-row">
					<input type="text" class="span2"  data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Quote">
					<a class="btn span2"><i class="icon-folder-open"></i> Add file</a>
					<a href="#" class="btn span1" ><i class="icon-plus"></i></a>
				</div>
				
				<div class="controls controls-row">
					<input type="text" class="span2" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Order/commission">
				</div>
				
				<div class="controls controls-row">
					<input type="text" class="span2"  data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Invoice">
					<a class="btn span2"><i class="icon-folder-open"></i> Add file</a>
					<a href="#" class="btn span1" ><i class="icon-plus"></i></a>
				</div>
				
				<div class="controls controls-row">
					<legend><i class="icon-paper-clip"></i> Files</legend>
						
						<ul class="list-striped linked-ul inline">
							<li class="odd form-inline controls-row">Attach.docx <span class="label" title="Google docs">Google</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="form-inline controls-row">picture.jpg <span class="label" title="Covide file system">Covide</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="odd form-inline controls-row">document.docx <span class="label" title="Local computer">Local</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="form-inline controls-row">Attach.docx <span class="label" title="Google docs">Google</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="odd form-inline controls-row">document.docx <span class="label" title="Local computer">Local</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="form-inline controls-row">picture.jpg <span class="label" title="Covide file system">Covide</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="odd form-inline controls-row">document.docx <span class="label" title="Local computer">Local</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
						
						</ul>
				</div>
			</form>
		</div>
		<div class="tab-pane fieldset-group" id="tab_communication">
			<form>
				<div class="btn-group">
					<button class="btn btn-small" data-toggle="modal" href="_modals/newappointment_modal.php" data-target="#addappModal" ><i class="icon-calendar"></i> new appiontment</button>
					<!-- Start Add NEW APP Modal -->
					<div id="addappModal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addappModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addappModalLabel"><i class="icon-calendar"></i> Add appiontment</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add appiontment</button>
						</div>
					</div>
					<!-- End Add NEW APPModal -->
					
					<button class="btn btn-small" data-toggle="modal" href="_modals/email_compose_modal.php" data-target="#addemailModal" ><i class="icon-envelope-alt"></i> new email</button>
					<!-- Start Add NEW Email Modal -->
					<div id="addemailModal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addemailModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addemailModalLabel"><i class="icon-envelope-alt"></i> Add email</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add email</button>
						</div>
					</div>
					<!-- End Add NEW Email Modal -->
					
					<button class="btn btn-small" data-toggle="modal" href="_modals/add_note_modal.php" data-target="#addnoteModal" ><i class="icon-pencil"></i> new note</button>
					<!-- Start Add NEW Email Modal -->
					<div id="addnoteModal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addnoteModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addnoteModalLabel"><i class="icon-pencil"></i> Add note</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
							<button class="btn btn-warning">Add note</button>
						</div>
					</div>
					<!-- End Add NEW Email Modal -->
				</div>
			</form>

		</div>
    </div>
</div>