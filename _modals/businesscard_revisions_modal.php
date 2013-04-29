		<div class="fieldset-group">
			<form>
				<div class="row-fluid">
					<div class="span9">
						<fieldset>
							<legend><i class="icon-user"></i> Users</legend>
							<div class="controls controls-row">
								<input class="span8" type="text" placeholder="Type search user">
								<button class="btn span4" type="button" data-toggle="modal" href="_modals/add_users_classification_modal.php" data-target="#adduser_brmModal" ><i class="icon-plus"></i> Add</button>
							</div>
							<ul class="list-striped linked-ul inline">
								<li class="odd form-inline controls-row">Robbert <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							</ul>	
						</fieldset>
					</div>
					<div class="span3">
						<fieldset>
							<legend><i class="icon-calendar"></i> Start / End dates</legend>
							<div class="controls controls-row ">
								<input type="text" class="span6" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Start date">
								<input type="text" class="span6" value="" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="End date">
							</div>
						</fieldset>
						<br>
						<button class="btn btn-block" type="button"><i class="icon-search"></i>  Search</button>
						
					</div>
				</div>
				<!-- Start adduser_brmModal Modal -->
                <div id="adduser_brmModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="adduser_brmModalLabel" aria-hidden="true">
					<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="adduser_brmModalLabel"><i class="icon-user"></i> Add user</h4>
                    </div>
                    <div class="modal-body">
					</div>
                    <div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-warning">Add user</button>
					</div>
				</div>
				<!-- End adduser_brmModal Modal -->
			</form>
		</div>
		
		
		<div class="well well-covide">
            <div class="well-title">
                <span class="title">To do's</span>
            </div>

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="15%">
                    <col>
                    <col>
                    <col>
                    <col>
                    <col width="10%">
                </colgroup>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>User</th>
                        <th>Relation</th>
                        <th>Businesscard</th>
                        <th>Revision</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>17-03-2013 22:24</td>
                        <td>Willem</td>
                        <td>SalesTest Customer2	</td>
                        <td>Kees Jansen</td>
                        <td>7</td>
                        <td>
							<a href="_modals/view_revision_changes_modal.php" class="btn btn-small" type="button" data-toggle="modal"  data-target="#viewrevisionchanges_brmModal"  ><i class="icon-file-alt"></i></a>
						</td>
                    </tr>
                    
                </tbody>
            </table>
			
			<!-- Start viewrevisionchanges_brm Modal -->
                <div id="viewrevisionchanges_brmModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="viewrevisionchanges_brmModalLabel" aria-hidden="true">
					<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="viewrevisionchanges_brmModalLabel">View revision changes</h4>
                    </div>
                    <div class="modal-body">
					</div>
                    <div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					</div>
				</div>
			<!-- End viewrevisionchanges_brm Modal -->

            <div class="pagination pagination-right no-margin">
				<select class="span1" title="Items per page">
					<option>5</option>
					<option>10</option>
					<option>20</option>
					<option>50</option>
					<option selected>100</option>
					<option>200</option>
					<option>500</option>
					<option>1000</option>
				</select>
				<span class="help-inline">
					<ul>
						<li><a href="#">Prev</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				</span>
            </div>
        </div>
