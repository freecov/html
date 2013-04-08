	    <div class="btn-group btn-create">
			<a class="btn btn-large btn-warning dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="icon-plus"></i> Add new
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a data-toggle="modal" href="_modals/add_files_modal.php" data-target="#addfiles_fmlnModal" ><i class="icon-file"></i> files</a></li>
				<li><a data-toggle="modal" href="_modals/add_folder_modal.php" data-target="#addfolder_fmlnModal" ><i class="icon-folder-open-alt"></i> folder</a></li>
			</ul>
		</div>

		<!-- Start files Modal -->
		<div id="addfiles_fmlnModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addfiles_fmlnModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="addfiles_fmlnModalLabel"><i class="icon-file"></i> Add files</h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-warning">Save</button>
			</div>
		</div>
		<!-- End files Modal -->

		<!-- Start folder Modal -->
		<div id="addfolder_fmlnModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addfolder_fmlnModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
                <h4 id="addfolder_fmlnModalLabel"><i class="icon-folder-open-alt"></i> Add folder</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-warning">Save</button>
            </div>
		</div>
		<!-- End folder Modal -->

		<hr>
		<div class="well well-covide well-covide-menu">
			<ul class="nav nav-tabs nav-stacked nav-covide">
				<li><a href="#"><i class="silkicon-folder_brick"></i> CMS and public files</a></li>
				<li><a href="#"><i class="silkicon-google"></i> Google docs</a></li>
				<li><a href="#"><i class="silkicon-folder_page"></i> My documents</a></li>
        		<li><a href="#"><i class="silkicon-folder_picture"></i> My files</a></li>
				<li><a href="#"><i class="silkicon-folder_lightbulb"></i> HRM files</a></li>
				<li><a href="#"><i class="silkicon-folder_user"></i> Public files</a></li>
				<li><a href="#"><i class="silkicon-folder_table"></i> Project files</a></li>
				<li><a href="#"><i class="silkicon-folder_link"></i> Contact files</a></li>
			</ul>
		</div>