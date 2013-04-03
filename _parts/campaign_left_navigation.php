	    <div class="btn-group btn-create">
			<a class="btn btn-large <? echo $activeADD ?> dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="icon-plus"></i> Add new
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a data-toggle="modal" href="campaign_add_new.php?campaign=calling_list" ><i class="icon-phone"></i> calling list</a></li>
				<li><a data-toggle="modal" href="campaign_add_new.php?campaign=template" ><i class="icon-envelope"></i> newsletter</a></li>
				<li><a data-toggle="modal" href="campaign_add_new.php?campaign=export" ><i class="icon-share"></i> export</a></li>
			</ul>
		</div>

		<hr>
		<div class="well well-covide well-covide-menu">
			<ul class="nav nav-tabs nav-stacked nav-covide">
				<li><a href="campaign.php"><i class="icon-list-alt"></i> Active</a></li>
				<li><a href="#"><i class="icon-inbox"></i> Archive</a></li>
			</ul>
		</div>