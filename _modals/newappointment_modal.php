<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab_maininfo" data-toggle="tab">Main information</a></li>
		<li><a href="#tab_links" data-toggle="tab">Links</a></li>
		<li><a href="#tab_attachments" data-toggle="tab">Attachments</a></li>
    </ul>
    
	<div class="tab-content">
		<div class="tab-pane fieldset-group active" id="tab_maininfo">
			<form>
				<legend><i class="icon-info-sign"></i> Main information</legend>

				<div class="row-fluid">
					<div class="span6">
						<fieldset>
								<legend><i class="icon-user"></i> For user</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" ><i class="icon-search"></i> Search</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-calendar"></i> Date</legend>
							<div class="controls controls-row ">
								<input type="text" class="span3" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Select date">
								<input type="text" class="span2" value="" placeholder="From">
								<input type="text" class="span2" value="" placeholder="To">
								<label class="checkbox inline pull-right"><input type="checkbox" value="All day event" > All day event</label>
							</div>
						</fieldset>
						<div class="alert alert-error margin-t">
							<i class="icon-warning-sign"></i> Already have an appointment at this time
						</div>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<legend><i class="icon-refresh"></i> Repeat</legend>
							<div class="controls controls-row">
								<select class="span8">
									<option>no repeat</option>
									<option value="1">daily</option>
									<option value="7">workdays</option>
									<option value="2">weekly</option>
									<option value="3">Monthly (by day)</option>
									<option value="4">Monthly (by day (from end of month))</option>
									<option value="5">Monthly (by date)</option>
									<option value="6">yearly</option>
								</select>
								<input type="text" class="span4" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Repeat end date">
							</div>

						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-bell"></i> Reminder</legend>
							<div class="controls controls-row ">
								<select class="span5">
									<option>minutes before start</option>
									<option value="1">15 minutes</option>
									<option value="7">30 minutes</option>
									<option value="2">45 minutes</option>
									<option value="3">60 minutes</option>
								</select>
								<input type="text" class="span3" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Select date">
								<input type="text" class="span2" value="" placeholder="Time">
							</div>
						</fieldset>
					</div>
				</div>

				<fieldset>
					<div class="controls controls-row">
						<input class="span12" type="text" placeholder="Subject:">
					</div>
					<div class="row-fluid">
						<div class="span10 margin-b"><img src="img/wysiwyg.png"></div>
						<div class="span2"><button class="btn btn-block active"  type="button"  data-toggle="button">HTML-mode</button></div>
					</div>
					<div class="controls controls-row">
						<textarea rows="4" class="span12"></textarea>
					</div>
				</fieldset>
				<fieldset>
					<legend><i class="icon-info-sign"></i> Extra options</legend>
					<div class="controls controls-row">
						<select class="span3">
							<option>Select importance</option>
							<option>Low</option>
							<option>Middle</option>
							<option>High</option>
						</select>
						<select class="span3">
							<option value="0" selected="selected">Select time</option>
							<option value="900">15 minutes</option>
							<option value="900">30 minutes</option>
							<option value="900">1 hour</option>
						</select>
						<select class="span3">
							<option>Type of appointment</option>
							<option>Low</option>
							<option>Middle</option>
							<option>High</option>
						</select>
						<select class="span3">
							<option value="0" selected="selected">Group meeting</option>
							<option value="900">15 minutes</option>
							<option value="900">30 minutes</option>
							<option value="900">1 hour</option>
						</select>
					</div>
				</fieldset>
				<fieldset>
					<legend><i class="icon-globe"></i> Location</legend>
					<div class="controls controls-row">
						<input class="span8" type="text" placeholder="Location">
						<input class="span2" type="text" placeholder="Distance">
						<button class="btn span2" type="button" ><i class="icon-globe"></i> View map</button>
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
								<legend><i class="icon-group"></i> Other users</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" ><i class="icon-search"></i> Search</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-envelope-alt"></i> Extra invites</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type email">
								<button class="btn span4" type="button" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">asdweq@gmail.com <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">ogjksaf@gmail.com <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<legend><i class="icon-book"></i> Contacts</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" ><i class="icon-search"></i> Search</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">Klant-CRM <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-list"></i> Project</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" ><i class="icon-search"></i> Search</button>
							</div>
						</fieldset>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<legend><i class="icon-lock"></i> Private</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" ><i class="icon-search"></i> Search</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Ynaoo <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">Masael <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>
						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-bar-chart"></i> Sales items</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" ><i class="icon-search"></i> Search</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Item1 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">Item2 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="odd form-inline controls-row">Item3 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>
						</fieldset>
					</div>
				</div>
				
			</form>
		</div>
		<div class="tab-pane" id="tab_attachments">
			<form>
				<fieldset class="attachment">
					<legend><i class="icon-paper-clip"></i> Attachments</legend>
						<div class="btn-group margin-b">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								Add attachment
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href=#>local computer</a></li>
								<li><a href=#>google docs</a></li>
								<li><a href=#>covide file system</a></li>
							</ul>
						</div>
						<ul class="list-striped linked-ul inline">
							<li class="odd form-inline controls-row">Attach.docx <span class="label" title="Google docs">Google</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="form-inline controls-row">picture.jpg <span class="label" title="Covide file system">Covide</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="odd form-inline controls-row">document.docx <span class="label" title="Local computer">Local</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="form-inline controls-row">Attach.docx <span class="label" title="Google docs">Google</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="odd form-inline controls-row">document.docx <span class="label" title="Local computer">Local</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="form-inline controls-row">picture.jpg <span class="label" title="Covide file system">Covide</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="odd form-inline controls-row">document.docx <span class="label" title="Local computer">Local</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
						
						</ul>
				</fieldset>
			</form>
		</div>
    </div>
</div>