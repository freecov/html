<div class="row-fluid">
    <h2 class="span8 title-page">Add new template/mailing</h2>
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
                <li><a href="#"><i class="icon-angle-right"></i> Active campaign</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Archive campaign</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a href="campaign.php">Campaign</a>
	<a class="current" >Add new template/mailing</a>
	
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'disabled'; ?>
	   	<? include_once "_parts/campaign_left_navigation.php"; ?>
	</div>

	<div class="span9">


        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Add new template/mailing</span>
            </div>
	
			<div class="row-fluid fieldset-group">
				<div class="span6">
					<fieldset>
						<legend><i class="icon-info-sign"></i> Information campaign</legend>
						<div class="controls controls-row">
							<label>
								Title of campaign
							</label>
							<input class="span12" type="text" placeholder="Example: Does customers like product X">
							<label>
								Description
							</label>
							<textarea rows="8" class="span12"></textarea>
							Type : <b>Template/mailing</b>
						</div>
					</fieldset>
				</div>
				
			</div>
			
			<br>			

			<a class="btn btn-warning" href="campaign.php"><i class="icon-save"></i> Save</a>
		
        </div>
	</div>
</div>