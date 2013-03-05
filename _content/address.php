<div class="row-fluid">
    <h2 class="span8 title-page">Address</h2>
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
                <li><a href="#"><i class="icon-angle-right"></i> Search classifications</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage classifications</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Advanced search</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Export all relations</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Import relations</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Import vCard</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Global metadata</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage headers</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Letter templates</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage custom view</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> View restricted e-mail archives</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> View businesscard revisions</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Connect to LinkedIn (LinkedIn connections)</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a class="current" href="address.php">Address</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
	   	<? include_once "_parts/address_left_navigation.php"; ?>
	</div>

	<div class="span9">
		<? include_once "_parts/search-form.php"; ?>

        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Relations</span>
                <span class="alphabet pull-right">
                    <a href="#"><b>[All]</b></a>
                    <a href="#">A</a>
                    <a href="#">B</a>
                    <a href="c">C</a>
                    <a href="d">D</a>
                    <a href="e">E</a>
                    <a href="f">F</a>
                    <a href="g">G</a>
                    <a href="h">H</a>
                    <a href="i">I</a>
                    <a href="j">J</a>
                    <a href="k">K</a>
                    <a href="l">L</a>
                    <a href="m">M</a>
                    <a href="n">N</a>
                    <a href="o">O</a>
                    <a href="p">P</a>
                    <a href="q">Q</a>
                    <a href="r">R</a>
                    <a href="s">S</a>
                    <a href="t">T</a>
                    <a href="u">U</a>
                    <a href="v">V</a>
                    <a href="w">W</a>
                    <a href="x">X</a>
                    <a href="y">Y</a>
                    <a href="z">Z</a>
                </span>
            </div>
            <div class="well well-small well-covide-g">
                <div class="btn-group">
                    <a class="btn  btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                        Selection actions <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Make selection inactive</a></li>
                        <li><a href="#">Manage selection's classification</a></li>
                        <li><a href="#">Export selection</a></li>
                        <li><a href="#">Print selection</a></li>
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
                                <tr><td><label><input type="checkbox" checked> Address</label></td></tr>
                                <tr><td><label><input type="checkbox"> Birthday</label></td></tr>
                                <tr><td><label><input type="checkbox" checked> City</label></td></tr>
                                <tr><td><label><input type="checkbox"> Country</label></td></tr>
                                <tr><td><label><input type="checkbox"> Email</label></td></tr>
                                <tr><td><label><input type="checkbox"> Given name</label></td></tr>
                                <tr><td><label><input type="checkbox"> Intials</label></td></tr>
                                <tr><td><label><input type="checkbox"> Last name</label></td></tr>
                                <tr><td><label><input type="checkbox" checked> Relation name</label></td></tr>
                                <tr><td><label><input type="checkbox" checked> Telephone nr</label></td></tr>
                                <tr><td><label><input type="checkbox" checked> Zip code</label></td></tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="2%">
                    <col width="2%">
                    <col width="3%">
                    <col>
                    <col>
                    <col>
                    <col>
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
                        <th></th>
                        <th></th>
                        <th>Relations</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Zip code</th>
                        <th>City</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-lightbulb"></i></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=#>relation card</a></li>
                                    <li><a href=#>more information</a></li>
                                    <li><a href=#>add business card</a></li>
                                    <li><a href=#>export as vCard</a></li>
                                    <li><a href=#>email</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><a href="address_relation_card.php">Terrazur</a></td>
                        <td>Vestibulum in lacus vel est tempus mattis</td>
                        <td>20.02.2013</td>
                        <td>342425234</td>
                        <td>Borneveld</td>
                        <td>3807554565</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-lightbulb text-error"></i></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=#>relation card</a></li>
                                    <li><a href=#>more information</a></li>
                                    <li><a href=#>add business card</a></li>
                                    <li><a href=#>export as vCard</a></li>
                                    <li><a href=#>email</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><a href="address_relation_card.php">Aenean vitae arcu</a></td>
                        <td>Vestibulum in lacus vel est tempus mattis</td>
                        <td>18.02.2013</td>
                        <td>455623339</td>
                        <td>Rotterdam</td>
                        <td>3807511125</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-lightbulb"></i></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=#>relation card</a></li>
                                    <li><a href=#>more information</a></li>
                                    <li><a href=#>add business card</a></li>
                                    <li><a href=#>export as vCard</a></li>
                                    <li><a href=#>email</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><a href="address_relation_card.php">Aliquam feugiat</a></td>
                        <td>Phasellus nisl lectus, interdum</td>
                        <td>03.02.2013</td>
                        <td>311102586</td>
                        <td>Amsterdam</td>
                        <td>3807556621</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-lightbulb text-error"></i></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=#>relation card</a></li>
                                    <li><a href=#>more information</a></li>
                                    <li><a href=#>add business card</a></li>
                                    <li><a href=#>export as vCard</a></li>
                                    <li><a href=#>email</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><a href="address_relation_card.php">Suspendisse</a></td>
                        <td>Aenean vitae arcu in dolor vehicula scelerisque</td>
                        <td>15.01.2013</td>
                        <td>553948869</td>
                        <td>Borneveld</td>
                        <td>3807500353</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-lightbulb"></i></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=#>relation card</a></li>
                                    <li><a href=#>more information</a></li>
                                    <li><a href=#>add business card</a></li>
                                    <li><a href=#>export as vCard</a></li>
                                    <li><a href=#>email</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><a href="address_relation_card.php">Pellentesque justo</a></td>
                        <td>Mauris quis libero lacinia ligula</td>
                        <td>05.01.2013</td>
                        <td>247935008</td>
                        <td>Amsterdam</td>
                        <td>3807998044</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-lightbulb"></i></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=#>relation card</a></li>
                                    <li><a href=#>more information</a></li>
                                    <li><a href=#>add business card</a></li>
                                    <li><a href=#>export as vCard</a></li>
                                    <li><a href=#>email</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><a href="address_relation_card.php">Vestibulum bibendum</a></td>
                        <td>Pellentesque habitant morbi tristique</td>
                        <td>10.02.2013</td>
                        <td>502036987</td>
                        <td>Rotterdam</td>
                        <td>3807554905</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-lightbulb text-error"></i></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=#>relation card</a></li>
                                    <li><a href=#>more information</a></li>
                                    <li><a href=#>add business card</a></li>
                                    <li><a href=#>export as vCard</a></li>
                                    <li><a href=#>email</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><a href="address_relation_card.php">Vivamus dui turpis</a></td>
                        <td>Aliquam feugiat urna</td>
                        <td>12.01.2013</td>
                        <td>678912546</td>
                        <td>Rotterdam</td>
                        <td>3807873269</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-lightbulb"></i></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=#>relation card</a></li>
                                    <li><a href=#>more information</a></li>
                                    <li><a href=#>add business card</a></li>
                                    <li><a href=#>export as vCard</a></li>
                                    <li><a href=#>email</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><a href="address_relation_card.php">In placerat mollis</a></td>
                        <td>Donec consequat enim non nisi </td>
                        <td>20.12.2012</td>
                        <td>742425234</td>
                        <td>Borneveld</td>
                        <td>3803544465</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-lightbulb text-error"></i></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=#>relation card</a></li>
                                    <li><a href=#>more information</a></li>
                                    <li><a href=#>add business card</a></li>
                                    <li><a href=#>export as vCard</a></li>
                                    <li><a href=#>email</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><a href="address_relation_card.php">Cras vestibulum</a></td>
                        <td>Vestibulum bibendum, mi sed consequat</td>
                        <td>30.01.2013</td>
                        <td>357425987</td>
                        <td>Amsterdam</td>
                        <td>3803554568</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><i class="icon-lightbulb"></i></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=#>relation card</a></li>
                                    <li><a href=#>more information</a></li>
                                    <li><a href=#>add business card</a></li>
                                    <li><a href=#>export as vCard</a></li>
                                    <li><a href=#>email</a></li>
                                </ul>
                            </div>
                        </td>
                        <td><a href="address_relation_card.php">Aenean vitae</a></td>
                        <td>Pellentesque vel odio orci</td>
                        <td>14.02.2013</td>
                        <td>154565234</td>
                        <td>Amsterdam</td>
                        <td>3807222561</td>
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