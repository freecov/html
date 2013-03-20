	    <div class="btn-group btn-create">
			<a class="btn btn-large <? echo $activeADD ?> dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="icon-plus"></i> Add new
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a data-toggle="modal" href="_modals/add_sales_item_modal.php" data-target="#SalesItemModal" ><i class="icon-bar-chart"></i> sales item</a></li>
				<li><a data-toggle="modal" href="_modals/add_sales_target_modal.php" data-target="#SalesTargetModal" ><i class="icon-screenshot"></i> sales target</a></li>
			</ul>
		</div>

		<!-- Start Sales Item Modal -->
		<div id="SalesItemModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="SalesItemModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="SalesItemModalLabel"><i class="icon-bar-chart"></i> Add sales item</h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-warning">Add sales item</button>
			</div>
		</div>
		<!-- End Sales Item Modal -->

		<!-- Start Sales Target Modal -->
		<div id="SalesTargetModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="SalesTargetModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
                <h4 id="SalesTargetModalLabel"><i class="icon-screenshot"></i> Add sales target</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-warning">Add sales target</button>
            </div>
		</div>
		<!-- End Sales Target Modal -->

		<hr>
		<div class="well well-covide well-covide-menu">
			<ul class="nav nav-tabs nav-stacked nav-covide">
				<li><a href="customer_care.php"><i class="icon-bar-chart"></i> Sales overview</a></li>
				<li><a href="customer_care_requests.php"><i class="icon-screenshot"></i> Sales targets</a></li>
			</ul>
		</div>