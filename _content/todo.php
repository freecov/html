<div class="row-fluid">
    <h2 class="span8 title-page">To do's</h2>
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
                <li><a href="#"><i class="icon-angle-right"></i> Print visible to-do's</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Print all to-do's</a></li>
                <li><a href="todo_show_planning.php"><i class="icon-angle-right"></i> Show planning</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a class="current" href="todo.php">To do's</a>
	
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'btn-warning'; ?>
	   	<? include_once "_parts/todo_left_navigation.php"; ?>
	</div>

	<div class="span9">
		<? include_once "_parts/search-form.php"; ?>

        <div class="well well-covide">
            <div class="well-title">
                <span class="title">To do's</span>
            </div>
            <div class="well well-small well-covide-g">
                <div class="btn-group">
                    <a class="btn  btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                        Selection actions <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="#">Edit selection</a></li>
						<li><a href="#">Mark selection as done</a></li>
                    </ul>
                </div>
                
            </div>

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="3%">
                    <col width="15%">
                    <col width="15%">
                    <col width="15%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
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
									<li><a href="#">None</a></li>
									<li><a href="#">Read</a></li>
									<li><a href="#">Unread</a></li>
								</ul>
							</div>
						</th>
                        <th>To do</th>
                        <th>Date</th>
                        <th>End date</th>
                        <th>Contact</th>
                        <th>Project</th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Priority</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><a href=#>Vestibulum</a></td>
                        <td>17-03-2013 22:24</td>
                        <td>18-03-2013 22:24</td>
                        <td><a href=#>Willem</a></td>
                        <td><a href=#>Praesent</a></td>
                        <td>osdn</td>
                        <td><span  data-original-title="active" class="label label-active label-success">A</span></td>
                        <td>
							<div  data-original-title="high" class="progress progress-small progress-striped">
                                <div class="bar bar-danger" style="width: 100%;"></div>
                            </div>
						</td>
                        <td>
							<div class="btn-group">
								<a href="#" class="btn btn-small"><i class="icon-info-sign"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-thumbs-up"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-edit"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-calendar"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-time"></i></a>
							</div>
						</td>
                    </tr>
					<tr>
                        <td><input type="checkbox"></td>
                        <td><a href=#>Aenean</a> <span class="label label-important"><i class="icon-flag "></i></span></td>
                        <td>17-03-2013 22:24</td>
                        <td>18-03-2013 22:24</td>
                        <td><a href=#>Willem</a></td>
                        <td><a href=#>Praesent</a></td>
                        <td>osdn</td>
                        <td><span  data-original-title="active" class="label label-active">P</span></td>
                        <td>
							<div  data-original-title="high" class="progress progress-small progress-striped">
                                <div class="bar bar-warning" style="width: 66%;"></div>
                            </div>
						</td>
                        <td>
							<div class="btn-group">
								<a href="#" class="btn btn-small"><i class="icon-info-sign"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-thumbs-up"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-edit"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-calendar"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-time"></i></a>
							</div>
						</td>
                    </tr>
					<tr>
                        <td><input type="checkbox"></td>
                        <td><a href=#>Class</a></td>
                        <td>17-03-2013 22:24</td>
                        <td>18-03-2013 22:24</td>
                        <td><a href=#>Willem</a></td>
                        <td><a href=#>Praesent</a></td>
                        <td>osdn</td>
                        <td><span  data-original-title="active" class="label label-active label-success">A</span></td>
                        <td>
							<div  data-original-title="high" class="progress progress-small progress-striped">
                                <div class="bar bar-success" style="width: 33%;"></div>
                            </div>
						</td>
                        <td>
							<div class="btn-group">
								<a href="#" class="btn btn-small"><i class="icon-info-sign"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-thumbs-up"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-edit"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-calendar"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-time"></i></a>
							</div>
						</td>
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