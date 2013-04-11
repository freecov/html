<div class="row-fluid">
    <h2 class="span8 title-page">Settings</h2>
    <div class="span4 title-button pull-right">
 		<div class="fontSizeChange btn-group pull-right" data-toggle="buttons-radio">
            <button class="btn  btn-small size-small" type="button" data-size="small">A</button>
			<button class="btn  btn-small size-normal active" type="button" data-size="normal">A</button>
			<button class="btn  btn-small size-big" type="button" data-size="big">A</button>
        </div>
		<div class="btn-group pull-right">
             <button class="btn  btn-small dropdown-toggle" type="button" data-toggle="dropdown">
                <i class="icon-cogs"></i> Actions
                <span class="caret"></span>
             </button>
             <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-angle-right"></i> ...</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a href="settings.php">Settings</a>
    <a class="current" href="settings.php?page=email">Email</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">

	   	<? include_once "_parts/settings_left_navigation.php"; ?>
	</div>

	<div class="span9">
        <div class="well well-covide">
           
		   <div class="well-title">
                <span class="title">Email</span>
            </div>
			
            
		
				<div class="well well-small well-covide-g fieldset-group">
					
					<form>
						<div class="row-fluid">
							<div class="span6">
								<fieldset>
									<legend>Email</legend>
									<label>E-mail:</label>
									<input type="text" placeholder="Email">
									<label>E-mail (alternatief):</label>
									<input type="text" placeholder="E-mail">
									<label>Send copy to address (bcc):</label>
									<input type="text" placeholder="Bcc">
								</fieldset>

								<fieldset>
									<legend>Max attachment size</legend>
									<input type="text" placeholder="Max attachment size">
									<span class="help-block">Max attachment size to accept in KB</span>
								</fieldset>

								<fieldset>
									<legend>Editor</legend>
									<label>Width:</label>
									<input type="text" placeholder="Width editor in px">
									<span class="help-block">Default width editor in px</span>
									<label>Height:</label>
									<input type="text" placeholder="Height editor in px">
									<span class="help-block">Default height editor in px</span>
								</fieldset>
								
								<fieldset>
									<legend>Delete deleted/sent items after:</legend>
									<select name="user[mail_deltime]" id="usermail_deltime" class="inputselect"><option value="1">direct</option><option value="82801">1 day</option><option value="169201">2 days</option><option value="428401">5 days</option><option value="601201">1 week</option><option value="1206001" selected="selected">2 weeks</option><option value="1810801">3 weeks *</option><option value="2674801">1 month *</option><option value="5094001">2 months *</option><option value="15634801">3 months *</option><option value="31532401">1 year *</option><option value="-1">never *</option></select>
								</fieldset>

								<fieldset>
									<legend>Use short list view:</legend>
									<div class="controls controls-row">
										<label class="radio inline">
											<input type="radio" name="optionsRadiosshort" id="optionsRadios1" value="option1" checked>
											No
										</label>
										<label class="radio inline">
											<input type="radio" name="optionsRadiosshort" id="optionsRadios2" value="option2">
											Yes
										</label>
									</div>
								</fieldset>

								<fieldset>
									<legend>Show archived state:</legend>
									<div class="controls controls-row">
										<label class="radio inline">
											<input type="radio" name="optionsRadiosarchived" id="optionsRadios1" value="option1" checked>
											No (fast)
										</label>
										<label class="radio inline">
											<input type="radio" name="optionsRadiosarchived" id="optionsRadios2" value="option2">
											Yes (slow)
										</label>
									</div>
								</fieldset>
								
								<fieldset>
									<legend>Mail is default private:</legend>
									<div class="controls controls-row">
										<label class="radio inline">
											<input type="radio" name="optionsRadiosprivate" id="optionsRadios1" value="option1" checked>
											No
										</label>
										<label class="radio inline">
											<input type="radio" name="optionsRadiosprivate" id="optionsRadios2" value="option2">
											Yes
										</label>
									</div>
								</fieldset>
								
								<br>
								<button class="btn btn-small" type="button">Email addresses/signatures</button>
								<button class="btn btn-small" type="button">Fetch e-mail for this user</button>
								<button class="btn btn-small btn-danger" type="button">Empty remote gmail sent mail folder (no way back)</button>
								
								
							</div>
							<div class="span6">
								<fieldset>
									<legend>Mail protocol</legend>
									<select name="user[mail_imap]" id="usermail_imap" class="inputselect"><option value="0">POP3 or POP3/start-TLS</option><option value="1" selected="selected">IMAP or IMAP/start-TLS</option><option value="2">IMAP/Secure Sockets Layer</option><option value="3">POP3 Without SSL support</option></select>
								</fieldset>
								
								<fieldset>
									<legend>Mailserver</legend>
									<label>Mailserver:</label>
									<input type="text" placeholder="Mailserver">
									<label>Username:</label>
									<input type="text" placeholder="Username">
									<label>Password:</label>
									<input type="password" placeholder="Password">
								</fieldset>
								
								<fieldset>
									<legend>Remove mail from server after:</legend>
									<select name="user[mail_server_deltime]" id="usermail_server_deltime" class="inputselect"><option value="1" selected="selected">direct</option><option value="82801">1 day</option><option value="169201">2 days</option><option value="428401">5 days</option><option value="601201">1 week</option><option value="1206001">2 weeks</option><option value="1810801">3 weeks *</option><option value="2674801">1 month *</option><option value="5094001">2 months *</option><option value="15634801">3 months *</option><option value="31532401">1 year *</option><option value="-1">never *</option></select>
									<span class="help-block">* = only with IMAP</span>
								</fieldset>
								
								<fieldset>
									<legend>Sync sent mail from GMail:</legend>
									<div class="controls controls-row">
									
										<label class="radio inline">
											<input type="radio" name="optionsRadios1"  value="option1" checked>
											No
										</label>
										<label class="radio inline">
											<input type="radio" name="optionsRadios1"  value="option2">
											Yes
										</label>
									</div>									
									
								</fieldset>

								<fieldset>
									<legend>Mail layout:</legend>
									<div class="controls controls-row">
										<label class="radio inline">
											<input type="radio" name="optionsRadios4" value="option1" checked>
											Text
										</label>
										<label class="radio inline">
											<input type="radio" name="optionsRadios4" value="option2">
											Html
										</label>
									</div>
									
								</fieldset>

								<fieldset>
									<legend>Show HTML email as plain text:</legend>
										<div class="controls controls-row">
											<label class="radio inline">
												<input type="radio" name="optionsRadios2" value="option1" checked>
												No
											</label>
											<label class="radio inline">
												<input type="radio" name="optionsRadios2" value="option2">
												Yes
											</label>
										</div>
								</fieldset>	

								<fieldset>
									<legend>Default template:</legend>
									<select name="user[mail_default_template]" id="usermail_default_template" class="inputselect"><option value="0" selected="selected">none</option></select>
								</fieldset>	
								<fieldset>
									<legend>Hide cmsforms folders:</legend>
										<div class="controls controls-row">
											<label class="radio inline">
												<input type="radio" name="optionsRadioscmsforms" value="option1" checked>
												No
											</label>
											<label class="radio inline">
												<input type="radio" name="optionsRadioscmsforms" value="option2">
												Yes
											</label>
										</div>
								</fieldset>	

								<fieldset>
									<legend>Default mail sort:</legend>
									<select name="user[default_mail_sort]" id="userdefault_mail_sort" class="inputselect"><option value="unread" selected="selected">unread first, then date (default)</option><option value="date_only">date</option></select>
								</fieldset>

							</div>	
						</div>							

					</form>
					
				</div>
				<button class="btn btn-warning" type="button"><i class="icon-save"></i> Save</button>				

        </div>
	</div>
</div>