<div class="row-fluid">
    <h2 class="span8 title-page">Projects - Manage Project Costs</h2>
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
	<a class="current" href="projects_manage_project_costs.php">Manage Project Costs</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'btn-warning'; ?>
	   	<? include_once "_parts/projects_left_navigation.php"; ?>
	</div>

	<div class="span9">

        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Manage Project Costs</span>
            </div>
 

            <table class="table table-condensed table-striped table-hover table-activities">
                <colgroup>
                    <col>
                    <col width="10%">
                    <col width="10%">
                </colgroup>
                <thead>
                    <tr>
                        <th>Name</th>
						<th>Tarif</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="span12" type="text" value="Programma" placeholder="Name"></td>
						<td><input class="span12" type="text" value="2.00" placeholder="Tarif"></td>
                        <td>
							<div class="btn-group span12">
								<button class="btn btn-small span6 btn-warning"><i class="icon-save"></i></button>
								<button class="btn btn-small span6 btn-danger"><i class="icon-trash"></i></button>
							</div>
						</td>
                    </tr>
					<tr>
                        <td><input class="span12" type="text" value="Quisque" placeholder="name"></td>
						<td><input class="span12" type="text" value="2.00" placeholder="Tarif"></td>
                        <td>
							<div class="btn-group span12">
								<button class="btn btn-small span6 btn-warning"><i class="icon-save"></i></button>
								<button class="btn btn-small span6 btn-danger"><i class="icon-trash"></i></button>
							</div>
						</td>
                    </tr>
                </tbody>
            </table>
			
			<div class="well-title">
                <span class="title">Add New Cost</span>
            </div>

			
				<table class="table table-condensed table-striped table-hover table-activities">
					<colgroup>
						<col>
						<col width="10%">
						<col width="10%">
					</colgroup>
					<thead>
                    <tr>
                        <th>Name</th>
						<th>Tarif</th>
                        <th></th>
                    </tr>
					</thead>
					<tbody>
						<tr>
							<td><input class="span12" type="text" value="" placeholder="Name"></td>
							<td><input class="span12" type="text" value="" placeholder="Tarif"></td>
							<td>
								<button class="btn btn-small btn-block btn-warning"><i class="icon-save"></i></button>
							</td>
						</tr>
					</tbody>
				</table>

        </div>
	</div>
</div>