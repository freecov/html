	




<div class="row-fluid">
	<div class="well well-covide">
			<div class="input-append span12">
				<input class="span9" id="appendedInputButton" type="text">
				<button class="btn" type="button"><i class="icon-search"></i> Search</button>
				<button class="btn" type="button" data-toggle="button"><i class="icon-group"></i>  Show all users</button>
			</div>
            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="5%">
                    <col>
                    <col>
                    <col width="10%">
                </colgroup>
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>User</th>
                        <th>Group</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="label label-success"><i class="icon-lightbulb"></i> Online</span></td>
                        <td>Terrazur</td>
                        <td>osdn</td>
						<td>
							<div class="btn-group">
								<a class="btn btn-small" data-toggle="modal" href="_modals/add_note_modal.php" data-target="#addnote_lum_Modal"><i class="icon-pencil"></i></a>
								<a class="btn btn-small" data-toggle="modal" href="_modals/newappointment_modal.php" data-target="#addapp_lum_Modal"><i class="icon-calendar"></i></a>
								<a class="btn btn-small"><i class="icon-phone"></i></a>
							</div>
						</td>
                    </tr>
                    <tr>
                        <td><span class="label label-success"><i class="icon-time"></i> Away</span></td>
                        <td>Willem</td>
                        <td>Willem</td>
						<td>
							<div class="btn-group">
								<a class="btn btn-small" data-toggle="modal" href="_modals/add_note_modal.php" data-target="#addnote_lum_Modal"><i class="icon-pencil"></i></a>
								<a class="btn btn-small" data-toggle="modal" href="_modals/newappointment_modal.php" data-target="#addapp_lum_Modal"><i class="icon-calendar"></i></a>
								<a class="btn btn-small"><i class="icon-phone"></i></a>
							</div>
						</td>
                    </tr>
					<tr>
                        <td><span class="label"><i class="icon-lightbulb"></i> Offline</span></td>
                        <td>Tom</td>
                        <td>osdn</td>
						<td>
							<div class="btn-group">
								<a class="btn btn-small" data-toggle="modal" href="_modals/add_note_modal.php" data-target="#addnote_lum_Modal"><i class="icon-pencil"></i></a>
								<a class="btn btn-small" data-toggle="modal" href="_modals/newappointment_modal.php" data-target="#addapp_lum_Modal"><i class="icon-calendar"></i></a>
								<a class="btn btn-small"><i class="icon-phone"></i></a>
							</div>
						</td>
                    </tr>
                    <tr>
                        <td><span class="label label-success"><i class="icon-minus-sign"></i> Busy</span></td>
                        <td>Robbert</td>
                        <td>Robbert</td>
						<td>
							<div class="btn-group">
								<a class="btn btn-small" data-toggle="modal" href="_modals/add_note_modal.php" data-target="#addnote_lum_Modal"><i class="icon-pencil"></i></a>
								<a class="btn btn-small" data-toggle="modal" href="_modals/newappointment_modal.php" data-target="#addapp_lum_Modal"><i class="icon-calendar"></i></a>
								<a class="btn btn-small"><i class="icon-phone"></i></a>
							</div>
						</td>
					<tr>
                        <td><span class="label"><i class="icon-lightbulb"></i> Offline</span></td>
                        <td>Tom</td>
                        <td>osdn</td>
						<td>
							<div class="btn-group">
								<a class="btn btn-small" data-toggle="modal" href="_modals/add_note_modal.php" data-target="#addnote_lum_Modal"><i class="icon-pencil"></i></a>
								<a class="btn btn-small" data-toggle="modal" href="_modals/newappointment_modal.php" data-target="#addapp_lum_Modal"><i class="icon-calendar"></i></a>
								<a class="btn btn-small"><i class="icon-phone"></i></a>
							</div>
						</td>
                    </tr>
                   
                </tbody>
            </table>
			
			<!-- Start Add Note Modal -->
				<div id="addnote_lum_Modal" class="modal add-relation-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addnote_lum_ModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
						<h4 id="addnote_lum_ModalLabel"><i class="icon-pencil"></i> New note</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn">Save note</button>
						<button class="btn btn-warning">Send note</button>
					</div>
				</div>
			<!-- End Add Note Modal -->
			
			<!-- Start Add app Modal -->
				<div id="addapp_lum_Modal" class="modal add-relation-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="addapp_lum_ModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
						<h4 id="addapp_lum_ModalLabel"><i class="icon-calendar"></i> New appointment</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-warning">Save appointment</button>
					</div>
				</div>
			<!-- End Add app Modal -->
			

			
			<div class="pagination pagination-right no-margin">
				<select class="span2" title="Items per page">
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
</div>