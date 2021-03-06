<div class="row-fluid">
    <h2 class="span8 title-page">Projects Show Info</h2>
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
                <li><a href="projects_activities.php"><i class="icon-angle-right"></i> Manage activities</a></li>
				<li><a href="projects_activities_groups.php"><i class="icon-angle-right"></i> Manage activity groups</a></li>
                <li><a href="projects_manage_project_costs.php"><i class="icon-angle-right"></i> Manage other project costs</a></li>
                <li><a href="projects_hour_overview.php"><i class="icon-angle-right"></i> Hour overview</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Settings</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a href="projects.php">Projects</a>
	<a class="current" href="projects_show_info.php">Show Info</a>
	
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'btn-warning'; ?>
	   	<? include_once "_parts/projects_left_navigation.php"; ?>
	</div>

	<div class="span9">
		<? include_once "_parts/search-form.php"; ?>

        <div class="well well-covide">
		
			<div class="well-title">
                <span class="title">Show Info</span>
            </div>
            

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="20%">
                    <col width="30%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                </colgroup>
                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Description</th>
						<th>Masterproject</th>
                        <th>Pr. manager</th>
						<th>Active</th>
                        <th>Relations</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
						<td>Main Project sjdfhl a</td>
                        <td>WBSO TV uitvoeren</td>
						<td><i class="icon-ok-circle text-success"></i></td>
                        <td>willem</td>
						<td><i class="icon-ok-circle text-success"></i></td>
                        <td><a href="#">Terrazur</a></td>
                        <td>
							<button class="btn btn-small"><i class="icon-edit"></i></button>
						</td>
                    </tr>
                </tbody>
            </table>
		
		
            <div class="well-title">
                <span class="title">Subprojects</span>
            </div>
            

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="20%">
                    <col width="55%">
                    <col width="15%">
                    <col width="10%">
                    <col width="10%">
                </colgroup>
                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Description</th>
                        <th>Executor</th>
                        <th>Active</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Morbi</td>
                        <td>Sed nec lacus eget augue ultricies consectetur</td>
                        <td>willem</td>
                        <td><i class="icon-ok-circle text-success"></i></td>
                        <td>
							<div class="btn-group">
								<button class="btn btn-small"><i class="icon-edit"></i></button>
								<button class="btn btn-small"><i class="icon-file-alt"></i></button>
							</div>
						</td>
                    </tr>
					<tr>
                        <td>Vivamus</td>
                        <td>Nullam orci ante, tincidunt vitae varius ve</td>
                        <td>willem</td>
                        <td><i class="icon-ok-circle text-success"></i></td>
                        <td>
							<div class="btn-group">
								<button class="btn btn-small"><i class="icon-edit"></i></button>
								<button class="btn btn-small"><i class="icon-file-alt"></i></button>
							</div>
						</td>
                    </tr>
					<tr>
                        <td>Vestibulum</td>
                        <td>Suspendisse vel justo ut eros lobortis condimentum</td>
                        <td>willem</td>
                        <td><i class="icon-ok-circle text-success"></i></td>
                        <td>
							<div class="btn-group">
								<button class="btn btn-small"><i class="icon-edit"></i></button>
								<button class="btn btn-small"><i class="icon-file-alt"></i></button>
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