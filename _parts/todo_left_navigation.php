	    <div class="btn-group btn-create">
			<a class="btn btn-large <? echo $activeADD ?> dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="icon-plus"></i> Add new
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a data-toggle="modal" href="_modals/add_project_modal.php" data-target="#projectModal" ><i class="icon-list"></i> project</a></li>
				<li><a data-toggle="modal" href="_modals/add_project_main_modal.php" data-target="#projectmainModal" ><i class="icon-th-list"></i> main project</a></li>
			</ul>
		</div>

		<!-- Start Add Project Modal -->
		<div id="projectModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="projectModalLabel"><i class="icon-list"></i> Add project</h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-warning">Add project</button>
			</div>
		</div>
		<!-- End Add Project Modal -->

		<!-- Start Add Main Project Modal -->
		<div id="projectmainModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="projectmainModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
                <h4 id="projectmainModalLabel"><i class="icon-th-list"></i> Add main project</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-warning">Add main project</button>
            </div>
		</div>
		<!-- End Add Main Project Modal -->

		<hr>
		<div class="well well-covide well-covide-menu">
			<ul class="nav nav-tabs nav-stacked nav-covide">
				<li><a href="projects.php"><i class="icon-list"></i> Active projects</a></li>
				<li><a href="#"><i class="icon-list muted"></i> In-active projects</a></li>
			</ul>
		</div>