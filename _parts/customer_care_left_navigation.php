	    <div class="btn-group btn-create">
			<a class="btn btn-large <? echo $activeADD ?> dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="icon-plus"></i> Add new
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a data-toggle="modal" href="_modals/add_customer_care_item_modal.php" data-target="#ccItemModal" ><i class="icon-bolt"></i> customer care item</a></li>
				<li><a data-toggle="modal" href="_modals/add_customer_care_request_modal.php" data-target="#ccRequestModal" ><i class="icon-bullhorn"></i> customer care request </a></li>
			</ul>
		</div>

		<!-- Start CC Item Modal -->
		<div id="ccItemModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="ccItemModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="ccItemModalLabel"><i class="icon-bolt"></i> Add customer care item</h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-warning">Add customer care item</button>
			</div>
		</div>
		<!-- End CC Item Modal -->

		<!-- Start CC Request Modal -->
		<div id="ccRequestModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="ccRequestModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
                <h4 id="ccRequestModalLabel"><i class="icon-bullhorn"></i> Add customer care request</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-warning">Add customer care request</button>
            </div>
		</div>
		<!-- End CC Request Modal -->

		<hr>
		<div class="well well-covide well-covide-menu">
			<ul class="nav nav-tabs nav-stacked nav-covide">
				<li><a href="customer_care.php"><i class="icon-bolt"></i> Customer care</a></li>
				<li><a href="customer_care_requests.php"><i class="icon-bullhorn"></i> Incoming requests</a></li>
			</ul>
		</div>