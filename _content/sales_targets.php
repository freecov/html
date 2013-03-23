<div class="row-fluid">
    <h2 class="span8 title-page">Sales targets</h2>
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
                <li><a href="#"><i class="icon-angle-right"></i> Manage targets</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a class="current" href="customer_care.php">Sales targets</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'btn-warning'; ?>
	   	<? include_once "_parts/sales_left_navigation.php"; ?>
	</div>

	<div class="span9">
		
        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Sales targets</span>
            </div>
			
		
            <table class="table table-condensed table-striped table-hover">
            	<colgroup>
                    <col width="15%">
                    <col>
                    <col>
                    <col>
                    <col>
					<col>
                    <col>
                    <col>
                    <col>
                </colgroup>
                <thead>
                	<tr>
                		<th>User</th>
                    	<th>Start date</th>
                    	<th>End date</th>
                    	<th>Phone calls</th>
                		<th>Appointments</th>
						<th>Visits</th>
                		<th>Orders</th>
						<th>Turnover</th>
						<th></th>
					</tr>
            	</thead>
        		<tbody>
            		<tr>
                		<td>User KJ</td>
                		<td>20.02.2013</td>
						<td>25.02.2013</td>
                		<td>2123</td>
                		<td>0</td>
                		<td>0</td>
                		<td>0</td>
                		<td>0</td>
						<td>
							<div class="btn-group">
								<button class="btn btn-small" href="#"  ><i class="icon-edit"></i></button>
								<button class="btn btn-small btn-danger" href="#"  ><i class="icon-trash"></i></button>
							</div>
						</td>
            		</tr>
					<tr>
                		<td>Curabitur</td>
                		<td>15.02.2013</td>
						<td>26.02.2013</td>
                		<td>2123</td>
                		<td>0</td>
                		<td>0</td>
                		<td>0</td>
                		<td>0</td>
						<td>
							<div class="btn-group">
								<button class="btn btn-small" href="#" ><i class="icon-edit"></i></button>
								<button class="btn btn-small btn-danger" href="#" ><i class="icon-trash"></i></button>
							</div>
						</td>
            		</tr>
					<tr>
                		<td>Donec</td>
                		<td>07.03.2013</td>
						<td>20.04.2013</td>
                		<td>2123</td>
                		<td>0</td>
                		<td>0</td>
                		<td>0</td>
                		<td>0</td>
						<td>
							<div class="btn-group">
								<button class="btn btn-small" href="#" ><i class="icon-edit"></i></button>
								<button class="btn btn-small btn-danger" href="#" ><i class="icon-trash"></i></button>
							</div>
						</td>
            		</tr>
        		</tbody>
    		</table>
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
</div>