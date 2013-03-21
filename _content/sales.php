<div class="row-fluid">
    <h2 class="span8 title-page">Sales overview</h2>
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
    <a class="current" href="customer_care.php">Sales overview</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'btn-warning'; ?>
	   	<? include_once "_parts/sales_left_navigation.php"; ?>
	</div>

	<div class="span9">
		<? include_once "_parts/search-form.php"; ?>

		<div class="row-fluid">
			<div class="widget-box widget-box-sale span12">
				<div class="widget-title">
					<i class="title-icon icon-bar-chart"></i>
					<h5>Sales - General Information</h5>


					<ul class="nav nav-tabs">
						<li class="">
							<a href="#tab1" data-toggle="tab">Statuses</a>
						</li>
						<li class="active">
							<a href="#tab2" data-toggle="tab">Dynamic Graph</a>
						</li>
						<li class="">
							<a href="#tab3" data-toggle="tab">Report</a>
						</li>
					</ul>
				</div>
				
				<div class="widget-content tab-content">
					<div id="tab1" class="tab-pane">
						<h4 class="text-center">Quotes statuses</h4>
						<div class="row-fluid">
							<div class="span12" style="text-align: center;">
								<img src="img/charts2.png" class="img-polaroid">
							</div>
						</div>
					</div>
					<div id="tab2" class="tab-pane active">
						<h4 class="text-center">Total sum, Forecast by month</h4>
						<div class="row-fluid">
							<div class="span9" style="text-align: center;">
								<img src="img/charts.png" class="img-polaroid">
							</div>
							<div class="span3">
								<form class="form-horizontal">
										<div class="well">
										<fieldset>
											<legend>X-AXIS</legend>

											<label class="radio">
												<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"
                                                   checked>
												Per salesman
											</label>
											<label class="radio">
												<input type="radio" name="optionsRadios" id="optionsRadios2"
                                                   value="option2">
												Per month
											</label>
											<label class="radio">
												<input type="radio" name="optionsRadios" id="optionsRadios2"
                                                   value="option2">
												Per quarter
											</label>
										</fieldset>
										</div>

									<div class="well">
									<fieldset>
                                        <legend>Y-AXIS</legend>

                                        <label class="checkbox ">
                                            <input type="checkbox" value="">
                                            # quotes
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" value="">
                                            Total sum
                                        </label>
                                        <label class="checkbox ">
                                            <input type="checkbox" value="">
                                            Forecast
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" value="">
                                            Realized
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" value="">
                                            Total
                                        </label>
									</fieldset>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div id="tab3" class="tab-pane">
						<table class="table table-striped table-hover">
							<thead>
							<tr>
								<th>User</th>
								<th colspan="3">Phone calls</th>
								<th colspan="3">Appointments</th>
								<th colspan="3">Visits</th>
								<th colspan="3">Tot. turnover</th>
								<th colspan="3">Orders</th>
								<th>Avg. order</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Osdn</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>Appointments</td>
								<td>0</td>
								<td>0</td>
								<td>Visits</td>
								<td>0</td>
								<td>0</td>
								<td>Tot. turnover</td>
								<td>0</td>
								<td>0</td>
								<td>Orders</td>
								<td>0</td>
								<td>0</td>
								<td>Avg. order</td>
							</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<div class="text-center">
						<div class="well well-small"><strong>Items <span class="badge badge-success">2</span></strong>
							<strong>Total sum <span class="badge badge-important">5220</span></strong> <strong>Forecast
								<span class="badge">1827</span></strong> <strong>Realized <span
                                class="badge">0</span></strong> <strong>Total <span
                                class="badge badge-important">1827</span></strong>
						</div>
						<a href=#><strong>Pending</strong></a> <span class="badge badge-important">0</span> | 
						<a href=#><strong>Close to decision</strong></a> <span class="badge">0</span> | 
						<a href=#><strong>Closed - lost</strong></a> <span class="badge">0</span> | 
						<a href=#><strong>Closed - won</strong></a> <span class="badge badge-success">0</span> | 
						<a href=#><strong>Total</strong></a> <span class="badge badge-important">0</span>
					</div>

				</div>
			</div>
		</div>
		
		
        <div class="well well-covide">
            <div class="well-title">
                <span class="title">OSDN</span>
            </div>
			<div class="row-fluid">
				<div class="span9">
		
					<div class="well well-small well-covide-g">
						<div class="btn-group">
							<a class="btn  btn-small dropdown-toggle" data-toggle="dropdown" href="#">
								Selection actions <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Export selection</a></li>
							</ul>
						</div>
						<div class="btn-group pull-right">
							<a class="btn  btn-small dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-plus"></i> Add columns
								<span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown form">
								<form>
									<table class="table table-striped table-hover table-condensed table-borderless">
										<tr><td><label><input type="checkbox" checked> salesitem</label></td></tr>
										<tr><td><label><input type="checkbox" > contact</label></td></tr>
										<tr><td><label><input type="checkbox" > project</label></td></tr>	
										<tr><td><label><input type="checkbox" > action</label></td></tr>
										<tr><td><label><input type="checkbox" > prospect</label></td></tr>
                                		<tr><td><label><input type="checkbox" > order/commission</label></td></tr>
                                		<tr><td><label><input type="checkbox" checked> quote</label></td></tr>
                                		<tr><td><label><input type="checkbox" checked> invoice</label></td></tr>
                                		<tr><td><label><input type="checkbox" > status</label></td></tr>
                                		<tr><td><label><input type="checkbox" checked> score</label></td></tr>
                                		<tr><td><label><input type="checkbox" > price</label></td></tr>
                            		</table>
                        		</form>
                    		</div>
                		</div>
            		</div>
		
            		<table class="table table-condensed table-striped table-hover">
                		<colgroup>
                    		<col width="2%">
                    		<col>
                    		<col>
                    		<col>
                    		<col width="15%">
							<col>
                    		<col>
                		</colgroup>
                		<thead>
                    		<tr>
                        		<th>
									<div class="btn-group">
										<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
											<i class="icon-check"></i> <span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a href="#">All</a></li>
											<li><a href="#">Inverse</a></li>
											<li><a href="#">None</a></li>
										</ul>
									</div>
		
								</th>
                        		<th>Sales Item</th>
                        		<th>Project</th>
                        		<th>Date</th>
                        		<th>Order/Commission</th>
								<th>Status</th>
                        		<th>Price</th>
                    		</tr>
                		</thead>
                		<tbody>
                    		<tr>
                        		<td><input type="checkbox"></td>
                        		<td><a href="#">Terrazur</a></td>
                        		<td>Vestibulum in lacus vel est tempus mattis</td>
                        		<td>20.02.2013</td>
                        		<td>342425234</td>
								<td><select><option>close to decision</option><option>pending</option><option>close to lost</option><option>close to won</option></select></td>
                        		<td>3565</td>
                    		</tr>
                    		<tr>
                        		<td><input type="checkbox"></td>
                        		<td><a href="#">Aenean vitae arcu</a></td>
                        		<td>Vestibulum in lacus vel est tempus mattis</td>
                        		<td>18.02.2013</td>
                        		<td>455623339</td>
								<td><select><option>close to decision</option><option>pending</option><option>close to lost</option><option>close to won</option></select></td>
                        		<td>125</td>
                    		</tr>
                    		<tr>
                        		<td><input type="checkbox"></td>
                        		<td><a href="#">Aliquam feugiat</a></td>
                        		<td>Phasellus nisl lectus, interdum</td>
                        		<td>03.02.2013</td>
                        		<td>311102586</td>
								<td><select><option>close to decision</option><option>pending</option><option>close to lost</option><option>close to won</option></select></td>
                        		<td>3621</td>
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
				<div class="span3">
					<img src="img/chart_small.png">
				</div>
			</div>
        </div>
	</div>
</div>