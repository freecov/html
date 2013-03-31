
			<a class="btn btn-createapp btn-large <? echo $activeADD ?>" data-toggle="modal" href="_modals/add_todo_modal.php" data-target="#newtodoModal" ><i class="icon-plus"></i> New to do</a>


		<!-- Start Add New TODO Modal -->
		<div id="newtodoModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="newtodoModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="newtodoModalLabel"><i class="icon-check"></i> Add To do</h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-warning">Add to do</button>
			</div>
		</div>
		<!-- End Add New TODO Modal -->


		<hr>
		<div class="well well-covide well-covide-menu">
			<ul class="nav nav-tabs nav-stacked nav-covide">
				<li><a href="projects.php"><i class="icon-time"></i> Active</a></li>
				<li><a href="#"><i class="icon-thumbs-up"></i> Done</a></li>
			</ul>
		</div>