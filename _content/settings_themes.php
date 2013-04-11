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
    <a class="current" href="settings.php?page=themes">Themes</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">

	   	<? include_once "_parts/settings_left_navigation.php"; ?>
	</div>

	<div class="span9">
        <div class="well well-covide">
           
		   <div class="well-title">
                <span class="title">Themes</span>
            </div>
            <div class="well well-small well-covide-g fieldset-group">
				<form>
					<div class="row-fluid">
						<div class="span4">
							<img src="img/theme1.jpg" class="img-polaroid">
						</div>
						<div class="span8">
						
							<div class="controls controls-row">
								<label class="radio">
									<input type="radio" name="optionsRadiosTHEMES" id="optionsRadios1" value="option1" checked>
									Covide IX	
								</label>
								<label class="radio">
									<input type="radio" name="optionsRadiosTHEMES" id="optionsRadios2" value="option2">
									Covide white	
								</label>
								<label class="radio">
									<input type="radio" name="optionsRadiosTHEMES" id="optionsRadios1" value="option3">
									SilverLightning		
								</label>
								<label class="radio">
									<input type="radio" name="optionsRadiosTHEMES" id="optionsRadios2" value="option4">
									SunSet
								</label>
							</div>

						</div>	
					</div>							
				</form>
            </div>
			<button class="btn btn-warning" type="button"><i class="icon-save"></i> Save</button>

        </div>
	</div>
</div>