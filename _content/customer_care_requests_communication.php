<div class="row-fluid">
    <h2 class="span8 title-page">Customer Care Requests Communication</h2>
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
    <a href="customer_care.php">Customer Care</a>
	<a href="customer_care_requests.php">Requests</a>
	<a class="current" href="#">Case nr 668728993</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'disabled'; ?>
	   	<? include_once "_parts/customer_care_left_navigation.php"; ?>
	</div>

	<div class="span9">
        <div class="well well-covide">
			<div class="btn-toolbar">
				<button class="btn btn-warning"><i class="icon-save"></i> Save</button>
				<button type="button" class="btn disabled pull-right">Case number: 23476768</button>
				<button type="button" class="btn disabled pull-right" title="Reponse time"><i class="icon-time"></i> 48 hours</button>
				<button type="button" class="btn disabled pull-right" title="Date"><i class="icon-calendar"></i> 01-02-2013 15:49</button>
				
			</div>
            
			<div class="tabbable"> <!-- Only required for left/right tabs -->
    			<ul class="nav nav-tabs">
					<li class="active"><a href="#tabMain" data-toggle="tab"><i class="icon-info-sign"></i> Main</a></li>
					<li><a href="#tabCommunication" data-toggle="tab"><i class="icon-comments-alt"></i> Communication</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tabMain">
						<form>
							<div class="well well-small well-covide-g fieldset-group">
								<div class="row-fluid">
									<span class="title"><i class="icon-info-sign"></i> Support Info</span>
									<div class="btn-group pull-right" data-toggle="buttons-radio">
										<button class="btn active" type="button" data-extra="show"><i class="icon-caret-down"></i></button>
										<button class="btn" type="button" data-extra="hide"><i class="icon-caret-up"></i></button>
									</div>
								</div>
								
								<fieldset>
									<div class="row-fluid">
										<div class="span6">
											<div class="controls controls-row">
												<select class="span6">
													<option>Select category</option>
													<option value="2">Commerciele vragen</option>
													<option value="6">Gebruikersvragen</option>
												</select>
												<select class="span6">
													<option>Select subcategory</option>
													<option value="2">CRM</option>
													<option value="6">Gapps</option>
												</select>
											</div>
											<div class="controls controls-row">
												<select class="span4">
													<option>Select status</option>
													<option value="2">In progress</option>
													<option value="6">Done</option>
												</select>					
												<select class="span4">
													<option>Select priority</option>
													<option value="2">High</option>
													<option value="6">Low</option>
												</select>
												<button class="btn span4" type="button" >Portal</button>
											</div>
										</div>
										<div class="span6">
											<div class="controls controls-row">
												<input class="span10" type="text" placeholder="Executor">
												<button class="btn span2" type="button" ><i class="icon-search"></i></button>
											</div>
											<ul class="list-striped linked-ul inline">
												<li class="odd form-inline controls-row span12">Klant-Apps <button type="button" class="close close-extra-field float-r" ><i class="icon-remove-sign"></i></button></li>
											</ul>	
										</div>
									</div>
								</fieldset>
							</div>
							
							<div class="well well-small well-covide-g fieldset-group">
								<div class="row-fluid">
									<span class="title"><i class="icon-sitemap"></i> Relations</span>
									<div class="btn-group pull-right" data-toggle="buttons-radio">
										<button class="btn active" type="button" data-extra="show"><i class="icon-caret-down"></i></button>
										<button class="btn" type="button" data-extra="hide"><i class="icon-caret-up"></i></button>
									</div>
								</div>
								
								<fieldset>
									<div class="row-fluid">
										<div class="span6">
											<div class="controls controls-row">
												<input class="span10" type="text" placeholder="Relation">
												<button class="btn span2" type="button" ><i class="icon-search"></i></button>
											</div>
											<ul class="list-striped linked-ul inline">
												<li class="odd form-inline controls-row span12">Klant-Apps <button type="button" class="close close-extra-field float-r" ><i class="icon-remove-sign"></i></button></li>
											</ul>	
											<div class="controls controls-row">
												<select class="span6">
													<option>Select business card</option>
													<option value="2">Commerciele vragen</option>
													<option value="6">Gebruikersvragen</option>
												</select>
												<select class="span6">
													<option>Select label</option>
													<option value="2">CRM</option>
													<option value="6">Gapps</option>
												</select>
											</div>

											<select class="span12">
												<option>Select email signature</option>
												<option value="2">In progress</option>
												<option value="6">Done</option>
											</select>					

										</div>
										<div class="span6">
											<div class="controls controls-row">
												<input class="span10" type="text" placeholder="Project">
												<button class="btn span2" type="button" ><i class="icon-search"></i></button>
											</div>
											<ul class="list-striped linked-ul inline">
												<li class="odd form-inline controls-row span12">Ksdf sfgps <button type="button" class="close close-extra-field float-r" ><i class="icon-remove-sign"></i></button></li>
											</ul>	
											<div class="controls controls-row">
												<input class="span10" type="text" placeholder="Email">
												<button class="btn span2" type="button" ><i class="icon-search"></i></button>
											</div>
											<ul class="list-striped linked-ul inline">
												<li class="odd form-inline controls-row">kostias@gmail.com <button type="button" class="close close-extra-field " ><i class="icon-remove-sign"></i></button></li>
												<li class="form-inline controls-row">vanias@gmail.com <button type="button" class="close close-extra-field " ><i class="icon-remove-sign"></i></button></li>
											</ul>	
										</div>
									</div>
								</fieldset>
							</div>
							
							<div class="well well-small well-covide-g fieldset-group">
								<div class="row-fluid">
									<span class="title"><i class="icon-file-alt"></i> Description</span>
									<div class="btn-group pull-right" data-toggle="buttons-radio">
										<button class="btn active" type="button" data-extra="show"><i class="icon-caret-down"></i></button>
										<button class="btn" type="button" data-extra="hide"><i class="icon-caret-up"></i></button>
									</div>
								</div>
								<fieldset>
									<div class="controls controls-row">
										<textarea rows="5" class="span12" >email: konstantin.cherniak@gmail.com, 
case nr: 904421040, 
relation name: Kostya category: CRM, 
description: Nulla fermentum dapibus lacus, venenatis semper nibh pretium non</textarea>
									</div>
								</fieldset>
							</div>
							
							<div class="well well-small well-covide-g fieldset-group">
								<div class="row-fluid">
									<span class="title"><i class="icon-file-alt"></i> Escalation</span>
									<div class="btn-group pull-right" data-toggle="buttons-radio">
										<button class="btn active" type="button" data-extra="show"><i class="icon-caret-down"></i></button>
										<button class="btn" type="button" data-extra="hide"><i class="icon-caret-up"></i></button>
									</div>
								</div>
								
								<fieldset>
									<div class="row-fluid">
										<div class="span8">
											<div class="controls controls-row">
												<input class="span10" type="text" placeholder="Email">
												<button class="btn span2" type="button" ><i class="icon-search"></i></button>
											</div>
											<ul class="list-striped linked-ul inline">
												<li class="odd form-inline controls-row">kostias@gmail.com <button type="button" class="close close-extra-field " ><i class="icon-remove-sign"></i></button></li>
												<li class="form-inline controls-row">vanias@gmail.com <button type="button" class="close close-extra-field " ><i class="icon-remove-sign"></i></button></li>
											</ul>	
										</div>
										<div class="span4">
											<label class="checkbox inline">
												<input type="checkbox" id="inlineCheckbox1" value="option1"> Accepted
											</label>
											<button class="btn pull-right" type="button" ><i class="icon-envelope"></i> Send link</button>
										</div>
									</div>
								</fieldset>
							</div>
							
							
							<div class="well well-small well-covide-g fieldset-group">
								<div class="row-fluid">
									<span class="title"><i class="icon-ok"></i> Applied solution</span>
									<div class="btn-group pull-right" data-toggle="buttons-radio">
										<button class="btn active" type="button" data-extra="show"><i class="icon-caret-down"></i></button>
										<button class="btn" type="button" data-extra="hide"><i class="icon-caret-up"></i></button>
									</div>
								</div>
								<fieldset>
									<div class="controls controls-row">
										<textarea rows="3" class="span12" >Via e-mail en/of telefoon is inhoudelijk met u gecommuniceerd. 
Gelieve - wanneer u het eens bent met het sluiten van deze vraag - niet meer op deze mail te reageren, omdat de call dan weer automatisch wordt geopend.</textarea>
									</div>
								</fieldset>
							</div>

						</form>
					</div>
					
					<div class="tab-pane" id="tabCommunication">
						<div class="row-fluid">
							<div class="span8">
								<ul class="list-striped linked-ul inline">
									<li class="form-inline controls-row"><i class="icon-pencil"></i> 2 (10 min)</li>
									<li class="form-inline controls-row"><i class="icon-envelope"></i> 2 (20 min)</li>
									<li class="form-inline controls-row"><i class="icon-user"></i> 0</li>
								</ul>	
							</div>
							<div class="span4">
								<div class="btn-group pull-right">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										Add new
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href=#><i class="icon-envelope"></i> email</a></li>
										<li><a href=#><i class="icon-pencil"></i> note</a></li>
									</ul>
								</div>
							</div>
						</div>

						<table class="table table-condensed table-striped">
							<colgroup>
                			    <col width="2%">
                    			<col width="2%">
                    			<col>
                    			<col>
								<col>
                    			<col>
                			</colgroup>
                			<thead>
								<tr>
									<th></th>
									<th></th>
									<th>Subject</th>
									<th>From</th>
									<th>To</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><button class="btn btn-small" data-toggle="collapse" data-target="#IdItem1"><i class="icon-caret-down"></i></button></td>
									<td><i class="icon-envelope"></i></td>
									<td>Phasellus eleifend lectus</td>
									<td>kostias@gmail.com</td>
									<td>jort@gmail.com </td>
									<td>23.02.2013 15:32</td>
								</tr>
								<tr>
									<td colspan="6">
									<div id="IdItem1" class="collapse in">
		
										<p>Sed aliquam, lectus et interdum dapibus, nulla enim lobortis libero, in consequat lacus tellus eu ipsum. In ornare, nunc vel sagittis dapibus, tellus urna lacinia tortor, ac feugiat risus eros sit amet justo. Duis eget est massa.</p>
									
										<ul class="list-striped linked-ul inline">
											<li class="odd form-inline controls-row">Attach.docx <span class="label" title="Google docs">Google</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
											<li class="form-inline controls-row">picture.jpg <span class="label" title="Covide file system">Covide</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
											<li class="odd form-inline controls-row">document.docx <span class="label" title="Local computer">Local</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
											<li class="form-inline controls-row">Attach.docx <span class="label" title="Google docs">Google</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
											<li class="odd form-inline controls-row">document.docx <span class="label" title="Local computer">Local</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
											<li class="form-inline controls-row">picture.jpg <span class="label" title="Covide file system">Covide</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
											<li class="odd form-inline controls-row">document.docx <span class="label" title="Local computer">Local</span> <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
										</ul>
										<hr>
										<div class="btn-toolbar">
											<button class="btn btn-small"><i class="icon-share-alt"></i> Replay</button>
											<label class="checkbox inline pull-right">
												<input type="checkbox" id="inlineCheckbox1" value="option1" > 
												<i class="icon-eye-close margin-l"></i> Hide from portal
											</label>
										</div>
									</div>
									</td>
								</tr>
								<tr>
									<td><button class="btn btn-small" data-toggle="collapse" data-target="#IdItem2"><i class="icon-caret-down"></i></button></td>
									<td><i class="icon-envelope"></i></td>
									<td>Duis eget est massa</td>
									<td>jort@gmail.com</td>
									<td>erty@gmail.com </td>
									<td>28.02.2013 15:32</td>
								</tr>
								<tr>
									<td colspan="6">
									<div id="IdItem2" class="collapse">
									test
									</div>
									</td>
								</tr>
								<tr>
									<td><button class="btn btn-small" data-toggle="collapse" data-target="#IdItem3"><i class="icon-caret-down"></i></button></td>
									<td><i class="icon-pencil"></i></td>
									<td>Aliquam pellentesque porttitor vehicula</td>
									<td>kostias@gmail.com</td>
									<td>otrtu@gmail.com </td>
									<td>21.02.2013 15:32</td>
								</tr>
								<tr>
									<td colspan="6">
									<div id="IdItem3" class="collapse">
									test
									</div>
									</td>
								</tr>
								<tr>
									<td><button class="btn btn-small" data-toggle="collapse" data-target="#IdItem4"><i class="icon-caret-down"></i></button></td>
									<td><i class="icon-pencil"></i></td>
									<td>Phasellus interdum malesuada dapibus.</td>
									<td>kostias@gmail.com</td>
									<td>otrtu@gmail.com </td>
									<td>25.02.2013 15:32</td>
								</tr>
								<tr>
									<td colspan="6">
									<div id="IdItem4" class="collapse">
									test
									</div>
									</td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
			
			<div class="btn-toolbar">
				<button class="btn btn-warning"><i class="icon-save"></i> Save</button>
				<label class="checkbox inline">
					<input type="checkbox" id="inlineCheckbox1" value="option1" > 
					<i class="icon-thumbs-up margin-l"></i> Done
				</label>
				<button type="button" class="btn disabled pull-right">Case number: 23476768</button>
				
			</div>
            
        </div>
	</div>
</div>