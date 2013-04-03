<div class="row-fluid">
    <h2 class="span8 title-page">Add new calling list</h2>
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
	<a class="current" >Add new calling list</a>
	
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
                <span class="title">Add new calling list</span>
            </div>

			
			<? if ($_GET["step"]!=2 AND $_GET["step"]!=3){?>
			
			<ul class="nav nav-pills">
				<li class="active">
					<a href="campaign_add_new.php?campaign=calling_list&step=1">Pick classification(s)</a>
				</li>
				<li>
					<a href="campaign_add_new.php?campaign=calling_list&step=2">Show info</a>
				</li>
				<li>
					<a href="campaign_add_new.php?campaign=calling_list&step=3">Campaign details</a>
				</li>
			</ul>
			
			
			
			<div class="row-fluid fieldset-group">
				<div class="span3">
					<fieldset>
						<legend><i class="icon-book"></i> Address type</legend>
						<div class="controls controls-row">
							<label class="radio">
								<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
								active relations
							</label>
							<label class="radio">
								<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
								inactive relations
							</label>
							<label class="radio">
								<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
								business cards
							</label>
							<label class="radio">
								<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
								employees
							</label>
						</div>
					</fieldset>
				</div>
				<div class="span3">
					<fieldset>
						<legend><i class="icon-link"></i> Selection type</legend>
						<div class="controls controls-row">
							<label class="radio">
								<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
								unique classifications (AND)
							</label>
							<label class="radio">
								<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
								added classifications (OR)
							</label>
						</div>
					</fieldset>
				</div>
				
				<div class="span3">
					<fieldset>
						<legend><i class="icon-exchange text-success"></i> Classification positive</legend>
						<div class="controls controls-row">
							<input class="span8" type="text" placeholder="Type search user">
							<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusers_cnclModal" ><i class="icon-plus"></i></button>
						</div>
						<ul class="list-striped linked-ul inline">
							<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="form-inline controls-row">Marijke <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
						</ul>	
					</fieldset>
				</div>
				
				<div class="span3">
					<fieldset>
						<legend><i class="icon-exchange text-error"></i> Classification negative</legend>
						<div class="controls controls-row">
							<input class="span8" type="text" placeholder="Type search user">
							<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusers_cncl2Modal" ><i class="icon-plus"></i></button>
						</div>
						<ul class="list-striped linked-ul inline">
							<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="form-inline controls-row">Marijke <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
						</ul>	
					</fieldset>
				</div>
	
				
	
				<!-- Start Users  Modal -->
                <div id="addusers_cnclModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusers_cnclModalLabel" aria-hidden="true">
					<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusers_cnclModalLabel"><i class="icon-user"></i> Add users</h4>
                    </div>
                    <div class="modal-body">
					</div>
                    <div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-warning">Add Users</button>
					</div>
				</div>
				<!-- End Users Modal -->
				
				<!-- Start Users Modal -->
                <div id="addusers_cncl2Modal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusers_cncl2ModalLabel" aria-hidden="true">
					<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusers_cncl2ModalLabel"><i class="icon-user"></i> Add users</h4>
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
			<br>
			<div class="btn-group">
				<a class="btn disabled" ><i class="icon-chevron-left"></i> Back</a>
				<a class="btn" href="campaign_add_new.php?campaign=calling_list&step=2">Next <i class="icon-chevron-right"></i></a>
			</div>
			
			
			<? }if ($_GET["step"]==2){?>		
			
			<ul class="nav nav-pills">
				<li>
					<a href="campaign_add_new.php?campaign=calling_list&step=1">Pick classification(s)</a>
				</li>
				<li class="active">
					<a href="campaign_add_new.php?campaign=calling_list&step=2">Show info</a>
				</li>
				<li>
					<a href="campaign_add_new.php?campaign=calling_list&step=3">Campaign details</a>
				</li>
			</ul>
			
			
            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="15%">
                    <col width="15%">
                    <col width="20%">
                    <col width="15%">
                    <col width="15%">
                    <col width="15%">

                </colgroup>
                <thead>
                    <tr>
                        <th>Last name</th>
                        <th>Given name</th>
                        <th>Free field</th>
                        <th>Telephone</th>
                        <th>Mobile</th>
                        <th>Relation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Does customers</td>
                        <td>Quisque</td>
                        <td>Cras justo massa, mattis ac tempor</td>
                        <td>12312 312 312</td>
                        <td>1231 123 123 1</td>
                        <td>Maecenas</td>
                    </tr>
                             
                </tbody>
            </table>

            <div class="pagination pagination-right no-margin">
				<select class="span1" title="Items per page">
					<option>5</option>
					<option>10</option>
					<option>20</option>
					<option>50</option>
					<option selected>100</option>
					<option>200</option>
					<option>500</option>
					<option>1000</option>
				</select>
				<span class="help-inline">
					<ul>
						<li><a href="#">Prev</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				</span>
            </div>
			
			<div class="well-title">
                <span class="title">Classifications</span>
            </div>
			
			<table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="20%">
                    <col width="20%">
                    <col width="30%">
                    <col width="30%">
                </colgroup>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Selection</th>
                        <th>Positive classifications</th>
                        <th>Negative classifications</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>business cards</td>
                        <td>added classifications (OR)</td>
                        <td><i class="icon-exchange text-success"></i> Jeans1, Shirt1, Van Bommel type 1</td>
                        <td><i class="icon-exchange text-error"></i> Jeans2</td>
                    </tr>
                </tbody>
            </table>
		
			<div class="btn-group">
				<a class="btn" href="campaign_add_new.php?campaign=calling_list&step=1"><i class="icon-chevron-left"></i> Back</a>
				<a class="btn" href="campaign_add_new.php?campaign=calling_list&step=3">Next <i class="icon-chevron-right"></i></a>
			</div>
			
			<?}if ($_GET["step"]==3){?>
			
			<ul class="nav nav-pills">
				<li>
					<a href="campaign_add_new.php?campaign=calling_list&step=1">Pick classification(s)</a>
				</li>
				<li>
					<a href="campaign_add_new.php?campaign=calling_list&step=2">Show info</a>
				</li>
				<li  class="active">
					<a href="campaign_add_new.php?campaign=calling_list&step=3">Campaign details</a>
				</li>
			</ul>
			
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
							Type : <b>Calling list</b>
						</div>
					</fieldset>
				</div>
				<div class="span6">
					<fieldset>
						<legend><i class="icon-align-justify"></i> Response and reason</legend>

							<label>
								General response
							</label>
							<input class="span12" type="text" placeholder="Example: Interested">
							<label>
								Reasons
							</label>
							<input class="span12" type="text" placeholder="Example: Cheap">
							<input class="span12" type="text" placeholder="Example: Nice">
							<a href="#">Add new reason</a>

					</fieldset>
					
					<fieldset>
						<legend><i class="icon-align-justify"></i> Response and reason</legend>
						<div class="controls controls-row">
							<label>
								General response
							</label>
							<input class="span12" type="text" placeholder="Example: Interested">
							<label>
								Reason
							</label>
							<input class="span12" type="text" placeholder="Example: Cheap">
							<a href="#">Add new reason</a>
						</div>
					</fieldset>
					<br>
					<button class="btn" type="button">Add new response</button>
					
				</div>
			</div>
			
			<br>			
			
			<div class="btn-group">
				<a class="btn" href="campaign_add_new.php?campaign=calling_list&step=2"><i class="icon-chevron-left"></i> Back</a>
				<a class="btn btn-warning" href="campaign.php"><i class="icon-save"></i> Save</a>
			</div>
			
			<?}?>
        </div>
	</div>
</div>