<div class="row-fluid">
    <h2 class="span8 title-page">Calendar</h2>
    <div class="span4 title-button pull-right">
 		<div class="fontSizeChange btn-group pull-right" data-toggle="buttons-radio">
            <button class="btn btn-small size-small" data-size="small">A</button>
			<button class="btn btn-small size-normal active" data-size="normal">A</button>
			<button class="btn btn-small size-big" data-size="big">A</button>
        </div>
		<div class="btn-group pull-right">
             <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
                <i class="icon-cogs"></i> Actions
                <span class="caret"></span>
             </button>
             <ul class="dropdown-menu">
                <li><a href="_modals/calendar_share_modal.php" data-toggle="modal" data-target="#calendarshareModal"><i class="icon-angle-right"></i> Share Calendar</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Print Calendar</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Monthly overview</a></li>
            </ul>
		</div>
    </div>
</div>

				<!-- Start calendar Share Modal -->
				<div id="calendarshareModal" class="modal add-classification-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="calendarshareModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
						<h4 id="calendarshareLabel"><i class="icon-share"></i> Share Calendar</h4>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<div class="btn-toolbar">
							<button class="btn btn-warning"><i class="icon-save"></i> Save</button>
						</div>
					</div>
				</div>
				<!-- End calendar Share Modal -->


<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php" ><i class="icon-home"></i> Home</a>
    <a class="current" href="calendar.php">Calendar</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeCompose = 'btn-warning'; ?>
	    <? include_once "_parts/calendar_left_navigation.php"; ?>
	</div>

	<div class="span9">
		<? include_once "_parts/search-form.php"; ?>

        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Osdn</span>
									<span class="title pull-right">11 March 2013 - 17 March 2013</span>
            </div>
			
            <div class="well well-small well-covide-g">
                <div class="btn-group" data-toggle="buttons-radio">
					<button class="btn btn-small" type="button">Day</button>
					<button class="btn btn-small active" type="button">Week</button>
					<button class="btn btn-small" type="button">Month</button>
                </div>
				<div class="btn-toolbar pull-right">
					<div class="btn-group">
						<button class="btn btn-small" type="button"><i class="icon-angle-left"></i></button>
						<button class="btn btn-small" type="button"><i class="icon-angle-right"></i></button>
					</div>
					<button class="btn btn-small" type="button">Today</button>
				</div>
            </div>
			
			<div class="text-center">
				<a href="_modals/appointment_info_modal.php" data-toggle="modal" data-target="#appointmentinfoModal"><img src="img/calendar.png"></a>
			</div>

				<!-- Start Appointment Info Modal -->
				<div id="appointmentinfoModal" class="modal add-classification-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="appointmentinfoModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
						<h4 id="quickemailModalLabel"><i class="icon-calendar"></i> Appointment Info</h4>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<div class="btn-toolbar">
							<button class="btn btn-warning"><i class="icon-edit"></i> Edit appointment</button>
							<button class="btn"><i class="icon-trash"></i> Delete appointment</button>
						</div>
					</div>
				</div>
				<!-- End Appointment Info Modal -->


			<br>
			<div class="well well-small well-covide-g">
                <div class="btn-group" data-toggle="buttons-radio">
					<button class="btn btn-small" type="button">Day</button>
					<button class="btn btn-small active" type="button">Week</button>
					<button class="btn btn-small" type="button">Month</button>
                </div>

				<div class="btn-toolbar pull-right">
					<div class="btn-group">
						<button class="btn btn-small" type="button"><i class="icon-angle-left"></i></button>
						<button class="btn btn-small" type="button"><i class="icon-angle-right"></i></button>
					</div>
					<button class="btn btn-small" type="button">Today</button>
				</div>
            </div>
        </div>
	</div>
</div>