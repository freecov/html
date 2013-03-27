<div class="row-fluid">
    <h2 class="span8 title-page">Project Curabitur</h2>
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
	<a class="current" href="projects_overview.php">Curabitur</a>
	
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
                <span class="title">Curabitur</span>

				<div class="btn-group pull-right">
					<a class="btn" data-toggle="modal" href="_modals/add_project_modal.php" data-target="#addproject_po_Modal"><i class="icon-edit"></i> Edit</a>
					<a class="btn" data-toggle="modal" href="_modals/hour_registration_modal.php" data-target="#hourregistration_po_Modal"><i class="icon-time"></i> Input costs</a>
					<a class="btn" href="#"><i class="icon-align-justify"></i> Extended</a>
				</div>
            </div>
			
			
			<!-- Start Add Project Modal -->
			<div id="addproject_po_Modal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addproject_po_ModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
					<h4 id="addproject_po_ModalLabel"><i class="icon-list"></i> Add project</h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning">Add project</button>
				</div>
			</div>
			<!-- End Add Project Modal -->
			
			<!-- Start hourregistration Modal -->
			<div id="hourregistration_po_Modal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="hourregistration_po_ModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
					<h4 id="hourregistration_po_ModalLabel"><i class="icon-time"></i> Hour registration</h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning">Save</button>
				</div>
			</div>
			<!-- End hourregistration Modal -->
			
			
			
            <table class="table table-condensed table-striped table-hover table-activities">
                <colgroup>
                    <col>
                    <col width="12%">
                    <col width="15%">
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Last sent invoice</th>
                        <th>Invoice to</th>
						<th>Description</th>
						<th>Manager</th>
						<th>Executor</th>
						<th>Access</th>
                        <th>Active</th>
						<th>Contact</th>
						<th>Businesscard</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Curabitur</td>
                        <td>Never</td>
                        <td><input type="text" class="datepicker_input" value="12-03-2013" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="date"> <button class="btn btn-small">Set</button></td>
                        <td>Donec venenatis euismod elit non semper. </td>
						<td>Osdn</td>
						<td>Robbert</td>
						<td>Robbert, Willem, Tom</td>
						<td><button class="btn btn-small btn-success" type="button"><i class="icon-ok-circle"></i></button></td>
						<td><a href=#>Terrazur</a></td>
						<td><a href=#>Henk van der Sloot</a></td>
                    </tr>
					
                </tbody>
            </table>
			
			<div class="well well-small well-covide-g text-center">
				<div class="btn-group">
					<a class="btn" data-toggle="modal" href="_modals/list_notes_modal.php" data-target="#listnotes_po_Modal"><i class="icon-pencil"></i> Notes <span class="badge">1 / 3</span></a>
					<a class="btn" data-toggle="modal" href="_modals/list_todos_modal.php" data-target="#listtodos_po_Modal"><i class="icon-check"></i> To do's <span class="badge">5</span></a>
					<a class="btn" data-toggle="modal" href="_modals/list_appointment_modal.php" data-target="#listapp_po_Modal"><i class="icon-calendar"></i> Calendar <span class="badge">3</span></a>
					<a class="btn" data-toggle="modal" href="_modals/file_m_modal.php" data-target="#file_m_po_Modal"><i class="icon-folder-open"></i> Files</a>
					<button class="btn"><i class="icon-paper-clip"></i> Google files</button>
					<button class="btn"><i class="icon-bar-chart"></i> Sales</button>
					<button class="btn"><i class="icon-envelope-alt"></i> Email <span class="badge">6 / 3</span></button>
					<button class="btn"><i class="icon-bolt"></i> Customer care <span class="badge">8 / 10</span></button>
					<button class="btn disabled"><i class="icon-exchange"></i> Classification import-201211161529</button>
				</div>
			</div>
			
			<!-- Start Notes Modal -->
				<div id="listnotes_po_Modal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="listnotes_po_ModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
						<h4 id="listnotes_po_ModalLabel"><i class="icon-pencil"></i> List notes</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					</div>
				</div>
			<!-- End Notes Modal -->
			
			<!-- Start Todo Modal -->
				<div id="listtodos_po_Modal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="listtodos_po_ModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
						<h4 id="listtodos_po_ModalLabel"><i class="icon-check"></i> List to dos</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					</div>
				</div>
			<!-- End Todo Modal -->
			
			<!-- Start Todo Modal -->
				<div id="listapp_po_Modal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="listapp_po_ModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
						<h4 id="listapp_po_ModalLabel"><i class="icon-calendar"></i> List  appointments</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					</div>
				</div>
			<!-- End Todo Modal -->
			
			<!-- Start File Man Modal -->
				<div id="file_m_po_Modal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="file_m_po_ModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
						<h4 id="file_m_po_ModalLabel"><i class="icon-folder-open"></i> File manager</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					</div>
				</div>
			<!-- End File Man Modal -->
			
			
		
        </div>
		<div class="row-fluid">
			<div class="span6">
				<div class="well well-covide">
					<div class="well-title">
						<span class="title">Status hours and budget</span>
					</div>
					hours (0:00:00/6)
					<div class="progress progress-danger progress-striped">
						<div class="bar" style="width: 80%" title="80%"></div>
					</div>
					budget (0,00/10.000,00)
					<div class="progress progress-success progress-striped">
						<div class="bar" style="width: 30%" title="30%"></div>
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="well well-covide">
					<div class="well-title">
						<span class="title">Status overall hours and budget</span>
					</div>
					hours (0:00:00/6) 
					<div class="progress progress-danger progress-striped">
						<div class="bar" style="width: 80%" title="80%"></div>
					</div>
					budget (0,00/10.000,00)
					<div class="progress progress-warning progress-striped">
						<div class="bar" style="width: 60%" title="60%"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>