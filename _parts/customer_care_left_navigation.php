	    <div class="btn-group btn-create">
			<a class="btn btn-large btn-warning dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="icon-plus"></i> Add new
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a data-toggle="modal" href="_modals/add_relation_modal.php" data-target="#relationModal" ><i class="icon-bolt"></i> customer care item</a></li>
				<li><a data-toggle="modal" href="_modals/add_buisness_card_modal.php" data-target="#buisnesscardModal" ><i class="icon-bullhorn"></i> customer care request </a></li>
			</ul>
		</div>

		<!-- Start Relation Modal -->
		<div id="relationModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="relationModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="relationModalLabel"><i class="icon-sitemap"></i> Add Relation</h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-warning">Add Relation</button>
			</div>
		</div>
		<!-- End Relation Modal -->

		<!-- Start Business Card Modal -->
		<div id="buisnesscardModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="buisnesscardModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
                <h4 id="buisnesscardModalLabel"><i class="icon-credit-card"></i> Add Business Card</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-warning">Add Business Card</button>
            </div>
		</div>
		<!-- End Business Card Modal -->

		<hr>
		<div class="well well-covide well-covide-menu">
			<ul class="nav nav-tabs nav-stacked nav-covide">
				<li><a href="#"><i class="icon-bolt"></i> Customer care</a></li>
				<li><a href="#"><i class="icon-bullhorn"></i> Incoming requests</a></li>
			</ul>
		</div>