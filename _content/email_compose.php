<div class="row-fluid">
    <h2 class="span8 title-page">Email</h2>
    <div class="span4 title-button pull-right">
 		<div class="fontSizeChange btn-group pull-right" data-toggle="buttons-radio">
            <button class="btn btn-small size-small" data-size="small">A</button>
			<button class="btn btn-small size-normal active" data-size="normal">A</button>
			<button class="btn btn-small size-big" data-size="big">A</button>
        </div>
		<div class="btn-group pull-right">
             <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
                <i class="icon-cogs"></i> Actions
                <span class="caret"></span>
             </button>
             <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-angle-right"></i> Manage predefined content</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage e-mail filters</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage e-mail templates</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage shared folders</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Check newsletter e-mail addresses</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Force e-mail retrieval</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> To autoreply</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> To Google spam box</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a href="email.php">Email</a>
	<a class="current" href="email_compose.php">Compose</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeCompose = 'disabled'; ?>
	    <? include_once "_parts/email_left_navigation.php"; ?>
	</div>

	<div class="span9">
        <div class="well well-covide">
			<div class="btn-toolbar">
				<button class="btn btn-large btn-warning">Send email</button>
				<button class="btn btn-large">Save</button>
				<div class="btn-group">
					<a class="btn btn-large dropdown-toggle" data-toggle="dropdown" href="#">
						More
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu text-left">
						<li><a href=#>Change From email</a></li>
						<li><a href=#>Add star</a></li>
						<li><a href=#>Print</a></li>
						<li><a href=#>Change mode</a></li>
						<li class="divider"></li>
						<li><a href=#>Discard draft</a></li>
					</ul>
				</div>
			</div>

			<form>

					<div class="controls controls-row">
						<select class="span12">
							<option>From default email address</option>
							<option>test@gmail.com</option>
							<option>address@gmail.com</option>
							<option>example@gmail.com</option>
						</select>
					</div>
					<div class="controls controls-row">
						<input class="span10" type="text" placeholder="To:">
						<button type="button" class="btn span1"><i class="icon-envelope"></i></button>
						<button type="button" class="btn span1"><i class="icon-reorder"></i></button>
					</div>
					<div class="controls controls-row">
						<input class="span10" type="text" placeholder="Cc:">
						<button type="button" class="btn span1"><i class="icon-envelope"></i></button>
						<button type="button" class="btn span1"><i class="icon-reorder"></i></button>
					</div>
					<div class="controls controls-row">
						<input class="span10" type="text" placeholder="Bc:">
						<button type="button" class="btn span1"><i class="icon-envelope"></i></button>
						<button type="button" class="btn span1"><i class="icon-reorder"></i></button>
					</div>

            
					<div class="well well-small well-covide-g fieldset-group">
						<div class="row-fluid">
							<span class="title"><i class="icon-link"></i> Links</span>
							<div class="btn-group pull-right" data-toggle="buttons-radio">
								<button class="btn active" type="button" data-extra="show"><i class="icon-caret-down"></i></button>
								<button class="btn" type="button" data-extra="hide"><i class="icon-caret-up"></i></button>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span6">
								<fieldset>
									<legend><i class="icon-book"></i> Contacts</legend>
									<div class="controls controls-row">
										<input class="span10" type="text" placeholder="Type search contact">
										<button class="btn span2" type="button" ><i class="icon-search"></i></button>
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
										<input class="span10" type="text" placeholder="Type search contact">
										<button class="btn span2" type="button" ><i class="icon-search"></i></button>
									</div>
								</fieldset>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span6">
								<fieldset>
									<legend><i class="icon-phone"></i> Support calls</legend>
									<div class="controls controls-row">
										<input class="span10" type="text" placeholder="Type search contact">
										<button class="btn span2" type="button" ><i class="icon-search"></i></button>
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
										<input class="span10" type="text" placeholder="Type search contact">
										<button class="btn span2" type="button" ><i class="icon-search"></i></button>
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
					</div>
					<div class="well well-small well-covide-g fieldset-group">
						<div class="row-fluid">
							<span class="title"><i class="icon-lock"></i> Access</span>
							<div class="btn-group pull-right" data-toggle="buttons-radio">
								<button class="btn active" type="button" data-extra="show"><i class="icon-caret-down"></i></button>
								<button class="btn" type="button" data-extra="hide"><i class="icon-caret-up"></i></button>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span10">
								<fieldset>
									<legend><i class="icon-group"></i> Access users and groups</legend>
									<div class="controls controls-row">
										<input class="span10" type="text" placeholder="Type search user or group users">
										<button class="btn span2" type="button" ><i class="icon-search"></i></button>
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
					</div>
					<div class="well well-small well-covide-g fieldset-group">
						<div class="row-fluid">
							<span class="title"><i class="icon-paper-clip"></i> Attachments</span>
							<div class="btn-group pull-right" data-toggle="buttons-radio">
								<button class="btn active" type="button" data-extra="show"><i class="icon-caret-down"></i></button>
								<button class="btn" type="button" data-extra="hide"><i class="icon-caret-up"></i></button>
							</div>
						</div>
						<fieldset>
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
					</div>
				
					<div class="controls controls-row">
						<input class="span12" type="text" placeholder="Subject:">
					</div>
				
					<div class="row-fluid">
						<div class="span10 margin-b"><img src="img/wysiwyg.png"></div>
						<div class="span2"><button class="btn btn-block active"  type="button"  data-toggle="button">HTML-mode</button></div>
					</div>
					<div class="controls controls-row">
						<textarea rows="8" class="span12"></textarea>
					</div>

					<div class="btn-toolbar">
						<button class="btn btn-large btn-warning">Send email</button>
						<button class="btn btn-large">Save</button>
						<div class="btn-group dropup">
							<a class="btn btn-large dropdown-toggle" data-toggle="dropdown" href="#">
								More
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu text-left">
								<li><a href=#>Change From email</a></li>
								<li><a href=#>Add star</a></li>
								<li><a href=#>Print</a></li>
								<li><a href=#>Change mode</a></li>
								<li class="divider"></li>
								<li><a href=#>Discard draft</a></li>
							</ul>
						</div>
					</div>
			</form>
        </div>
	</div>
</div>