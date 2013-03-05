	    <div class="btn-group btn-create">
			<a class="btn btn-large btn-warning dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="icon-plus"></i> Add new
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a data-toggle="modal" href="_modals/add_relation_modal.php" data-target="#relationModal" ><i class="icon-sitemap"></i> relations</a></li>
				<li><a data-toggle="modal" href="_modals/add_buisness_card_modal.php" data-target="#buisnesscardModal" ><i class="icon-credit-card"></i> business card</a></li>
				<li><a data-toggle="modal" href="_modals/add_person_modal.php" data-target="#personModal" ><i class="icon-user"></i> person</a></li>
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


		<!-- Start Person Modal Modal -->
		<div id="personModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="personModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="personModalLabel"><i class="icon-user"></i> Add Person</h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-warning">Add Person</button>
			</div>
		</div>
		<!-- End Person Modal -->

		<hr>
		<div class="well">
			<ul class="nav nav-tabs nav-stacked nav-covide">
				<li>
                    <a data-toggle="collapse" data-target="#submenu1" href="#"><i class="icon-sitemap"></i> Relations</a>
					<div id="submenu1" class="collapse in">
						<ul class="nav nav-tabs nav-stacked nav-covide">
							<li><a href="#"><i class="icon-folder-close-alt"></i> Customers</a></li>
							<li><a href="#"><i class="icon-folder-close-alt"></i> Suppliers</a></li>
							<li><a href="#"><i class="icon-folder-close-alt"></i> CMS forms</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#"><i class="icon-group"></i> Employees</a></li>
				<li><a href="#"><i class="icon-credit-card"></i> Businesscards</a></li>
        		<li><a href="#"><i class="icon-ban-circle"></i> Inactive relations</a></li>
				<li><a href="#"><i class="icon-warning-sign"></i> Duplicate relations</a></li>
			</ul>
		</div>