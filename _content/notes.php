<div class="row-fluid">
    <h2 class="span8 title-page">Notes</h2>
    <div class="span4 title-button pull-right">
 		<div class="fontSizeChange btn-group pull-right" data-toggle="buttons-radio">
            <button class="btn btn-small size-small" data-size="small">A</button>
			<button class="btn btn-small size-normal active" data-size="normal">A</button>
			<button class="btn btn-small size-big" data-size="big">A</button>
        </div>
		<div class="btn-group pull-right">
             <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
                <i class="icon-cogs"></i> Actions
                <span class="caret"></span>
             </button>
             <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-angle-right"></i> Advanced search</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Export all</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Settings</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a href="notes.php">Notes</a>
	<a class="current" href="notes.php">Inbox</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeCompose = 'btn-warning'; ?>
	    <? include_once "_parts/notes_left_navigation.php"; ?>
	</div>

	<div class="span9">
		<? include_once "_parts/search-form.php"; ?>

        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Inbox</span>
            </div>
            <div class="well well-small well-covide-g">
                <div class="btn-group">
                    <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-exchange"></i> Selected actions
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
					    <li><a href="#"><i class="icon-inbox"></i> Archive selection</a></li>
                    </ul>
                </div>

            </div>

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="2%">
                    <col width="30%">
                    <col width="20%">
                    <col width="30%">
                    <col width="10%">
					<col width="4%">
					<col width="4%">
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
                        <th>Subject</th>
                        <th>Sender</th>
                        <th>Contact</th>
                        <th>Date <i class="icon-caret-down"></i></th>
						<th></th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><a href="notes_view.php"><b>Cum sociis natoque</b></a></td>
						<td><b>Aliquam</b></td>
                        <td><a href="#"><b>Vestibulum</b></a></td>
                        <td><b>20.02.2013</b></td>
						<td><i class="icon-time" title="Not done"></i></td>
			            <td><a href="" class="btn btn-small"><i class="icon-trash"></i></a></td>
                     </tr>
					<tr>
                        <td><input type="checkbox"></td>
                        <td><a href="notes_view.php"><b>Proin lobortis, nisi vitae</b></a></td>
						<td><b>Cras</b></td>
                        <td><a href="#"><b>Vestibulum</b></a>, <a href="#"><b>Duis</b></a></td>
                        <td><b>19.02.2013</b></td>
						<td><i class="icon-time" title="Not done"></i></td>
			            <td><a href="" class="btn btn-small"><i class="icon-trash"></i></a></td>
                    </tr>
					<tr>
                        <td><input type="checkbox"></td>
                        <td><a href="notes_view.php">Fusce sed accumsan arcu</a></td>
						<td>Donec</td>
                        <td><a href="#">Duis</a></td>
                        <td>19.02.2013</td>
						<td><i class="icon-thumbs-up text-success" title="Done"></i></td>
			            <td><a href="" class="btn btn-small"><i class="icon-trash"></i></a></td>
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