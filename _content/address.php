<div class="row-fluid">
    <div class="span8 title-page">
        <h2>Address</h2>
    </div>
    <div class="span4 title-button pull-right">
 		<div class="fontSizeChange btn-group pull-right" data-toggle="buttons-radio">
            <button class="btn size-small" type="button" data-size="small">A</button>
			<button class="btn size-normal active" type="button" data-size="normal">A</button>
			<button class="btn size-big" type="button" data-size="big">A</button>
        </div>
		<div class="btn-group pull-right">
             <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
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
	<div class="span3 text-center">
	    <div class="btn-group text-left">
			<a class="btn btn-covide btn-warning dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="icon-plus"></i> Add new
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a data-toggle="modal" href="_modals/add_relation_modal.php" data-target="#relationModal" ><i class="icon-sitemap"></i> relations</a></li>
				<li><a data-toggle="modal" href="_modals/add_buisness_card_modal.php" data-target="#buisnesscardModal" ><i class="icon-credit-card"></i> buisness card</a></li>
				<li><a data-toggle="modal" href="_modals/add_person_modal.php" data-target="#personModal" ><i class="icon-user"></i> person</a></li>
			</ul>
		</div>
		
		<!-- Start Relation Modal -->
		<div id="relationModal" class="modal add-relation-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="relationModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="relationModalLabel"><i class="icon-sitemap"></i> Add Relation</h4>
			</div>
			<div class="modal-body">
			
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-primary">Save changes</button>
			</div>
		</div>
		<!-- End Buisness Card Modal -->
		
		<!-- Start Buisness Card Modal -->
		<div id="buisnesscardModal" class="modal add-relation-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="buisnesscardModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="buisnesscardModalLabel"><i class="icon-credit-card"></i> Add Buisness Card</h4>
			</div>
			<div class="modal-body">
			
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-primary">Save changes</button>
			</div>
		</div>
		<!-- End Buisness Card Modal -->
		

		<!-- Start Person Modal Modal -->
		<div id="personModal" class="modal add-relation-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="personModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="personModalLabel"><i class="icon-user"></i> Add Person</h4>
			</div>
			<div class="modal-body">
			
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-primary">Save changes</button>
			</div>
		</div>
		<!-- End Buisness Card Modal -->

		
		
		
		
		<hr>
		<div class="well well-covide-menu text-left">
			<ul class="nav nav-tabs nav-stacked nav-covide">
				<li>
                    <a data-toggle="collapse" data-target="#submenu1" href="#"><i class="icon-sitemap"></i> Relations</a>
					<div id="submenu1" class="collapse in">
						<ul class="nav nav-tabs nav-stacked nav-covide">
							<li><a href="#"><i class="icon-folder-close-alt"></i> Customers</a></li>
							<li><a href="#"><i class="icon-folder-close-alt"></i> Suppliers</a></li>
							<li><a href="#"><i class="icon-folder-close-alt"></i> CMS forms</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#"><i class="icon-group"></i> Employees</a></li>
				<li><a href="#"><i class="icon-credit-card"></i> Businesscards</a></li>
        		<li><a href="#"><i class="icon-ban-circle"></i> Inactive relations</a></li>
				<li><a href="#"><i class="icon-warning-sign"></i> Duplicate relations</a></li>
			</ul>
		</div>
	</div>

	<div class="span9">
		<? include_once "_parts/search-form.php"; ?>

        <div class="well well-covide">
            <div class="well well-small well-covide">
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
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
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
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-plus"></i> Add rows
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

            <table class="table table-striped table-hover">
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
                        <td>Aliquam erat</td>
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
                        <td>Aenean vitae arcu</td>
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
                        <td>Aliquam feugiat</td>
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
                        <td>Suspendisse</td>
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
                        <td>Pellentesque justo</td>
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
                        <td>Vestibulum bibendum</td>
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
                        <td>Vivamus dui turpis</td>
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
                        <td>In placerat mollis</td>
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
                        <td>Cras vestibulum</td>
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
                        <td>Aenean vitae</td>
                        <td>Pellentesque vel odio orci</td>
                        <td>14.02.2013</td>
                        <td>154565234</td>
                        <td>Amsterdam</td>
                        <td>3807222561</td>
                    </tr>
                </tbody>
            </table>

            <div class="pagination text-center no-margin">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
	</div>
</div>