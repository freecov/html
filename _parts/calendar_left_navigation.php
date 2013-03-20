
			<a class="btn btn-createapp btn-large <? echo $activeCompose ?>" data-toggle="modal" href="_modals/newappointment_modal.php" data-target="#newappointmentModal">
				<i class="icon-plus"></i> New appointment
			</a>



		<!-- Start New Appointment Modal -->
		<div id="newappointmentModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="newappointmentModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
				<h4 id="quickemailModalLabel"><i class="icon-calendar"></i> New Appointment</h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				
				<div class="btn-toolbar">
					<button class="btn btn-warning">Save appointment</button>
				</div>
			</div>
		</div>
		<!-- End New Appointment Modal -->

		<hr>
		<div class="well well-covide well-covide-menu">
			<h4>Calendar</h4>
			<form>	
				<fieldset>
					<legend><i class="icon-calendar"></i> Select date</legend>
						<div class="controls controls-row">
							<input type="text" class="span4" value="12-03-2013" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Select date">
							<button class="btn span2" type="button"><i class="icon-search"></i></button>
						</div>
				</fieldset>	
				<fieldset>
					<legend><i class="icon-group"></i> Select user</legend>
					<div class="controls controls-row">
						
						<button class="btn btn-mini btn-color" type="button" style="color: rgb(204, 204, 255);"><i class="icon-sign-blank"></i></button>
						<label class="checkbox inline">
							<input type="checkbox"> Osdn <i class="icon-edit muted" title="Can edit"></i>
						</label>
						<br>
						<button class="btn btn-mini btn-color" type="button" style="color: rgb(204, 204, 255);"><i class="icon-sign-blank"></i></button>												
						<label class="checkbox inline">
							<input type="checkbox"> Willem <i class="icon-edit muted" title="Can edit"></i>
						</label>
						<br>
						<button class="btn btn-mini btn-color" type="button" style="color: rgb(204, 255, 204);"><i class="icon-sign-blank"></i></button>						
						<label class="checkbox inline">
							<input type="checkbox"> Robbert <i class="icon-edit muted" title="Can edit"></i>
						</label>
						<br>
						<button class="btn btn-mini btn-color" type="button" style="color: rgb(204, 204, 255);"><i class="icon-sign-blank"></i></button>						
						<label class="checkbox inline">
							<input type="checkbox"> Hanna <i class="icon-eye-open muted" title="Can read"></i>
						</label>
						<br>
						<button class="btn btn-mini btn-color" type="button" style="color: rgb(204, 204, 255);"><i class="icon-sign-blank"></i></button>						
						<label class="checkbox inline">
							<input type="checkbox"> Tom <i class="icon-edit muted" title="Can edit"></i>
						</label>							
					</div>
				</fieldset>					
				<fieldset>
					<legend><i class="icon-calendar"></i> Extra options</legend>
						<div class="controls controls-row">
							<label class="checkbox">
								<input type="checkbox"> Show weekends
							</label>
							<label class="checkbox">
								<input type="checkbox"> Show columns (multiple users)
							</label>								
						</div>
				</fieldset>	
				
			<button class="btn" type="button"><i class="icon-save"></i> Save</button>	
			</form>

			
		</div>