<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab1person" data-toggle="tab">Information</a></li>
		<li><a href="#tab2person" data-toggle="tab">Business</a></li>
		<li><a href="#tab3person" data-toggle="tab">Business address</a></li>
		<li><a href="#tab4person" data-toggle="tab">Private address</a></li>
		<li><a href="#tab5person" data-toggle="tab">Other address</a></li>
		<li><a href="#tab6person" data-toggle="tab">Other</a></li>
    </ul>

	<div class="tab-content">
		<div class="tab-pane active" id="tab1person">
			<p><b><i class="icon-info-sign"></i> Information</b></p>
		    <form>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Free Field">
					<input class="span6" type="text" placeholder="Given Name">
				</div>
				<div class="controls controls-row">
					<select class="span3">
						<option>Select letterhead</option>
						<option>Beste</option>
						<option>Geachte</option>
						<option>Dear</option>
					</select>
					<input class="span3" type="text" placeholder="Insertion">
					<select class="span2">
						<option>Select title</option>
						<option value="1">Dr.</option>
						<option value="2">Drs.</option>
						<option value="3">Ing.</option>
						<option value="4">Ir.</option>
						<option value="5">Mr.</option>
						<option value="6">Prof.</option>
						<option value="7">Prof. Dr.</option>
						<option value="8">BSc.</option>
						<option value="9">MSc.</option>
						<option value="10">Drs. Ing.</option>
					</select>
					<input class="span4" type="text" placeholder="Last Name">
				</div>
				<div class="controls controls-row">

					<input class="span2" type="text" placeholder="Initials">
					<select class="span2">
						<option>Select sex</option>
						<option>Male</option>
						<option>Female</option>
					</select>
					<select class="span2">
						<option>Select suffix</option>
						<option value="1">I</option>
						<option value="2">II</option>
						<option value="3">III</option>
						<option value="4">Jr.</option>
						<option value="5">Sr.</option>
					</select>
					<select class="span3">
						<option>Select commencement</option>
						<option value="1">Dhr.</option>
						<option value="2">Mevr.</option>
						<option value="3">heer/mevrouw</option>
						<option value="4">---</option>
						<option value="5">Mr.</option>
						<option value="6">Mrs.</option>
						<option value="7">Ms.</option>
					</select>
					<input class="span3" type="text" placeholder="Birth Date">
				</div>
				<div class="controls controls-row">


				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="SSN">
					<input class="span6" type="text" placeholder="Person Number">
				</div>

			</form>
		</div>
		<div class="tab-pane" id="tab2person">
			<form>
				<p><b><i class="icon-briefcase"></i> Company information</b></p>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Job Title">
					<input class="span6" type="text" placeholder="Locationcode">
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Business Unit">
					<input class="span6" type="text" placeholder="Department">
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Manager Name">
					<input class="span6" type="text" placeholder="Profession">
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Website">
					<input class="span3" type="text" placeholder="Assisant Name">
					<input class="span3" type="text" placeholder="Assistant Phone Nr">
				</div>
				<p><b><i class="icon-sitemap"></i> Linked Relations</b></p>
				<div class="controls controls-row">
					<ul class="list-striped linked-ul inline">
						<li class="odd form-inline controls-row">Van Wijck, Gorisira &Tacken <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
						<li class="form-inline controls-row">Terrazur <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
					</ul>

					<button class="btn" type="button"><i class="icon-link"></i> Link Relations</button>
				</div>
				<hr>
				<p><b><i class="icon-exchange"></i> Classfication information</b></p>
				<div class="controls controls-row">
					<ul class="list-striped linked-ul inline">
						<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
						<li class="form-inline controls-row">Klant-CRM <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
					</ul>

					<a class="btn" type="button" data-toggle="modal" href="_modals/add_classification_modal.php" data-target="#pcClassificationModal" ><i class="icon-link"></i> Link Classfication</a>

					<!-- Start classification Modal -->
					<div id="pcClassificationModal" class="modal add-classification-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="classificationModalLabel" aria-hidden="true">
						<div class="wrapper-modal">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
								<h4 id="classificationModalLabel"><i class="icon-exchange"></i> Link Classification</h4>
							</div>
							<div class="modal-body">

							</div>
							<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								<button class="btn btn-warning">Link Classification</button>
							</div>
						</div>
					</div>
					<!-- End classification Modal -->

				</div>
				<hr>
				<p><b><i class="icon-info-sign"></i> Extra company information</b> <span class="muted">(only if information differs from relation card)</span></p>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Company Name">
					<input class="span6" type="text" placeholder="Company Phone Nr">
				</div>
			</form>
		</div>
		<div class="tab-pane" id="tab3person">
			<form>
				<p><b><i class="icon-building"></i> Visiting address</b></p>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Address">
					<input class="span6" type="text" placeholder="Address addition">
				</div>
				<div class="controls controls-row">
					<input class="span3" type="text" placeholder="City">
					<input class="span3" type="text" placeholder="State/Province">
					<input class="span2" type="text" placeholder="Zip code">
					<select class="span4">
						<option>Country</option>
						<option value="AF">Afghanistan</option>
						<option value="AL">Albania</option>
						<option value="DZ">Algeria</option>
						<option value="AS">American Samoa</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antarctica</option>
						<option value="AG">Antigua And Barbuda</option>
						<option value="AR">Argentina</option>
						<option value="AM">...</option>
					</select>
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Telephone nr 1">
					<input class="span6" type="text" placeholder="Telephone nr 2">
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Mobile phone nr">
					<input class="span3" type="text" placeholder="Fax nr">
					<input class="span3" type="text" placeholder="Car phone nr">
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Skype">
					<input class="span6" type="text" placeholder="Email">
				</div>
				<hr>
				<p><b><i class="icon-comments-alt"></i> Social media</b></p>
					<div class="input-prepend input-prepend-social">
						<span class="add-on"><i class="icon-twitter"></i></span>
						<input  type="text" class="span11" placeholder="Twitter Account">
					</div>
					<div class="input-prepend input-prepend-social no-margin">
						<span class="add-on"><i class="icon-linkedin"></i></span>
						<input  type="text" class="span11" placeholder="LinkedIn Account">
					</div>
				<hr class="margin-t2">
				<p><b><i class="icon-phone"></i> Custom business phone numbers</b></p>
				<div class="controls controls-row">
					<input class="span3" type="text" placeholder="Callback phone nr">
					<input class="span3" type="text" placeholder="Radio phone nr">
					<input class="span3" type="text" placeholder="Pager number">
					<input class="span3" type="text" placeholder="Telex nr">
				</div>
				<hr>
				<p><b><i class="icon-envelope"></i> Mailing address</b></p>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Address">
					<input class="span6" type="text" placeholder="Address addition">
				</div>
				<div class="controls controls-row">
					<input class="span3" type="text" placeholder="City">
					<input class="span3" type="text" placeholder="State/Province">
					<input class="span2" type="text" placeholder="Zip code">
					<select class="span4">
						<option>Country</option>
						<option value="AF">Afghanistan</option>
						<option value="AL">Albania</option>
						<option value="DZ">Algeria</option>
						<option value="AS">American Samoa</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antarctica</option>
						<option value="AG">Antigua And Barbuda</option>
						<option value="AR">Argentina</option>
						<option value="AM">...</option>
					</select>
				</div>
			</form>
		</div>
		<div class="tab-pane" id="tab4person">
			<form>
				<p><b><i class="icon-building text-error"></i> Private address</b></p>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Address">
					<input class="span6" type="text" placeholder="Address addition">
				</div>
				<div class="controls controls-row">
					<input class="span3" type="text" placeholder="City">
					<input class="span3" type="text" placeholder="State/Province">
					<input class="span2" type="text" placeholder="Zip code">
					<select class="span4">
						<option>Country</option>
						<option value="AF">Afghanistan</option>
						<option value="AL">Albania</option>
						<option value="DZ">Algeria</option>
						<option value="AS">American Samoa</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antarctica</option>
						<option value="AG">Antigua And Barbuda</option>
						<option value="AR">Argentina</option>
						<option value="AM">...</option>
					</select>
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Telephone nr 1">
					<input class="span6" type="text" placeholder="Telephone nr 2">
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Mobile phone nr">
					<input class="span6" type="text" placeholder="Fax nr">
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Email">
					<input class="span6" type="text" placeholder="Skype">
				</div>
			</form>
		</div>
		<div class="tab-pane" id="tab5person">
			<form>
				<p><b><i class="icon-building text-info"></i> Other address</b></p>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Address">
					<input class="span6" type="text" placeholder="Address addition">
				</div>
				<div class="controls controls-row">
					<input class="span3" type="text" placeholder="City">
					<input class="span3" type="text" placeholder="State/Province">
					<input class="span2" type="text" placeholder="Zip code">
					<select class="span4">
						<option>Country</option>
						<option value="AF">Afghanistan</option>
						<option value="AL">Albania</option>
						<option value="DZ">Algeria</option>
						<option value="AS">American Samoa</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antarctica</option>
						<option value="AG">Antigua And Barbuda</option>
						<option value="AR">Argentina</option>
						<option value="AM">...</option>
					</select>
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Telephone nr 1">
					<input class="span6" type="text" placeholder="Telephone nr 2">
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Mobile phone nr">
					<input class="span6" type="text" placeholder="Fax nr">
				</div>
				<div class="controls controls-row">
					<input class="span6" type="text" placeholder="Email">
				</div>
			</form>
		</div>
		<div class="tab-pane" id="tab6person">
			<form>
				<p><b><i class="icon-info-sign"></i> Other</b></p>
				<div class="controls controls-row">
					<textarea  class="span12" rows="3"></textarea>
				</div>
			</form>
		</div>
	</div>
</div>