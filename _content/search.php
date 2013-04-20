<div class="row-fluid">
    <h2 class="span8 title-page">Search</h2>
    <div class="span4 title-button pull-right">
 		<div class="fontSizeChange btn-group pull-right" data-toggle="buttons-radio">
            <button class="btn btn-small size-small" data-size="small">A</button>
			<button class="btn btn-small size-normal active" data-size="normal">A</button>
			<button class="btn btn-small size-big" data-size="big">A</button>
        </div>
    </div>
</div>


<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php" ><i class="icon-home"></i> Home</a>
    <a class="current" href="search.php">Search</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span12">
		<? include_once "_parts/search-form-search-page.php"; ?>

		<div class="well well-covide">
            <div class="well-title">
                <span class="title"><i class="icon-book"></i> Address book - contacts</span>
            </div>

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
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
                </tbody>
            </table>
        </div>
		
		<div class="well well-covide">
            <div class="well-title">
                <span class="title"><i class="icon-calendar"></i> Calendar items</span>
            </div>

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="10%">
                    <col width="10%">
                    <col>
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Subject</th>
                        <th>User</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>20.02.2013</td>
                        <td>22.02.2013</td>
                        <td><a href="calendar.php">Test</a></td>
                        <td>osdn</td>
                    </tr>
                </tbody>
            </table>
        </div>
		
		<div class="well well-covide">
            <div class="well-title">
                <span class="title"><i class="icon-pencil"></i> Notes</span>
            </div>

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col width="5%">
                </colgroup>
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Sender</th>
                        <th>Recipient</th>
                        <th>Contact</th>
                        <th>Date</th>
                        <th>Customer contact</th>
                        <th>Done</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="notes_view.php">Vestibulum</a></td>
                        <td>Osdn</td>
                        <td>Askols</td>
                        <td>3807554565</td>
                        <td>20.02.2013</td>
                        <td>3807554565</td>
                        <td><i class="icon-thumbs-up text-success" title="" data-original-title="Done"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
	</div>
</div>