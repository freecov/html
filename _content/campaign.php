<div class="row-fluid">
    <h2 class="span8 title-page">Campaign</h2>
    <div class="span4 title-button pull-right">
 		<div class="fontSizeChange btn-group pull-right" data-toggle="buttons-radio">
            <button class="btn  btn-small size-small" type="button" data-size="small">A</button>
			<button class="btn  btn-small size-normal active" type="button" data-size="normal">A</button>
			<button class="btn  btn-small size-big" type="button" data-size="big">A</button>
        </div>
		<div class="btn-group pull-right">
             <button class="btn  btn-small dropdown-toggle" type="button" data-toggle="dropdown">
                <i class="icon-cogs"></i> Actions
                <span class="caret"></span>
             </button>
             <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-angle-right"></i> Active campaign</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Archive campaign</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a class="current" href="campaign.php">Campaign</a>
	
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'btn-warning'; ?>
	   	<? include_once "_parts/campaign_left_navigation.php"; ?>
	</div>

	<div class="span9">
		<? include_once "_parts/search-form.php"; ?>

        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Campaign</span>
            </div>

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="15%">
                    <col width="15%">
                    <col width="20%">
                    <col width="30%">
                    <col width="10%">
                    <col width="10%">
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Classifications</th>
                        <th>Type</th>
                        <th>Count</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Does customers</td>
                        <td>17-03-2013 22:24</td>
                        <td>Cras justo massa, mattis ac tempor</td>
                        <td><i class="icon-exchange text-success"></i> Jeans1, Shirt1, Van Bommel type 1<br><i class="icon-exchange text-error"></i> Jeans2</td>
                        <td>voip</td>
                        <td>0</td>
                        <td>
							<div class="btn-group">
								<a href="#" class="btn btn-small"><i class="icon-phone"></i></a>
								<a class="btn btn-small" data-toggle="modal" href="_modals/campaign_overview_modal.php" data-target="#campaign_overviewModal" ><i class="icon-folder-open"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-refresh"></i></a>
								<a class="btn btn-small" data-toggle="modal" href="_modals/campaign_edit_modal.php" data-target="#campaign_editModal"><i class="icon-edit"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-search"></i></a>
								<a class="btn btn-small" data-toggle="modal" href="_modals/campaign_add_classification_modal.php" data-target="#campaign_add_classModal"><i class="icon-plus-sign"></i></a>
							</div>
						</td>
                    </tr>
                    <tr>
                        <td>Maecenas </td>
                        <td>18-03-2013 16:14</td>
                        <td>Quisque nec leo nisi</td>
                        <td><i class="icon-exchange text-success"></i> Van Bommel type 1<br><i class="icon-exchange text-error"></i> Jeans2</td>
                        <td>export</td>
                        <td>0</td>
                        <td>
							<div class="btn-group">
								<a class="btn btn-small" data-toggle="modal" href="_modals/campaign_overview_modal.php" data-target="#campaign_overviewModal"><i class="icon-folder-open"></i></a>
								<a class="btn btn-small" data-toggle="modal" href="_modals/campaign_edit_modal.php" data-target="#campaign_editModal"><i class="icon-edit"></i></a>
								<a class="btn btn-small" data-toggle="modal" href="_modals/campaign_add_classification_modal.php" data-target="#campaign_add_classModal"><i class="icon-plus-sign"></i></a>
							</div>
						</td>
                    </tr>
					<tr>
                        <td>Maecenas</td>
                        <td>21-03-2013 10:00</td>
                        <td>Etiam a orci sodales lorem vulputate auctor</td>
                        <td><i class="icon-exchange text-success"></i> Jeans1, Shirt1, Van Bommel type 1<br><i class="icon-exchange text-error"></i> Jeans2</td>
                        <td>mail</td>
                        <td>0</td>
                        <td>
							<div class="btn-group">
								<a href="#" class="btn btn-small"><i class="icon-search"></i></a>
								<a class="btn btn-small" data-toggle="modal" href="_modals/campaign_edit_modal.php" data-target="#campaign_editModal"><i class="icon-edit"></i></a>
							</div>
						</td>
                    </tr>
					
                    
                </tbody>
            </table>
			
			<!-- Start Campaigns overview Modal -->
			<div id="campaign_overviewModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="campaign_overviewModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
					<h4 id="campaign_overviewModalLabel"><i class="icon-list-alt"></i> Campaign overview</h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<div class="btn-group pull-left">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							Export
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu text-left">
							<li><a href=#>Export as XML</a></li>
							<li><a href=#>Export as CSV</a></li>
						</ul>
					</div>
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
			</div>
			<!-- End Campaigns overview Modal -->
			
			
			<!-- Start Campaigns Edit Modal -->
			<div id="campaign_editModal" class="modal add-calssification-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="campaign_editModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
					<h4 id="campaign_editModalLabel"><i class="icon-list-alt"></i> Campaign edit</h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning"><i class="icon-save"></i> Save</button>
				</div>
			</div>
			<!-- End Campaigns overview Modal -->

			
			<!-- Start Add class Modal -->
			<div id="campaign_add_classModal" class="modal add-calssification-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="campaign_add_classModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
					<h4 id="campaign_add_classModalLabel"><i class="icon-exchange"></i> Add new classification</h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning"><i class="icon-save"></i> Save</button>
				</div>
			</div>
			<!-- End Add class Modal -->

			
			
			
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
	</div>
</div>