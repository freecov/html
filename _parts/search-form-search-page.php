<div class="well well-covide search-widget">
    <div class="well-title">
        <span class="title">Filter by </span>
        <div class="btn-group pull-right" data-toggle="buttons-radio">
            <button class="btn btn-small" type="button" data-extra="show"><i class="icon-caret-down"></i></button>
            <button class="btn btn-small active" type="button" data-extra="hide"><i class="icon-caret-up"></i></button>
        </div>
    </div>

    <form class="search-form">
        <input type="text" class="main-search" placeholder="Search">

        <div class="extra-wrap">
            <hr>
            
					<div class="fieldset-group">
						<div class="row-fluid">
							<div class="span4">
								<fieldset>
									<legend><i class="icon-calendar"></i> Dates</legend>
									<div class="controls controls-row">
										<input type="text" class="span6" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Select start date">
										<input type="text" class="span6" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Select end date">
									</div>
								</fieldset>

								<fieldset>
									<legend><i class="icon-lock"></i> Search inside items of the group</legend>
									<div class="controls controls-row">
										<label class="radio">
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											in my private items
										</label>
										<label class="radio">
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
											in private and public items
										</label>
									</div>
								</fieldset>
							</div>
							<div class="span4">
								<fieldset>
									<legend><i class="icon-book"></i> Address</legend>
									<div class="controls controls-row">
										<input class="span10" type="text" placeholder="Type search contact">
										<button class="btn span2" type="button" data-toggle="modal" href="_modals/add_contact_classification_modal.php" data-target="#addcontactModal" ><i class="icon-plus"></i> Add</button>
									</div>
									<ul class="list-striped linked-ul inline">
										<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
										<li class="form-inline controls-row">Klant-CRM <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
									</ul>	
								</fieldset>
							</div>
							<div class="span4">
								<fieldset>
									<legend><i class="icon-sitemap"></i> Search in modules</legend>
									<div class="controls controls-row">
										<label class="checkbox">
											<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											address book
										</label>
										<label class="checkbox">
											<input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
											calendar
										</label>
										<label class="checkbox">
											<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											notes / customer contact items
										</label>
										<label class="checkbox">
											<input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
											email (messages)
										</label>
										<label class="checkbox">
											<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											email (inside attachments)*
										</label>
										<label class="checkbox">
											<input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
											file management (global)*
										</label>
										<label class="checkbox">
											<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											file management (inside files)*
										</label>
										<label class="checkbox">
											<input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
											support
										</label>
										<label class="checkbox">
											<input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
											projects
										</label>
										<label class="checkbox">
											<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											sales
										</label>
										*  only when searching in public items
									</div>
								</fieldset>
							</div>
						</div>
					</div>
			
            <hr>
            <br>
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
		
        <div>
            <a href="#"><i class="icon-reply"></i> Reset conditions</a>
            <button type="submit" class="btn pull-right"><i class="icon-search"></i> Search</button>
        </div>
    </form>
</div>