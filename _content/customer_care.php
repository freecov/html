<div class="row-fluid">
    <h2 class="span8 title-page">Customer Care</h2>
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
    <a class="current" href="customer_care.php">Customer Care</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'btn-warning'; ?>
	   	<? include_once "_parts/customer_care_left_navigation.php"; ?>
	</div>

	<div class="span9">
		<? include_once "_parts/search-form.php"; ?>

        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Customer care calls list</span>
            </div>
            <div class="well well-small well-covide-g">
                <div class="btn-group">
                    <a class="btn  btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                        Customer care actions <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="#">customer care requests</a></li>
						<li><a href="#">export</a></li>
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
                                <tr><td><label><input type="checkbox" checked> date</label></td></tr>
                                <tr><td><label><input type="checkbox" > support</label></td></tr>
                                <tr><td><label><input type="checkbox" > queue</label></td></tr>	
                                <tr><td><label><input type="checkbox" > dispatching</label></td></tr>
                                <tr><td><label><input type="checkbox" > project</label></td></tr>
                                <tr><td><label><input type="checkbox" > contact</label></td></tr>
                                <tr><td><label><input type="checkbox" checked> executor</label></td></tr>
                                <tr><td><label><input type="checkbox" checked> done</label></td></tr>
                                <tr><td><label><input type="checkbox" > category</label></td></tr>
                                <tr><td><label><input type="checkbox" checked> status</label></td></tr>
                                <tr><td><label><input type="checkbox" > priority</label></td></tr>
                                <tr><td><label><input type="checkbox" > counterparty</label></td></tr>
                                <tr><td><label><input type="checkbox" > external reference</label></td></tr>
                                <tr><td><label><input type="checkbox" > reply mail</label></td></tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="3%">
                    <col>
                    <col width="25%">
                    <col width="30%">
                    <col width="20%">
                    <col>
                    <col width="3%">
                </colgroup>
                <thead>
                    <tr>
                        <th></th>
                        <th>Date</th>
                        <th>Customer care</th>
                        <th>Dispatching</th>
                        <th>Contact</th>
                        <th>Executor</th>
                        <th>Done</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a class="btn btn-small" href="#" title="Show support item"><i class="icon-tag"></i></a></td>
                        <td>20.02.2013</td>
                        <td>email: konstantin.cherniak@gmail.com</td>
                        <td>Vestibulum in lacus vel est tempus mattis</td>
                        <td><a href="#">A.G. Wolffenbuttel</a></td>
                        <td>Tom</td>
                        <td><i class="icon-thumbs-up text-success" title="Done"></i></td>
                    </tr>
					<tr>
                        <td><a class="btn btn-small" href="#" title="Show support item"><i class="icon-tag"></i></a></td>
                        <td>22.02.2013</td>
                        <td>email: sfs@gmail.com</td>
                        <td>Ut bibendum tellus vel magna aliquam suscipit</td>
                        <td><a href="#">Aenean lacus</a></td>
                        <td>Vivamus</td>
                        <td><i class="icon-question-sign muted" title="Not done"></i></td>
                    </tr>
					<tr>
                        <td><a class="btn btn-small" href="#" title="Show support item"><i class="icon-tag"></i></a></td>
                        <td>18.01.2013</td>
                        <td>case nr: 971213168</td>
                        <td>Donec varius augue ac lacus mollis</td>
                        <td><a href="#">Quisque nibh</a></td>
                        <td>Curabitur</td>
                        <td><i class="icon-thumbs-up text-success" title="Done"></i></td>
                    </tr>
					<tr>
                        <td><a class="btn btn-small" href="#" title="Show support item"><i class="icon-tag"></i></a></td>
                        <td>22.02.2013</td>
                        <td>email: sfs@gmail.com</td>
                        <td>Ut bibendum tellus vel magna aliquam suscipit</td>
                        <td><a href="#">Aenean lacus</a></td>
                        <td>Vivamus</td>
                        <td><i class="icon-question-sign muted" title="Not done"></i></td>
                    </tr>
					<tr>
                        <td><a class="btn btn-small" href="#" title="Show support item"><i class="icon-tag"></i></a></td>
                        <td>20.02.2013</td>
                        <td>email: konstantin.cherniak@gmail.com</td>
                        <td>Vestibulum in lacus vel est tempus mattis</td>
                        <td><a href="#">A.G. Wolffenbuttel</a></td>
                        <td>Tom</td>
                        <td><i class="icon-thumbs-up text-success" title="Done"></i></td>
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