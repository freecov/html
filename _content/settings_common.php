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
    <a class="current" href="settings.php?page=common">Common</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">

	   	<? include_once "_parts/settings_left_navigation.php"; ?>
	</div>

	<div class="span9">
        <div class="well well-covide">
           
		   <div class="well-title">
                <span class="title">Common</span>
            </div>
			
            
			<form >
				<div class="well well-small well-covide-g fieldset-group">
					<div class="row-fluid">
						<div class="span4">
							<fieldset>
								<legend>Name</legend>
								<div class="controls controls-row">
									<input class="span12" type="text" placeholder="Osdn" disabled>
								</div>
							</fieldset>
						</div>
						<div class="span2">
							<fieldset>
								<legend>Employee number</legend>
								<div class="controls controls-row">
									<input class="span12" type="text" placeholder="10024" disabled>
								</div>
							</fieldset>
						</div>
						<div class="span6">
							<fieldset>
								<legend>Last login</legend>
								<div class="controls controls-row">
									<input class="span6" type="text" placeholder="IP: 176.120.51.230" disabled>
									<input class="span6" type="text" placeholder="Date: 10-04-2013 21:07" disabled>
								</div>
							</fieldset>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span6">
							<fieldset>
								<legend>Password</legend>
								<div class="controls controls-row">
									<input class="span6" type="password" placeholder="Type password" >
									<input class="span6" type="password" placeholder="Confirm password" >
								</div>
							</fieldset>
						</div>
						<div class="span3">
							<fieldset>
								<legend>Language</legend>
								<div class="controls controls-row">
									<select class="span12"><option value="NL">Dutch; Flemish</option><option value="EN" selected="selected">English</option><option value="DE">German</option><option value="ES">Spanish; Castilian</option><option value="DA">Danish</option><option value="NO">Norwegian</option></select>
								</div>
							</fieldset>
						</div>
						<div class="span3">
							<fieldset>
								<legend>Address</legend>
								<div class="controls controls-row">
									<select class="span12"><option value="0" selected="selected">relationcards</option><option value="1">bussinesscards</option></select>									
								</div>
							</fieldset>
						</div>
					</div>
				</div>
				<button class="btn btn-warning" type="button"><i class="icon-save"></i> Save</button>
			</form>
        </div>
	</div>
</div>