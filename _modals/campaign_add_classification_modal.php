			<div class="row-fluid fieldset-group">
				<div class="span6">
					<fieldset>
						<legend><i class="icon-exchange text-success"></i> Classification positive</legend>
						<div class="controls controls-row">
							<input class="span8" type="text" placeholder="Type search user">
							<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusers_cnclModal" ><i class="icon-plus"></i></button>
						</div>
						<ul class="list-striped linked-ul inline">
							<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="form-inline controls-row">Marijke <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
						</ul>	
					</fieldset>
				</div>
				
				<div class="span6">
					<fieldset>
						<legend><i class="icon-exchange text-error"></i> Classification negative</legend>
						<div class="controls controls-row">
							<input class="span8" type="text" placeholder="Type search user">
							<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusers_cncl2Modal" ><i class="icon-plus"></i></button>
						</div>
						<ul class="list-striped linked-ul inline">
							<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="form-inline controls-row">Marijke <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
						</ul>	
					</fieldset>
				</div>
	
				
	
				<!-- Start Users  Modal -->
                <div id="addusers_cnclModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusers_cnclModalLabel" aria-hidden="true">
					<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusers_cnclModalLabel"><i class="icon-user"></i> Add users</h4>
                    </div>
                    <div class="modal-body">
					</div>
                    <div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-warning">Add Users</button>
					</div>
				</div>
				<!-- End Users Modal -->
				
				<!-- Start Users Modal -->
                <div id="addusers_cncl2Modal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusers_cncl2ModalLabel" aria-hidden="true">
					<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusers_cncl2ModalLabel"><i class="icon-user"></i> Add users</h4>
                    </div>
                    <div class="modal-body">
					</div>
                    <div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-warning">Add Users</button>
					</div>
				</div>
				<!-- End Users Modal -->
				
			</div>