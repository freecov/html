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
				</fieldset>
			</form>
		</div>
		<div class="tab-pane" id="tab_links">
			<form>
				<fieldset>
					<legend><i class="icon-link"></i> Links</legend>
					<div class="controls controls-row">
						<input class="span6" type="text" placeholder="Free Field">
						<input class="span6" type="text" placeholder="Given Name">
					</div>
				</fieldset>
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