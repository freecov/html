<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab_compose" data-toggle="tab">Compose</a></li>
		<li><a href="#tab_links" data-toggle="tab">Links</a></li>
		<li><a href="#tab_access" data-toggle="tab">Access</a></li>
		<li><a href="#tab_attachments" data-toggle="tab">Attachments</a></li>
    </ul>
    
	<div class="tab-content">
		<div class="tab-pane active" id="tab_compose">
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
					</div>
					<div class="controls controls-row">
						<input class="span10" type="text" placeholder="Bc:">
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
		<div class="tab-pane fieldset-group" id="tab_links">
			<form>
				<legend><i class="icon-link"></i> Links</legend>
				<hr>
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<legend><i class="icon-book"></i> Contacts</legend>
							<div class="controls controls-row">
								<ul class="list-striped linked-ul inline">
									<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
									<li class="form-inline controls-row">Klant-CRM <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								</ul>	
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" ><i class="icon-search"></i> Search</button>
							</div>
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
								<ul class="list-striped linked-ul inline">
									<li class="odd form-inline controls-row">546444896 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
									<li class="form-inline controls-row">879789879 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								</ul>
							<input class="span8" type="text" placeholder="Type search contact">
							<button class="btn span4" type="button" ><i class="icon-search"></i> Search</button>
							</div>
						</fieldset>
					</div>
					<div class="span6">
						<fieldset>
							<legend><i class="icon-bar-chart"></i> Sales items</legend>
							<div class="controls controls-row">
								<ul class="list-striped linked-ul inline">
									<li class="odd form-inline controls-row">Item1 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
									<li class="form-inline controls-row">Item2 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
									<li class="odd form-inline controls-row">Item3 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								</ul>
								<input class="span8" type="text" placeholder="Type search contact">
								<button class="btn span4" type="button" ><i class="icon-search"></i> Search</button>
							</div>
						</fieldset>
					</div>
				</div>
			</form>
		</div>
	    <div class="tab-pane" id="tab_access">
			<form>
				<fieldset>
					<legend><i class="icon-lock"></i> Access</legend>
					<div class="controls controls-row">
						<input class="span6" type="text" placeholder="Free Field">
						<input class="span6" type="text" placeholder="Given Name">
					</div>
				</fieldset>
			</form>
		</div>
		<div class="tab-pane" id="tab_attachments">
			<form>
				<fieldset>
					<legend><i class="icon-paper-clip"></i> Attachments</legend>
					<div class="controls controls-row">
						<input class="span6" type="text" placeholder="Free Field">
						<input class="span6" type="text" placeholder="Given Name">
					</div>
				</fieldset>
			</form>
		</div>
    </div>
</div>