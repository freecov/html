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
    <a class="current" href="settings.php?page=misc">Miscellaneous</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">

	   	<? include_once "_parts/settings_left_navigation.php"; ?>
	</div>

	<div class="span9">
        <div class="well well-covide">
           
		   <div class="well-title">
                <span class="title">Miscellaneous</span>
            </div>
            <div class="well well-small well-covide-g fieldset-group">
				<form>
					<div class="row-fluid">
						<div class="span6">
							<fieldset>
								<legend>Editor preference:</legend>
								<select name="user[htmleditor]" id="userhtmleditor" class="inputselect"><option value="0" selected="selected">None</option><option value="2">tinyMCE (advanced)</option><option value="3">Wyzz (simple)</option></select>
							</fieldset>
							
							<fieldset>
								<legend>Play sound with alerts:</legend>
								<div class="controls controls-row">
									<label class="radio inline">
										<input type="radio" name="optionsRadiossound" id="optionsRadios1" value="option1" checked>
										No
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadiossound" id="optionsRadios2" value="option2">
										Yes
									</label>
								</div>
							</fieldset>

							<fieldset>
								<legend>Quote of the day:</legend>
								<div class="controls controls-row">
									<label class="radio inline">
										<input type="radio" name="optionsRadiosQuote" id="optionsRadios1" value="option1" checked>
										No
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadiosQuote" id="optionsRadios2" value="option2">
										Yes
									</label>
								</div>
							</fieldset>
							
							<fieldset>
								<legend>Rss feeds:</legend>
								<div class="controls controls-row">
									<label class="radio inline">
										<input type="radio" name="optionsRadiosrss" id="optionsRadios1" value="option1" checked>
										No
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadiosrss" id="optionsRadios2" value="option2">
										Yes
									</label>
								</div>
							</fieldset>
							
							<fieldset>
								<legend>Show birthdays:</legend>
								<div class="controls controls-row">
									<label class="radio inline">
										<input type="radio" name="optionsRadiosbirthdays" id="optionsRadios1" value="option1" checked>
										No
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadiosbirthdays" id="optionsRadios2" value="option2">
										Yes
									</label>
								</div>
							</fieldset>

							<fieldset>
								<legend>Show performance info:</legend>
								<div class="controls controls-row">
									<label class="radio inline">
										<input type="radio" name="optionsRadiosbirthdays" id="optionsRadios1" value="option1" checked>
										No
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadiosbirthdays" id="optionsRadios2" value="option2">
										Yes
									</label>
								</div>
							</fieldset>

							<fieldset>
								<legend>Show only assigned todo's:</legend>
								<div class="controls controls-row">
									<label class="radio inline">
										<input type="radio" name="optionsRadiosbirthdays" id="optionsRadios1" value="option1" checked>
										No
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadiosbirthdays" id="optionsRadios2" value="option2">
										Yes
									</label>
								</div>
							</fieldset>
						</div>
						<div class="span6">
							<fieldset>
								<legend>Voip</legend>
								<label>Login:</label>
								<input type="text" placeholder="Login">
								<label>Number:</label>
								<input type="text" placeholder="Number">
								<label>Password:</label>
								<input type="password" placeholder="Password"><br>
								<legend>Show popups for voip:</legend>
								<div class="controls controls-row">
									<label class="radio inline">
										<input type="radio" name="optionsRadiosvoip" id="optionsRadios1" value="option1" checked>
										No
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadiosvoip" id="optionsRadios2" value="option2">
										Yes
									</label>
								</div>
							</fieldset>
							
							<fieldset>
								<legend>Items per folder:</legend>
								<select name="user[mail_num_items]" id="usermail_num_items" class="inputselect"><option value="5">5</option><option value="10">10</option><option value="20" selected="selected">20</option><option value="50">50</option><option value="100">100</option><option value="200">200</option><option value="500">500</option><option value="1000">1000</option></select>
							</fieldset>
							
							<fieldset>
								<legend>Popups as new window:</legend>
								<div class="controls controls-row">
									<label class="radio inline">
										<input type="radio" name="optionsRadiosPopups" id="optionsRadios1" value="option1" checked>
										No
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadiosPopups" id="optionsRadios2" value="option2">
										Yes
									</label>
								</div>
							</fieldset>
							
							<fieldset>
								<legend>Override font / font size</legend>
								<label>Font:</label>
								<select name="user[font]" id="userfont" class="inputselect"><option value="0" selected="selected">default font</option><option value="arial,serif">Arial</option><option value="courier,monospace">Courier</option><option value="georgia,serif">Georgia</option><option value="palatino,serif">Palatino Linotype</option><option value="tahoma,serif">Tahoma</option><option value="times,serif">Times</option><option value="verdana,serif">Verdana</option><option value="trebuchet ms,sans-serif">Trebuchet MS</option></select>
								<label>Font size:</label>
								<select name="user[fontsize]" id="userfontsize" class="inputselect"><option value="0" selected="selected">default size</option><option value="1">8px</option><option value="2">10px</option><option value="3">12px</option><option value="4">14px</option></select>
							</fieldset>
						</div>	
					</div>							
				</form>
            </div>
			<button class="btn btn-warning" type="button"><i class="icon-save"></i> Save</button>


        </div>
	</div>
</div>