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
	<div class="span3">
		<? include_once "_parts/address_left_navigation.php"; ?>
	</div>

	<div class="span9">
		<div class="well well-covide">
		    <div class="tabbable"> <!-- Only required for left/right tabs -->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1relationcard" data-toggle="tab">Information</a></li>
					<li><a href="#tab2relationcard" data-toggle="tab">Business Cards</a></li>
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
    								<dt>Debtor nr	</dt><dd>1005</dd>
    								<dt>Addresstype	</dt><dd>customer</dd>
    								<dt>Bankaccount	</dt><dd>385562969</dd>
    								<dt>Contact	</dt><dd>De heer H. van der Sloot (Henk)</dd>
    								<dt>Address	</dt><dd>Bouwheerstraat 1b</dd>
    								<dt>Zip code</dt><dd>3772 AL</dd>
    								<dt>City	</dt><dd>Barneveld</dd>
    								<dt>Country	</dt><dd>Netherlands</dd>
								</dl>
							</div>
							<div class="span6">
								<dl class="dl-horizontal">
    								<dt>Streetmap	</dt><dd><a href=#>show map</a></dd>
    								<dt>Telephone nr	</dt><dd>+31342-490364</dd>
    								<dt>Mobile phone nr</dt><dd>123213123	</dd>
    								<dt>Fax nr	</dt><dd>+31342-423577</dd>
    								<dt>Email	</dt><dd><a href=#>toma@kovoks.nl</a></dd>
    								<dt>Website	</dt><dd><a href=#>http://www.terrazur.nl</a></dd>
    								<dt>Classification(s)	</dt><dd>Escalatie</dd>
    								<dt>Account manager	</dt><dd>none</dd>
    								<dt>Last changed	</dt>
                                    <dd>last changed by administrator on 26-06-2012 12:14</dd>
								</dl>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab2relationcard">
						<h4><i class="icon-credit-card"></i> Business Cards</h4>

						<form class="form-inline">
							<label>Sync user:</label>
							<select>
								<option>Osdn</option>
								<option>User</option>
								<option>Kostya</option>
							</select>
							<input type="text" class="span6" placeholder="Search business card">
							<button type="submit" class="btn"><i class="icon-search"></i> Search</button>
						</form>


						<table class="table table-striped table-hover">
							<colgroup>
								<col width="2%">
								<col width="4%">
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
									<th></th>
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
									<td><button data-toggle="modal" href="_modals/view_buisness_card_modal.php" data-target="#viewbuisnesscardModal" class="btn btn-small" type="button"><i class="icon-credit-card"></i></button></td>
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
									<td><button data-toggle="modal" href="_modals/view_buisness_card_modal.php" data-target="#viewbuisnesscardModal" class="btn btn-small" type="button"><i class="icon-credit-card"></i></button></td>
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
									<td><button data-toggle="modal" href="_modals/view_buisness_card_modal.php" data-target="#viewbuisnesscardModal" class="btn btn-small" type="button"><i class="icon-credit-card"></i></button></td>
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

						<!-- Start view Business Card Modal -->
						<div id="viewbuisnesscardModal" class="modal add-relation-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="viewbuisnesscardModalLabel" aria-hidden="true">
							<div class="wrapper-modal">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
									<h4 id="viewbuisnesscardModalLabel"><i class="icon-credit-card"></i> View Business Card</h4>
								</div>
								<div class="modal-body">

								</div>
								<div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

								</div>
							</div>
						</div>
						<!-- End view Business Card Modal -->


					</div>
					<div class="tab-pane" id="tab3relationcard">
						<h4><i class="icon-list"></i> Projects</h4>
						<table class="table table-striped table-hover">
							<colgroup>
								<col>
								<col>
								<col>
							</colgroup>
							<thead>
								<tr>
									<th>Name</th>
									<th>Description</th>
									<th>Active</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Suspendisse ornare</td>
									<td>Pellentesque volutpat, lectus eget feugiat auctor, felis lectus pellentesque tellus</td>
									<td><span class="label label-active label-success" data-original-title="active">A</span></td>
								</tr>
								<tr>
									<td>Vivamus</td>
									<td>Cras condimentum est sit amet tellus scelerisque vulputate</td>
									<td><span class="label label-active" data-original-title="passive">P</span></td>
								</tr>
								<tr>
									<td>Aliquam</td>
									<td>Curabitur at mauris dolor, id lobortis felis. Donec dignissim dui sit amet eros cursus pulvinar.</td>
									<td><span class="label label-active label-success" data-original-title="active">A</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="tab4relationcard">
						<h4><i class="icon-info-sign"></i> Memo</h4>
					</div>
					<div class="tab-pane" id="tab5relationcard">
						<h4><i class="icon-info-sign"></i> Extra</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>