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
    <a class="current" href="settings.php?page=calendar">Calendar</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">

	   	<? include_once "_parts/settings_left_navigation.php"; ?>
	</div>

	<div class="span9">
        <div class="well well-covide">
           
		   <div class="well-title">
                <span class="title">Calendar</span>
            </div>
			
            
			<div class="well well-small well-covide-g fieldset-group">
				<form>
					<div class="row-fluid">
						<div class="span6">
							<fieldset>
								<legend>Default multi-user calendar view</legend>
								<div class="controls controls-row">
									<select class="span12"><option value="1" selected="selected">daily view</option><option value="2">monthly calendar</option><option value="3">weekly view</option><option value="4">daily view with weekview</option></select>
								</div>
							</fieldset>
						
							<fieldset>
								<legend>Default calendar interval</legend>
								<div class="controls controls-row">
									<select class="span12"><option value="5">5</option><option value="6">6</option><option value="15" selected="selected">15</option><option value="30">30</option><option value="60">60</option></select>
								</div>
							</fieldset>
						
							<fieldset>
								<legend>Default calendar slot interval</legend>
								<div class="controls controls-row">
									<select class="span12"><option value="5" selected="selected">5</option><option value="6">6</option><option value="15">15</option><option value="30">30</option><option value="60">60</option></select>
								</div>
							</fieldset>
							
							<fieldset>
								<legend>Default calendar timeformat</legend>
									<div class="controls controls-row">
										<label class="radio inline">
											<input type="radio" name="optionsRadiostimeformat" id="optionsRadios1" value="option1" checked>
											12 hour
										</label>
										<label class="radio inline">
											<input type="radio" name="optionsRadiostimeformat" id="optionsRadios2" value="option2">
											24 hour
										</label>
									</div>
							</fieldset>

						</div>
						<div class="span6">
							<fieldset>
								<legend>Calendar start hour</legend>
								<div class="controls controls-row">
									<select class="span12"><option value="0" selected="selected">24 hour</option><option value="1">12 hour</option></select>
								</div>
							</fieldset>
							
							<fieldset>
								<legend>Default calendar selection</legend>
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
					</div>
			</div>
				<button class="btn btn-warning" type="button"><i class="icon-save"></i> Save</button>

			
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
				
				
        </div>
	</div>
</div>