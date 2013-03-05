<div class="row-fluid">
    <h2 class="span8 title-page">Email</h2>
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
                <li><a href="#"><i class="icon-angle-right"></i> Manage predefined content</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage e-mail filters</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage e-mail templates</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage shared folders</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Check newsletter e-mail addresses</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Force e-mail retrieval</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> To autoreply</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> To Google spam box</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a href="email.php">Email</a>
	<a class="current" href="email.php">Inbox</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeCompose = 'btn-warning'; ?>
	    <? include_once "_parts/email_left_navigation.php"; ?>
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
							<i class="icon-exchange"></i> Relation actions
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
					    <li><a href="#">Delete selection</a></li>
					    <li><a href="#">Move selection</a></li>
					    <li><a href="#">Toggle selection's read / unread status</a></li>
					    <li><a href="#">Make selection private</a></li>
					    <li><a href="#">Make selection public</a></li>
					    <li><a href="#">Try to link selection</a></li>
                    </ul>
                </div>
				<div class="btn-group">
                    <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                       <i class="icon-paper-clip"></i> Attachments actions
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
					    <li><a href="#">Delete selection</a></li>
					    <li><a href="#">Save selection in Covide file system</a></li>
					    <li><a href="#">Download selection</a></li>
					    <li><a href="#">Download selection as .zip-file</a></li>
                    </ul>
                </div>
				<div class="btn-group pull-right">
                    <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-plus"></i> Add columns
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown form">
                        <form>
                            <table class="table table-striped table-hover table-condensed table-borderless">
                                <tr><td><label><input type="checkbox" checked> Date</label></td></tr>
                                <tr><td><label><input type="checkbox"checked> Email</label></td></tr>
                                <tr><td><label><input type="checkbox" checked> Subject</label></td></tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="2%">
                    <col width="2%">
                    <col width="20%">
                    <col width="5%">
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
									<li><a href="#">None</a></li>
									<li><a href="#">Read</a></li>
									<li><a href="#">Unread</a></li>
									<li><a href="#">Starred</a></li>
								</ul>
							</div>
						</th>
                        <th></th>
                        <th>Email</th>
                        <th></th>
                        <th>Subject</th>
                        <th>Date <i class="icon-caret-down"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-star-empty"></i></td>
                        <td><b>Aliquam@gmail.com</b></td>
						<td>
                            <div class="btn-group">
                                <a class="btn btn-mini btn-warning dropdown-toggle" data-toggle="dropdown" href="#">R <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='#'><i class='icon-pencil'></i> Notes</a></li>
                                    <li><a href='#'><i class='icon-list'></i> Projects</a></li>
                                    <li><a href='#'><i class='icon-book'></i> Addresses</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><b>Vestibulum in lacus vel est tempus mattis</b></td>
                        <td><b>20.02.2013</b></td>
                     </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-star"></i></td>
                        <td><b>Aenean@gmail.com</b></td>
						<td>
                            <div class="btn-group">
                                <a class="btn btn-mini btn-warning dropdown-toggle" data-toggle="dropdown" href="#">R <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='#'><i class='icon-pencil'></i> Notes</a></li>
                                    <li><a href='#'><i class='icon-list'></i> Projects</a></li>
                                    <li><a href='#'><i class='icon-book'></i> Addresses</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><b>Vestibulum in lacus vel est tempus mattis</b></td>
                        <td><b>18.02.2013</b></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-star-empty"></i></td>
                        <td><b>Feugiat@gmail.com</b></td>
						<td>
                            <div class="btn-group">
                                <a class="btn btn-mini btn-warning dropdown-toggle" data-toggle="dropdown" href="#">R <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='#'><i class='icon-pencil'></i> Notes</a></li>
                                    <li><a href='#'><i class='icon-list'></i> Projects</a></li>
                                    <li><a href='#'><i class='icon-book'></i> Addresses</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><b>Phasellus nisl lectus, interdum</b></td>
                        <td><b>03.02.2013</b></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-star"></i></i></td>
                        <td><b>Suspendisse@gmail.com</b></td>
						<td>
                            <div class="btn-group">
                                <a class="btn btn-mini btn-warning dropdown-toggle" data-toggle="dropdown" href="#">R <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='#'><i class='icon-pencil'></i> Notes</a></li>
                                    <li><a href='#'><i class='icon-list'></i> Projects</a></li>
                                    <li><a href='#'><i class='icon-book'></i> Addresses</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><b>Aenean vitae arcu in dolor vehicula scelerisque</b></td>
                        <td><b>15.01.2013</b></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-star-empty"></i></td>
                        <td>Pellentesque justo</td>
						<td>
                            <div class="btn-group">
                                <a class="btn btn-mini btn-warning dropdown-toggle" data-toggle="dropdown" href="#">R <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='#'><i class='icon-pencil'></i> Notes</a></li>
                                    <li><a href='#'><i class='icon-list'></i> Projects</a></li>
                                    <li><a href='#'><i class='icon-book'></i> Addresses</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>Mauris quis libero lacinia ligula</td>
                        <td>05.01.2013</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-star-empty"></i></td>
                        <td>Vestibulum bibendum</td>
						<td>
                            <div class="btn-group">
                                <a class="btn btn-mini btn-warning dropdown-toggle" data-toggle="dropdown" href="#">R <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='#'><i class='icon-pencil'></i> Notes</a></li>
                                    <li><a href='#'><i class='icon-list'></i> Projects</a></li>
                                    <li><a href='#'><i class='icon-book'></i> Addresses</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>Pellentesque habitant morbi tristique</td>
                        <td>10.02.2013</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-star"></i></td>
                        <td>Vivamus dui turpis</td>
						<td>
                            <div class="btn-group">
                                <a class="btn btn-mini btn-warning dropdown-toggle" data-toggle="dropdown" href="#">R <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='#'><i class='icon-pencil'></i> Notes</a></li>
                                    <li><a href='#'><i class='icon-list'></i> Projects</a></li>
                                    <li><a href='#'><i class='icon-book'></i> Addresses</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>Aliquam feugiat urna</td>
                        <td>12.01.2013</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-star-empty"></i></td>
                        <td>In placerat mollis</td>
						<td>
                            <div class="btn-group">
                                <a class="btn btn-mini btn-warning dropdown-toggle" data-toggle="dropdown" href="#">R <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='#'><i class='icon-pencil'></i> Notes</a></li>
                                    <li><a href='#'><i class='icon-list'></i> Projects</a></li>
                                    <li><a href='#'><i class='icon-book'></i> Addresses</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>Donec consequat enim non nisi </td>
                        <td>20.12.2012</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-star"></i></td>
                        <td>Cras vestibulum</td>
						<td>
                            <div class="btn-group">
                                <a class="btn btn-mini btn-warning dropdown-toggle" data-toggle="dropdown" href="#">R <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='#'><i class='icon-pencil'></i> Notes</a></li>
                                    <li><a href='#'><i class='icon-list'></i> Projects</a></li>
                                    <li><a href='#'><i class='icon-book'></i> Addresses</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>Vestibulum bibendum, mi sed consequat</td>
                        <td>30.01.2013</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-star-empty"></i></td>
                        <td>Aenean vitae</td>
						<td>
                            <div class="btn-group">
                                <a class="btn btn-mini btn-warning dropdown-toggle" data-toggle="dropdown" href="#">R <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='#'><i class='icon-pencil'></i> Notes</a></li>
                                    <li><a href='#'><i class='icon-list'></i> Projects</a></li>
                                    <li><a href='#'><i class='icon-book'></i> Addresses</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>Pellentesque vel odio orci</td>
                        <td>14.02.2013</td>
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