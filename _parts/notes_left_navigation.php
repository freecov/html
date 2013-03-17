			<a class="btn btn-createapp btn-large <? echo $activeCompose ?>" data-toggle="modal" href="_modals/add_note_modal.php" data-target="#addnoteModal">
				<i class="icon-edit"></i> Add new note
			</a>

		<!-- Start Note Modal -->
		<div id="addnoteModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addnoteModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="addnoteModalLabel"><i class="icon-envelope"></i> New note</h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<label class="checkbox inline pull-left text-left"><input type="checkbox" id="inlineCheckbox1" value="option1" checked> Read confirmation</label>
				<div class="btn-toolbar">
					<button class="btn">Save</button>
					<div class="btn-group dropup">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							More
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu text-left">
							<li><a href=#>Change From email</a></li>
							<li><a href=#>Add star</a></li>
							<li><a href=#>Print</a></li>
							<li><a href=#>Change mode</a></li>
							<li class="divider"></li>
							<li><a href=#>Discard draft</a></li>
						</ul>
					</div>
					<button class="btn btn-warning">Send email</button>
				</div>
			</div>
		</div>
		<!-- End Note Modal -->

		<hr>
		<div class="well well-covide well-covide-menu">
			<h4>Notes folders</h4>

			<ul class="nav nav-tabs nav-stacked nav-covide">
				<li class="active"><a href="#"><i class="icon-folder-open"></i> Inbox <span title="4 unread emails" class="label tip-left pull-right"> 1 </span></a></li>
				<li><a href="#"><i class="icon-inbox"></i> Archive <span title="4 unread emails" class="label label-important tip-left pull-right"> 3 </span></a></li>
				<li><a href="#"><i class="icon-folder-close"></i> Drafts</a></li>
				<li><a href="#"><i class="icon-folder-close"></i> Sent, unread</a></li>
				<li><a href="#"><i class="icon-folder-close"></i> Sent, read</a></li>
			</ul>
		</div>