<header class="covide-head">
    <div class="row-fluid">
        <div class="span12 header">
            <div class="span2 logo">
                <a href="dashboard.html"><img src="img/covide.png" width="201" height="69"></a>
            </div>
            <div class="span4 search">
                <form class="form">
                    <div class="input-append">
                        <input title="Autocomplete search field" type="text"
                               data-source='["Alabama","Alaska","Arizona","Arkansas","California","Cherniak Konstantin, konstantin.cherniak@gmail.com","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Konstantin, designer","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Voznyakovsky Ivan","Washington","West Virginia","Wisconsin","Wyoming"]'
                               data-items="4" data-provide="typeahead" style="margin: 0 auto;">
                        <button class="btn" type="button"><i class="icon-search"></i></button>

                    </div><br/>
                        <small class="muted">Example: Cherniak Konstantin</small>
                </form>
            </div>

            <div class="span4 buttons-header pull-right">
                <div class="buttons">
                    <div class="btn-group">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> Konstantin                        
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" href="_modals/list_users_modal.php" data-target="#listusers_header_Modal"><i class="icon-group"></i> Online users</a></li>
                            <li><a href="settings.php"><i class="icon-wrench"></i> User settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-signout"></i> Logout</a></li>
                        </ul>
                    </div>
					
					<!-- Start Users Modal -->
					<div id="listusers_header_Modal" class="modal add-classification-big-modal hide fade text-left" tabindex="-1" role="dialog" aria-labelledby="listusers_header_ModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
							<h4 id="listusers_header_ModalLabel"><i class="icon-group"></i> List  users</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						</div>
					</div>
					<!-- End Users Modal -->
					
                    <div class="btn-group">

                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-plus"></i>
                            Add new
                            <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-book"></i> Address</a></li>
                            <li><a href="#"><i class="icon-envelope-alt"></i> Email</a></li>
                            <li><a href="#"><i class="icon-folder-open"></i> File</a></li>
                            <li><a href="#"><i class="icon-pencil"></i> Notes</a></li>
                            <li><a href="#"><i class="icon-list"></i> Project</a></li>
                            <li><a href="#"><i class="icon-check"></i> To do</a></li>
                        </ul>
                    </div>
                </div>

                <div class="clock-container"></div>
            </div>
        </div>
    </div>
    <? include_once "menu-top.php";?>
</header>