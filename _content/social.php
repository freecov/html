<div class="row-fluid">
    <h2 class="span8 title-page">Social</h2>
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
                <li><a data-toggle="modal" href="_modals/add_keywords_modal.php" data-target="#addkeywords_sModal"><i class="icon-angle-right"></i> Add keywords and filters</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a class="current" href="campaign.php">Social</a>
	
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span6">
	
		<div class="well well-covide">
            <div class="well-title">
                <span class="title">Updates</span>
            </div>
			<div class="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				This block will display the tweets of your <strong>Covide businesscards</strong>, once they have been filled in.
			</div>
            
        </div>

	</div>

	<div class="span6">


        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Rumours</span>
            </div>
			
			<a class="btn pull-right" type="button" data-toggle="modal" href="_modals/add_keywords_modal.php" data-target="#addkeywords_sModal"><i class="icon-plus"></i> Add keywords</a>
			
			<!-- Start keywords Modal -->
			<div id="addkeywords_sModal" class="modal add-classification-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addkeywords_sModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
					<h4 id="addkeywords_sModalLabel"><i class="icon-tags"></i> Add keywords</h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning">Save</button>
				</div>
			</div>
			<!-- End keywords Modal -->
			
			Keywords: 
			<ul class="list-striped linked-ul inline">
				<li class="odd form-inline controls-row">Nexus7 <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
				<li class="form-inline controls-row">Tablet PC <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
			</ul>

			
			<div class="well well-small well-covide-g">	
				<div class="media">
					<a class="pull-left" href="#">
						<img class="media-object img-rounded" data-src="holder.js/48x48" alt="48x48" style="width: 48px; height: 48px;" src="http://a0.twimg.com/profile_images/732656434/apple-iphone_normal.jpg">
					</a>
					<div class="media-body">
						Acer mengt zich met Iconia A1-810 in strijd Nexus 7 en iPad mini: Acer werkt aan een tablet. <span class="muted">09-04-2013 22:33:07</span>
						<br>
						<a href="#"><i class="icon-twitter"></i> frankreinders (Frank Reinders)</a> 
					</div>
				</div>
			</div>
			
			<div class="well well-small well-covide-g">	
				<div class="media">
					<a class="pull-left" href="#">
						<img class="media-object img-rounded" data-src="holder.js/48x48" alt="48x48" style="width: 48px; height: 48px;" src="http://a0.twimg.com/profile_images/2057858661/IMG_3748_resized_normal.jpg">
					</a>
					<div class="media-body">
						@Arvid heb hem net ff getest op de telefoon en Nexus 7. Is een hele verbetering. Nexus 7 is in landscape wel een beetje krap qua ruimte.  <span class="muted">09-04-2013 22:33:07</span>
						<br>
						<a href="#"><i class="icon-twitter"></i> spruyttej (Jonathan Spruytte)</a> 
					</div>
				</div>
			</div>

			<div class="well well-small well-covide-g">	
				<div class="media">
					<a class="pull-left" href="#">
						<img class="media-object img-rounded" data-src="holder.js/48x48" alt="48x48" style="width: 48px; height: 48px;" src="http://a0.twimg.com/profile_images/1765973121/glamourhenk_nf_200x200_normal.jpg">
					</a>
					<div class="media-body">
						Ook iets voor jou @Iloontje05 http://t.co/UWQikY0v7h  <span class="muted">08-04-2013 12:05:25</span>
						<br>
						<a href="#"><i class="icon-twitter"></i> eisema (henk eisema)</a> 
					</div>
				</div>
			</div>
			
			
            <div class="pagination pagination-right no-margin">
				<select class="span2" title="Items per page">
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