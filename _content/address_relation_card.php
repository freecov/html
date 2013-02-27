<div class="row-fluid">
    <div class="span8 title-page">
        <h2>Terrazur Relation Card</h2>
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
    <a href="address.php">Address</a>
	<a class="current" href="address_relation_card.php">Terrazur Relation Card</a>
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
			<div class="wrapper-modal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
					<h4 id="relationModalLabel"><i class="icon-sitemap"></i> Add Relation</h4>
				</div>
				<div class="modal-body">
			
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning">Add Relation</button>
				</div>
			</div>
		</div>
		<!-- End Relation Modal -->
		
		<!-- Start Buisness Card Modal -->

		<div id="buisnesscardModal" class="modal add-relation-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="buisnesscardModalLabel" aria-hidden="true">
			<div class="wrapper-modal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
					<h4 id="buisnesscardModalLabel"><i class="icon-credit-card"></i> Add Buisness Card</h4>
				</div>
				<div class="modal-body">
			
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning">Add Buisness Card</button>
				</div>
			</div>	
		</div>
	
		<!-- End Buisness Card Modal -->
		

		<!-- Start Person Modal Modal -->
		<div id="personModal" class="modal add-relation-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="personModalLabel" aria-hidden="true">
			<div class="wrapper-modal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
					<h4 id="personModalLabel"><i class="icon-user"></i> Add Person</h4>
				</div>
				<div class="modal-body">
				
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning">Add Person</button>
				</div>
			</div>
		</div>
		<!-- End Person Modal -->

		
		
		
		
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
		<div class="well well-covide">
		    <div class="tabbable"> <!-- Only required for left/right tabs -->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1relationcard" data-toggle="tab">Information</a></li>
					<li><a href="#tab2relationcard" data-toggle="tab">Buisness Cards</a></li>
					<li><a href="#tab3relationcard" data-toggle="tab">Projects</a></li>
					<li><a href="#tab4relationcard" data-toggle="tab">Memo</a></li>
					<li><a href="#tab5relationcard" data-toggle="tab">Extra</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab1relationcard">
						<h4><i class="icon-info-sign"></i> Information</h4>
						<div class="row-fluid">						
							<div class="span6">
								<dl class="dl-horizontal">
									<dt>Company name</dt><dd>Terrazur</dd>
									<dt>Relation nr</dt><dd>1005</dd>
    								<dt>Debtor nr	</dt><dd>1005</dt>
    								<dt>Addresstype	</dt><dd>customer</dt>
    								<dt>Bankaccount	</dt><dd>385562969</dt>
    								<dt>Contact	</dt><dd>De heer H. van der Sloot (Henk)</dt>
    								<dt>Address	</dt><dd>Bouwheerstraat 1b</dt>
    								<dt>Zip code	</dt><dd>3772 AL</dt>
    								<dt>City	</dt><dd>Barneveld</dt>
    								<dt>Country	</dt><dd>Netherlands</dt>
								</dl>	
							</div>
							<div class="span6">
								<dl class="dl-horizontal">
    								<dt>Streetmap	</dt><dd><a href=#>show map</a></dt>
    								<dt>Telephone nr	</dt><dd>+31342-490364</dt>
    								<dt>Mobile phone nr</dt><dd>123213123	</dt>
    								<dt>Fax nr	</dt><dd>+31342-423577</dt>
    								<dt>Email	</dt><dd><a href=#>toma@kovoks.nl</a></dt>
    								<dt>Website	</dt><dd><a href=#>http://www.terrazur.nl</a></dt>
    								<dt>Classification(s)	</dt><dd>Escalatie</dt>
    								<dt>Account manager	</dt><dd>none</dt>
    								<dt>Last changed	</dt><dd>last changed by administrator on 26-06-2012 12:14</dt>
								</dl>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab2relationcard">
						<h4><i class="icon-credit-card"></i> Buisness Cards</h4>
						
						<table class="table table-striped table-hover">
							<colgroup>
								<col width="2%">
								<col>
								<col>
								<col>
							</colgroup>
							<thead>
								<tr>
									<th></th>
									<th>Name</th>
									<th>Email</th>
									<th>Telephone</th> 
									<th>Mobile</th> 
									<th>Skype</th>
									<th>Linkedin</th>
									<th>Twitter</th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<td><i class="icon-lightbulb"></i></td>
									<td>Dhr. Henk van der Sloot</td>
                                    <td><a href="#">toma@kovoks.nl</a></td>
									<td>+31342-490364</td>
									<td>342425234</td>
									<td>Borneveld</td>
									<td>3807554565</td>
									<td>Borneveld</td>
								</tr>
								<tr>
									<td><i class="icon-lightbulb text-error"></i></td>
									<td>Heer/mevrouw</td>
                                    <td><a href="#">willem.massier@covide.nl</a></td>
									<td>+31342-490364</td>
									<td>342425234</td>
									<td>Borneveld</td>
									<td>3807554565</td>
									<td>Borneveld</td>
								</tr>
								<tr>
									<td><i class="icon-lightbulb"></i></td>
									<td>Test</td>
                                    <td><a href="#">toma@kovoks.nl</a></td>
									<td>+31342-490364</td>
									<td>342425234</td>
									<td>Borneveld</td>
									<td>3807554565</td>
									<td>Borneveld</td>
								</tr>
							</tbody>
						</table>
						
						
						
					</div>
					<div class="tab-pane" id="tab3relationcard">
						<p>Projects</p>
					</div>
					<div class="tab-pane" id="tab4relationcard">
						<p>Memo</p>
					</div>
					<div class="tab-pane" id="tab5relationcard">
						<p>Extra</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>