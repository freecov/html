		<div class="btn-group btn-create">
			<a class="btn btn-large <? echo $activeCompose ?> dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="icon-edit"></i> Compose
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a data-toggle="modal" href="_modals/email_compose_modal.php" data-target="#quickemailModal" >quick email</a></li>
				<li><a href="email_compose.php">email</a></li>
				<li><a href="#">newsletter</a></li>
			</ul>
		</div>

		<!-- Start Quick Email Modal -->
		<div id="quickemailModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="quickemailModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<a type="button" class="change_modal_button" href="email_compose.php" ><i class="icon-share"></i></a>
				<h4 id="quickemailModalLabel"><i class="icon-envelope"></i> New message</h4>
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
		<!-- End Quick Email Modal -->

		<hr>
		<div class="well well-covide well-covide-menu">
			<h4>Email folders</h4>
		    <div class="tabbable"> <!-- Only required for left/right tabs -->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1emailfolder" data-toggle="tab"><i class="icon-folder-close-alt"></i> Personal <span title="4 unread emails" class="label label-important tip-left"> 4 </span></a></li>
					<li><a href="#tab2emailfolder" data-toggle="tab"><i class="icon-folder-close-alt"></i> Shared <span title="7 unread emails" class="label tip-left"> 7 </span></a></li>
				</ul>
				<div class="tab-content covide-email">
					<div class="tab-pane active" id="tab1emailfolder">
						<ul class="nav nav-tabs nav-stacked nav-covide">
							<li><a href="#"><i class="icon-folder-close"></i> Starred <span title="4 unread emails" class="label tip-left pull-right"> 1 </span></a></li>
							<li class="active"><a href="#"><i class="icon-folder-open"></i> Inbox <span title="4 unread emails" class="label label-important tip-left pull-right"> 3 </span></a></li>
							<li><a href="#"><i class="icon-folder-close"></i> Bounced</a></li>
							<li><a href="#"><i class="icon-folder-close"></i> Drafts</a></li>
							<li><a href="#"><i class="icon-folder-close"></i> Sent mail</a></li>
						</ul>
					</div>
					<div class="tab-pane" id="tab2emailfolder">
						<ul class="nav nav-tabs nav-stacked nav-covide">
							<li class="active"><a href="#"><i class="icon-folder-open"></i> Folder item <span title="4 unread emails" class="label label-important tip-left pull-right"> 1 </span></a></li>
							<li><a href="#"><i class="icon-folder-close"></i> New folder <span title="4 unread emails" class="label tip-left pull-right"> 1 </span></a></li>
							<li><a href="#"><i class="icon-folder-close"></i> Test folder <span title="4 unread emails" class="label tip-left pull-right"> 5 </span></a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>