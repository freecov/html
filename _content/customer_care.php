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