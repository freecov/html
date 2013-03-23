<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab_compose_ecm" data-toggle="tab">Compose</a></li>
		<li><a href="#tab_links_ecm" data-toggle="tab">Links</a></li>
		<li><a href="#tab_access_ecm" data-toggle="tab">Access</a></li>
		<li><a href="#tab_attachments_ecm" data-toggle="tab">Attachments</a></li>
    </ul>
    
	<div class="tab-content">
		<div class="tab-pane active" id="tab_compose_ecm">
			<form>
				<fieldset>
					<legend><i class="icon-edit"></i> Compose</legend>
					<div class="controls controls-row">
						<input class="span10" type="text" placeholder="To:">
						<button class="btn span1"><i class="icon-envelope"></i></button>
						<button class="btn span1"><i class="icon-reorder"></i></button>
					</div>
					<div class="controls controls-row">
						<input class="span10" type="text" placeholder="Cc:">
						<button class="btn span1"><i class="icon-envelope"></i></button>
						<button class="btn span1"><i class="icon-reorder"></i></button>
					</div>
					<div class="controls controls-row">
						<input class="span10" type="text" placeholder="Bc:">
						<button class="btn span1"><i class="icon-envelope"></i></button>
						<button class="btn span1"><i class="icon-reorder"></i></button>
					</div>
					<div class="controls controls-row">
						<input class="span10" type="text" placeholder="Subject:">
						<select class="span2">
							<option>Select priority</option>
							<option>Low</option>
							<option>Middle</option>
							<option>High</option>
						</select>
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
		<div class="tab-pane fieldset-group" id="tab_links_ecm">
			<form>
				<legend><i class="icon-link"></i> Links</legend>
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
							<legend><i class="icon-phone"></i> Support calls</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" ><i class="icon-search"></i> Search</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">546444896 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								<li class="form-inline controls-row">879789879 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
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
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<legend><i class="icon-check"></i> To do</legend>
							<div class="row-fluid">
								<div class="input-prepend span6">
									<span class="add-on"><i class="icon-calendar"></i></span>
									<input type="text" class="span10"></input>
								</div>
								<div class="input-prepend span6">
									<span class="add-on"><i class="icon-time"></i></span>
									<input type="text" class="span10"></input>
								</div>
							</div>
						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-folder-open"></i> Folder after sending</legend>
							<select class="span12">
								<option>Select folder</option>
								<option>Default</option>
								<option>Sent</option>
								<option>Draft</option>
								<option>...</option>
							</select>
						</fieldset>
					</div>
				</div>
			</form>
		</div>
	    <div class="tab-pane fieldset-group" id="tab_access_ecm">
			<form>

					<div class="row-fluid">
						<div class="span10">
							<fieldset>
								<legend><i class="icon-group"></i> Access users and groups</legend>
								<div class="controls controls-row">
									<input class="span10" type="text" placeholder="Type search user or group users">
									<button class="btn span2" type="button" ><i class="icon-search"></i> Search</button>
								</div>
								<ul class="list-striped linked-ul inline">
									<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
									<li class="form-inline controls-row">Klant-CRM <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								</ul>	
							</fieldset>
						</div>
						<div class="span2">
							<fieldset>
								<legend><i class="icon-lock"></i> Access</legend>
								<label class="checkbox inline"><input type="checkbox" id="inlineCheckbox1" value="option1" checked> Public</label>
							</fieldset>
						</div>
					</div>

			</form>
		</div>
		<div class="tab-pane" id="tab_attachments_ecm">
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