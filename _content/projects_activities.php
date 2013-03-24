<div class="row-fluid">
    <h2 class="span8 title-page">Projects - Manage Activities</h2>
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
                <li><a href="projects_activities.php"><i class="icon-angle-right"></i> Manage activities</a></li>
				<li><a href="projects_activities_groups.php"><i class="icon-angle-right"></i> Manage activity groups</a></li>
                <li><a href="projects_manage_project_costs.php"><i class="icon-angle-right"></i> Manage other project costs</a></li>
                <li><a href="projects_hour_overview.php"><i class="icon-angle-right"></i> Hour overview</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Settings</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a href="projects.php">Projects</a>
	<a class="current" href="projects_activities.php">Manage Activities</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'btn-warning'; ?>
	   	<? include_once "_parts/projects_left_navigation.php"; ?>
	</div>

	<div class="span9">

        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Manage Activities</span>
            </div>
 

            <table class="table table-condensed table-striped table-hover table-activities">
                <colgroup>
                    <col width="30%">
                    <col width="15%">
                    <col width="35%">
                    <col width="10%">
                    <col width="10%">
                </colgroup>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Group</th>
                        <th>User</th>
                        <th>Sale tarif</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="span12" type="text" value="Programma" placeholder="name"></td>
                        <td>
							<select class="span12">
								<option>Select group</option>
								<option value="2">gespreksnotitie</option>
								<option value="3">new group</option>
							</select>
						</td>
                        <td>
							<div class="controls controls-row">
								<input class="span5" type="text" placeholder="Type search user">
								<button class="btn span3" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusers_activ2Modal" ><i class="icon-plus"></i> Add</button>
								<ul class="list-striped linked-ul inline span4">
									<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								</ul>	
							</div>
						</td>
                        <td><input class="span12" type="text" value="2.00" placeholder="Sale tafif"></td>
                        <td>
							<div class="btn-group span12">
								<button class="btn btn-small span6 btn-warning"><i class="icon-save"></i></button>
								<button class="btn btn-small span6 btn-danger"><i class="icon-trash"></i></button>
							</div>
						</td>
                    </tr>
					<tr>
                        <td><input class="span12" type="text" value="Quisque" placeholder="name"></td>
                        <td>
							<select class="span12">
								<option>Select group</option>
								<option value="2">gespreksnotitie</option>
								<option value="3">new group</option>
							</select>
						</td>
                        <td>
							<div class="controls controls-row">
								<input class="span5" type="text" placeholder="Type search user">
								<button class="btn span3" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusers_activ1Modal" ><i class="icon-plus"></i> Add</button>
								<ul class="list-striped linked-ul inline span4">
									<li class="odd form-inline controls-row">Suspendisse  <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
								</ul>	
							</div>
						</td>
                        <td><input class="span12" type="text" value="4.00" placeholder="Sale tafif"></td>
                        <td>
							<div class="btn-group span12">
								<button class="btn btn-small span6 btn-warning"><i class="icon-save"></i></button>
								<button class="btn btn-small span6 btn-danger"><i class="icon-trash"></i></button>
							</div>
						</td>
                    </tr>
                </tbody>
            </table>
			<!-- Start Users addusers_activ1 Modal -->
            <div id="addusers_activ1Modal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusers_activ1ModalLabel" aria-hidden="true">
				<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
						<h4 id="addusers_activ1ModalLabel"><i class="icon-user"></i> Add users</h4>
                </div>
                <div class="modal-body">
				</div>
                <div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning">Add Users</button>
				</div>
			</div>
			<!-- End Users addusers_activ1 Modal -->
			
			<!-- Start Users addusers_activ2 Modal -->
            <div id="addusers_activ2Modal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusers_activ2ModalLabel" aria-hidden="true">
				<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
						<h4 id="addusers_activ2ModalLabel"><i class="icon-user"></i> Add users</h4>
                </div>
                <div class="modal-body">
				</div>
                <div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning">Add Users</button>
				</div>
			</div>
			<!-- End Users addusers_activ2 Modal -->
			
			
			<div class="well-title">
                <span class="title">Add New Activity</span>
            </div>

			
				<table class="table table-condensed table-striped table-hover table-activities">
					<colgroup>
						<col width="30%">
						<col width="15%">
						<col width="35%">
						<col width="10%">
						<col width="10%">
					</colgroup>
					<thead>
                    <tr>
                        <th>Name</th>
                        <th>Group</th>
                        <th>User</th>
                        <th>Sale tarif</th>
                        <th></th>
                    </tr>
					</thead>
					<tbody>
						<tr>
							<td><input class="span12" type="text" value="" placeholder="Name"></td>
							<td>
								<select class="span12">
									<option>Select group</option>
									<option value="2">gespreksnotitie</option>
									<option value="3">new group</option>
								</select>
							</td>
							<td>
								<div class="controls controls-row">
									<input class="span5" type="text" placeholder="Type search user">
									<button class="btn span3" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#addusers_activ3Modal" ><i class="icon-plus"></i> Add</button>
									<ul class="list-striped linked-ul inline span4">
										<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
									</ul>	
								</div>
							</td>
							<td><input class="span12" type="text" value="" placeholder="Sale tafif"></td>
							<td>
								<button class="btn btn-small btn-block btn-warning"><i class="icon-save"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
				<!-- Start Users addusers_activ3 Modal -->
				<div id="addusers_activ3Modal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addusers_activ3ModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="addusers_activ3ModalLabel"><i class="icon-user"></i> Add users</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-warning">Add Users</button>
					</div>
				</div>
				<!-- End Users addusers_activ3 Modal -->
			


        </div>
	</div>
</div>