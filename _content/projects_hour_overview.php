<div class="row-fluid">
    <h2 class="span8 title-page">Projects - Hour Overview</h2>
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
	<a class="current" href="projects_hour_overview.php">Hour Overview</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'btn-warning'; ?>
	   	<? include_once "_parts/projects_left_navigation.php"; ?>
	</div>

	<div class="span9">
	
		<div class="well well-covide search-widget">
			<div class="well-title">
				<span class="title">Filter</span>
			</div>
		

			<form class="search-form">
				<div class="controls controls-row">
					<input class="span2" type="text" value="12-03-2013" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Select date">
					<input class="span2" type="text" value="12-03-2013" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Select date">
					<button class="btn span2" type="button" ><i class="icon-search"></i> Search</button>
				</div>
			</form>
		</div>

        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Hour Overview</span>
            </div>
 

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="50%">
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Billable hours</th>
                        <th>Non-billable hours</th>
                        <th>Unregistered hours</th>
                        <th>Total ammount of hours</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#">Christian</a></td>
                        <td>5</td>
                        <td>3</td>
                        <td>1</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td><a href="#">Hanna</a></td>
                        <td>5</td>
                        <td>3</td>
                        <td>1</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td><a href="#">Tom</a></td>
                        <td>5</td>
                        <td>3</td>
                        <td>1</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td><a href="#">Robbert</a></td>
                        <td>5</td>
                        <td>3</td>
                        <td>1</td>
                        <td>9</td>
                    </tr>
                 </tbody>
            </table>
		
        </div>
	</div>
</div>