<div class="row-fluid">
    <h2 class="span8 title-page">To do's - Show planning</h2>
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
    <a href="todo.php">To do's</a>
	<a class="current" href="todo_show_planning.php">Show planning</a>
	
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
                <span class="title">To do's planning</span>
            </div>

			<div class="table-plan">
            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="150px">
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
					<col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
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
                        <th>To do</th>
                        <th>01-03</th>
                        <th>02-03</th>
                        <th>03-03</th>
                        <th>04-03</th>
                        <th>05-03</th>
                        <th>06-03</th>
                        <th>07-03</th>
                        <th>08-03</th>
						<th>09-03</th>
                        <th>10-03</th>
                        <th>11-03</th>
                        <th>12-03</th>
                        <th>13-03</th>
                        <th>14-03</th>
                        <th>15-03</th>
                        <th>16-03</th>
                        <th>17-03</th>
                        <th>18-03</th>
                        <th>19-03</th>
                        <th>20-03</th>
                        <th>21-03</th>
                        <th>22-03</th>
                        <th>23-03</th>
                        <th>24-03</th>
						<th>25-03</th>
                        <th>26-03</th>
                        <th>27-03</th>
                        <th>28-03</th>
                        <th>29-03</th>
                        <th>30-03</th>
                        <th>31-03</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vestibulum</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="5"><button class="btn btn-mini btn-warning btn-block" type="button"></button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
						<td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Maecenas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="5"><button class="btn btn-mini btn-warning btn-block" type="button"></button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
						<td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
					<tr>
                        <td>Aliquam</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="5"><button class="btn btn-mini btn-warning btn-block" type="button"></button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
						<td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
			</div>
        </div>
	</div>
</div>