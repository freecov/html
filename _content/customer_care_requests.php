<div class="row-fluid">
    <h2 class="span8 title-page">Customer Care Requests</h2>
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
                <li><a href="#"><i class="icon-angle-right"></i> Export all items</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage categories</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Report</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Settings</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a href="customer_care.php">Customer Care</a>
	<a class="current" href="customer_care_requests.php">Requests</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'btn-warning'; ?>
	   	<? include_once "_parts/customer_care_left_navigation.php"; ?>
	</div>

	<div class="span9">
        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Customer care requests</span>
            </div>
            
            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="3%">
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
					<col>
                    <col width="3%">
                </colgroup>
                <thead>
                    <tr>
                        <th></th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Case nr</th>
                        <th>Email</th>
                        <th>Queue</th>
                        <th>Remark</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a class="btn btn-small" href="customer_care_requests_communication.php" title="Edit request"><i class="icon-edit"></i></a></td>
                        <td>20.02.2013</td>
                        <td>Tom</td>
						<td>48685497</td>
                        <td>konstantin.cherniak@gmail.com</td>
                        <td>Vestibulum in lacus vel est tempus mattis</td>
                        <td>Aliquam blandit arcu ipsum</td>
                        <td><a class="btn btn-small" href="#" title="Delete"><i class="icon-trash"></i></a></td>
                    </tr>
					<tr>
                        <td><a class="btn btn-small" href="customer_care_requests_communication.php" title="Edit request"><i class="icon-edit"></i></a></td>
                        <td>22.02.2013</td>
                        <td>Mauris</td>
						<td>411312351</td>
                        <td>egestas@gmail.com</td>
                        <td>Aenean mattis ultricies</td>
                        <td>Donec varius augue ac lacus mollis sit amet pellentesque odio posuere</td>
                        <td><a class="btn btn-small" href="#" title="Delete"><i class="icon-trash"></i></a></td>
                    </tr>
					<tr>
                        <td><a class="btn btn-small" href="customer_care_requests_communication.php" title="Edit request"><i class="icon-edit"></i></a></td>
                        <td>20.02.2013</td>
                        <td>Maecenas</td>
						<td>1275457054</td>
                        <td>Cras@gmail.com</td>
                        <td>Suspendisse potenti convallis at venenatis</td>
                        <td>Aenean lacus sapien, molestie at cursus</td>
                        <td><a class="btn btn-small" href="#" title="Delete"><i class="icon-trash"></i></a></td>
                    </tr>
                </tbody>
            </table>

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