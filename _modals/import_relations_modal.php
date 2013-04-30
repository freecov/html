		<ul class="nav nav-pills">
			<li class="active">
				<a href="#step1_irm" data-toggle="tab">Step 1</a>
			</li>
			<li>
				<a href="#step2_irm" data-toggle="tab">Step 2</a>
			</li>
		</ul>
		
		<div class="tab-content">
			<div class="tab-pane active" id="step1_irm">
				<div class="fieldset-group">
					<form>
						<div class="row-fluid">
							<div class="span12 form-inline controls-row">
								<fieldset>
									<div class="controls controls-row ">
										<select class="span4">
											<option >Choose seperation character</option>
											<option value="comma">, (comma)</option>
											<option value="semicolon">; (semicolon)</option>
										</select>
										<select class="span4">
											<option selected="selected">Skip first line</option>
											<option value="0">no</option>
											<option value="1">skip first row</option>\
											<option value="2">skip first two rows</option>
											<option value="3">skip first three rows</option>
										</select>
										<select class="span4">
											<option >Select import target</option>
											<option value="relation">relations </option>
											<option value="bcard">business cards</option>
										</select>
									</div>
								</fieldset>
								<fieldset>
									<legend><i class="icon-copy"></i> Choose file to import (CSV format)</legend>
									<ul class="list-striped linked-ul inline">
										<li class="odd form-inline controls-row">Attach.docx <button type="button" class="close close-extra-field"><i class="icon-remove-sign"></i></button></li>
									</ul>
									<button class="btn" type="button"> Choose file</button>
								</fieldset>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="tab-pane" id="step2_irm">
				<h4>Import target: business cards</h4>
				<div class="row-fluid">
					<div class="span6 form-inline controls-row">
						<div class="fieldset-group form-inline controls-row" >
							<form>
								<fieldset>
									<legend><i class="icon-exchange"></i> Classification</legend>
									<select name="classi" id="classi" class="inputselect"><option value="0" selected="selected">none</option><option value="2">do not contact</option><option value="18">no newsletter</option><option value="6">Escalatie</option><option value="44">import-201304301936</option><option value="42">Klant</option><option value="43">prospect-afspraak</option><option value="41">prospect-later opnieuw benaderen</option><option value="30">Jeans1</option><option value="31">Jeans2</option><option value="32">Shirt1</option><option value="33">Shirt2</option><option value="34">Van Bommel type 1</option><option value="35">Van Bommel type 2</option><option value="38">Sokken type hoog</option><option value="39">Sokken type laag</option><option value="37">Wollen das</option><option value="36">Zijden das</option><option value="28">Driedelig kostuum 1</option><option value="27">Tweedelig kostuum 1</option><option value="40">Tweedelig kostuum 2</option></select>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				
				<div class="well well-covide">
					<div class="well-title">
            		    <span class="title">Below the first 5 records. Pick matching columns</span>
            	    </div>
	                
        	        <table class="table table-condensed table-striped table-hover">
						<colgroup>
        	                <col width="100 px">
                	        <col width="100 px">
                	        <col width="100 px">
                	        <col width="100 px">
                	    </colgroup>
                	    <thead>
                    	    <tr>
                        	    <th>
									<select><optgroup title="no action" label="no action"><option value="0" selected="selected">skip</option></optgroup><optgroup title="business fields" label="business fields"><option value="business_phone_nr">b: telephone number</option><option value="business_phone_nr_2">b: telephone number 2</option><option value="business_car_phone">b: telephone number (car)</option><option value="business_fax_nr">b: fax number</option><option value="business_mobile_nr">b: mobile phone number</option><option value="business_email">b: email</option><option value="business_address">b: address</option><option value="business_zipcode">b: zipcode</option><option value="business_city">b: city</option><option value="business_state">b: state</option><option value="business_country">b: country</option><option value="jobtitle">b: jobtitle</option><option value="businessunit">b: business unit</option><option value="department">b: department</option><option value="locationcode">b: locationcode</option><option value="website">b: website</option></optgroup><optgroup title="optional business fields" label="optional business fields"><option value="opt_company_name">companyname</option><option value="opt_company_phone_nr">optional telephone number</option><option value="opt_callback_phone_nr">callback telephone number</option><option value="opt_pager_number">pager number</option><option value="opt_radio_phone_nr">radio phone number</option><option value="opt_telex_number">telex number</option><option value="opt_manager_name">manager name</option><option value="opt_profession">profession</option><option value="opt_assistant_name">assistant name</option><option value="opt_assistant_phone_nr">assistant telephone number</option></optgroup><optgroup title="personal fields" label="personal fields"><option value="personal_phone_nr">p: telephone number</option><option value="personal_fax_nr">p: fax number</option><option value="personal_mobile_nr">p: mobile phone number</option><option value="personal_email">p: email</option><option value="personal_address">p: address</option><option value="personal_zipcode">p: zipcode</option><option value="personal_city">p: city</option><option value="personal_state">p: state</option><option value="personal_country">p: country</option></optgroup><optgroup title="other address fields" label="other address fields"><option value="other_phone_nr">o: telephone number</option><option value="other_phone_nr_2">o: telephone number 2</option><option value="other_fax_nr">o: fax number</option><option value="other_mobile_nr">o: mobile phone number</option><option value="other_email">o: email</option><option value="other_address">o: address</option><option value="other_zipcode">o: zipcode</option><option value="other_city">o: city</option><option value="other_state">o: state</option><option value="other_country">o: country</option></optgroup><optgroup title="pobox fields" label="pobox fields"><option value="pobox">pobox</option><option value="pobox_zipcode">zipcode</option><option value="pobox_city">city</option><option value="pobox_state">state</option><option value="pobox_country">country</option></optgroup><optgroup title="contact fields" label="contact fields"><option value="alternative_name">alternative name</option><option value="letterhead">letterhead</option><option value="commencement">commencement</option><option value="gender">gender (0=Unknown, 1=male, 2=female)</option><option value="title">title</option><option value="initials">initials</option><option value="givenname">given name</option><option value="infix">infix</option><option value="surname">last name</option><option value="suffix">suffix</option><option value="ssn">bsn</option><option value="personnumber">person number</option><option value="timestamp_birthday">birthday</option><option value="bankaccount">bank account</option><option value="giro">giro</option></optgroup><optgroup title="misc fields" label="misc fields"><option value="memo">memo</option></optgroup><optgroup title="special fields" label="special fields"><option value="classification">add classification</option><option value="companyname">try link company by name</option></optgroup></select>
								</th>
                        	    <th>
									<select><optgroup title="no action" label="no action"><option value="0" selected="selected">skip</option></optgroup><optgroup title="business fields" label="business fields"><option value="business_phone_nr">b: telephone number</option><option value="business_phone_nr_2">b: telephone number 2</option><option value="business_car_phone">b: telephone number (car)</option><option value="business_fax_nr">b: fax number</option><option value="business_mobile_nr">b: mobile phone number</option><option value="business_email">b: email</option><option value="business_address">b: address</option><option value="business_zipcode">b: zipcode</option><option value="business_city">b: city</option><option value="business_state">b: state</option><option value="business_country">b: country</option><option value="jobtitle">b: jobtitle</option><option value="businessunit">b: business unit</option><option value="department">b: department</option><option value="locationcode">b: locationcode</option><option value="website">b: website</option></optgroup><optgroup title="optional business fields" label="optional business fields"><option value="opt_company_name">companyname</option><option value="opt_company_phone_nr">optional telephone number</option><option value="opt_callback_phone_nr">callback telephone number</option><option value="opt_pager_number">pager number</option><option value="opt_radio_phone_nr">radio phone number</option><option value="opt_telex_number">telex number</option><option value="opt_manager_name">manager name</option><option value="opt_profession">profession</option><option value="opt_assistant_name">assistant name</option><option value="opt_assistant_phone_nr">assistant telephone number</option></optgroup><optgroup title="personal fields" label="personal fields"><option value="personal_phone_nr">p: telephone number</option><option value="personal_fax_nr">p: fax number</option><option value="personal_mobile_nr">p: mobile phone number</option><option value="personal_email">p: email</option><option value="personal_address">p: address</option><option value="personal_zipcode">p: zipcode</option><option value="personal_city">p: city</option><option value="personal_state">p: state</option><option value="personal_country">p: country</option></optgroup><optgroup title="other address fields" label="other address fields"><option value="other_phone_nr">o: telephone number</option><option value="other_phone_nr_2">o: telephone number 2</option><option value="other_fax_nr">o: fax number</option><option value="other_mobile_nr">o: mobile phone number</option><option value="other_email">o: email</option><option value="other_address">o: address</option><option value="other_zipcode">o: zipcode</option><option value="other_city">o: city</option><option value="other_state">o: state</option><option value="other_country">o: country</option></optgroup><optgroup title="pobox fields" label="pobox fields"><option value="pobox">pobox</option><option value="pobox_zipcode">zipcode</option><option value="pobox_city">city</option><option value="pobox_state">state</option><option value="pobox_country">country</option></optgroup><optgroup title="contact fields" label="contact fields"><option value="alternative_name">alternative name</option><option value="letterhead">letterhead</option><option value="commencement">commencement</option><option value="gender">gender (0=Unknown, 1=male, 2=female)</option><option value="title">title</option><option value="initials">initials</option><option value="givenname">given name</option><option value="infix">infix</option><option value="surname">last name</option><option value="suffix">suffix</option><option value="ssn">bsn</option><option value="personnumber">person number</option><option value="timestamp_birthday">birthday</option><option value="bankaccount">bank account</option><option value="giro">giro</option></optgroup><optgroup title="misc fields" label="misc fields"><option value="memo">memo</option></optgroup><optgroup title="special fields" label="special fields"><option value="classification">add classification</option><option value="companyname">try link company by name</option></optgroup></select>
								</th> 
								<th>
									<select><optgroup title="no action" label="no action"><option value="0" selected="selected">skip</option></optgroup><optgroup title="business fields" label="business fields"><option value="business_phone_nr">b: telephone number</option><option value="business_phone_nr_2">b: telephone number 2</option><option value="business_car_phone">b: telephone number (car)</option><option value="business_fax_nr">b: fax number</option><option value="business_mobile_nr">b: mobile phone number</option><option value="business_email">b: email</option><option value="business_address">b: address</option><option value="business_zipcode">b: zipcode</option><option value="business_city">b: city</option><option value="business_state">b: state</option><option value="business_country">b: country</option><option value="jobtitle">b: jobtitle</option><option value="businessunit">b: business unit</option><option value="department">b: department</option><option value="locationcode">b: locationcode</option><option value="website">b: website</option></optgroup><optgroup title="optional business fields" label="optional business fields"><option value="opt_company_name">companyname</option><option value="opt_company_phone_nr">optional telephone number</option><option value="opt_callback_phone_nr">callback telephone number</option><option value="opt_pager_number">pager number</option><option value="opt_radio_phone_nr">radio phone number</option><option value="opt_telex_number">telex number</option><option value="opt_manager_name">manager name</option><option value="opt_profession">profession</option><option value="opt_assistant_name">assistant name</option><option value="opt_assistant_phone_nr">assistant telephone number</option></optgroup><optgroup title="personal fields" label="personal fields"><option value="personal_phone_nr">p: telephone number</option><option value="personal_fax_nr">p: fax number</option><option value="personal_mobile_nr">p: mobile phone number</option><option value="personal_email">p: email</option><option value="personal_address">p: address</option><option value="personal_zipcode">p: zipcode</option><option value="personal_city">p: city</option><option value="personal_state">p: state</option><option value="personal_country">p: country</option></optgroup><optgroup title="other address fields" label="other address fields"><option value="other_phone_nr">o: telephone number</option><option value="other_phone_nr_2">o: telephone number 2</option><option value="other_fax_nr">o: fax number</option><option value="other_mobile_nr">o: mobile phone number</option><option value="other_email">o: email</option><option value="other_address">o: address</option><option value="other_zipcode">o: zipcode</option><option value="other_city">o: city</option><option value="other_state">o: state</option><option value="other_country">o: country</option></optgroup><optgroup title="pobox fields" label="pobox fields"><option value="pobox">pobox</option><option value="pobox_zipcode">zipcode</option><option value="pobox_city">city</option><option value="pobox_state">state</option><option value="pobox_country">country</option></optgroup><optgroup title="contact fields" label="contact fields"><option value="alternative_name">alternative name</option><option value="letterhead">letterhead</option><option value="commencement">commencement</option><option value="gender">gender (0=Unknown, 1=male, 2=female)</option><option value="title">title</option><option value="initials">initials</option><option value="givenname">given name</option><option value="infix">infix</option><option value="surname">last name</option><option value="suffix">suffix</option><option value="ssn">bsn</option><option value="personnumber">person number</option><option value="timestamp_birthday">birthday</option><option value="bankaccount">bank account</option><option value="giro">giro</option></optgroup><optgroup title="misc fields" label="misc fields"><option value="memo">memo</option></optgroup><optgroup title="special fields" label="special fields"><option value="classification">add classification</option><option value="companyname">try link company by name</option></optgroup></select>
								</th>
                        	    <th>
									<select><optgroup title="no action" label="no action"><option value="0" selected="selected">skip</option></optgroup><optgroup title="business fields" label="business fields"><option value="business_phone_nr">b: telephone number</option><option value="business_phone_nr_2">b: telephone number 2</option><option value="business_car_phone">b: telephone number (car)</option><option value="business_fax_nr">b: fax number</option><option value="business_mobile_nr">b: mobile phone number</option><option value="business_email">b: email</option><option value="business_address">b: address</option><option value="business_zipcode">b: zipcode</option><option value="business_city">b: city</option><option value="business_state">b: state</option><option value="business_country">b: country</option><option value="jobtitle">b: jobtitle</option><option value="businessunit">b: business unit</option><option value="department">b: department</option><option value="locationcode">b: locationcode</option><option value="website">b: website</option></optgroup><optgroup title="optional business fields" label="optional business fields"><option value="opt_company_name">companyname</option><option value="opt_company_phone_nr">optional telephone number</option><option value="opt_callback_phone_nr">callback telephone number</option><option value="opt_pager_number">pager number</option><option value="opt_radio_phone_nr">radio phone number</option><option value="opt_telex_number">telex number</option><option value="opt_manager_name">manager name</option><option value="opt_profession">profession</option><option value="opt_assistant_name">assistant name</option><option value="opt_assistant_phone_nr">assistant telephone number</option></optgroup><optgroup title="personal fields" label="personal fields"><option value="personal_phone_nr">p: telephone number</option><option value="personal_fax_nr">p: fax number</option><option value="personal_mobile_nr">p: mobile phone number</option><option value="personal_email">p: email</option><option value="personal_address">p: address</option><option value="personal_zipcode">p: zipcode</option><option value="personal_city">p: city</option><option value="personal_state">p: state</option><option value="personal_country">p: country</option></optgroup><optgroup title="other address fields" label="other address fields"><option value="other_phone_nr">o: telephone number</option><option value="other_phone_nr_2">o: telephone number 2</option><option value="other_fax_nr">o: fax number</option><option value="other_mobile_nr">o: mobile phone number</option><option value="other_email">o: email</option><option value="other_address">o: address</option><option value="other_zipcode">o: zipcode</option><option value="other_city">o: city</option><option value="other_state">o: state</option><option value="other_country">o: country</option></optgroup><optgroup title="pobox fields" label="pobox fields"><option value="pobox">pobox</option><option value="pobox_zipcode">zipcode</option><option value="pobox_city">city</option><option value="pobox_state">state</option><option value="pobox_country">country</option></optgroup><optgroup title="contact fields" label="contact fields"><option value="alternative_name">alternative name</option><option value="letterhead">letterhead</option><option value="commencement">commencement</option><option value="gender">gender (0=Unknown, 1=male, 2=female)</option><option value="title">title</option><option value="initials">initials</option><option value="givenname">given name</option><option value="infix">infix</option><option value="surname">last name</option><option value="suffix">suffix</option><option value="ssn">bsn</option><option value="personnumber">person number</option><option value="timestamp_birthday">birthday</option><option value="bankaccount">bank account</option><option value="giro">giro</option></optgroup><optgroup title="misc fields" label="misc fields"><option value="memo">memo</option></optgroup><optgroup title="special fields" label="special fields"><option value="classification">add classification</option><option value="companyname">try link company by name</option></optgroup></select>
								</th>
                    	    </tr>
                	    </thead>
                	    <tbody>
                    	    <tr>
                        	    <td>id</td>
                        	    <td>relationname</td>
                        	    <td>active</td>
                        	    <td>givenname</td>
                    	    </tr>
                    	    <tr>
                        	    <td>4880</td>
                        	    <td>B'ien</td>
                        	    <td>yes</td>
                        	    <td>B'ien</td>
                        	</tr>
                	    </tbody>
            	    </table>
        	    </div>

			</div>
		</div>
