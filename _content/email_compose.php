<div class="row-fluid">
    <div class="span8 title-page">
        <h2>Email</h2>
    </div>
    <div class="span4 title-button pull-right">
 		<div class="fontSizeChange btn-group pull-right" data-toggle="buttons-radio">
            <button class="btn size-small" data-size="small">A</button>
			<button class="btn size-normal active" data-size="normal">A</button>
			<button class="btn size-big" data-size="big">A</button>
        </div>
		<div class="btn-group pull-right">
             <button class="btn dropdown-toggle" data-toggle="dropdown">
                <i class="icon-cogs"></i> Actions
                <span class="caret"></span>
             </button>
             <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-angle-right"></i> Manage predefined content</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage e-mail filters</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage e-mail templates</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Manage shared folders</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Check newsletter e-mail addresses</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Force e-mail retrieval</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> To autoreply</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> To Google spam box</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a href="email.php">Email</a>
	<a class="current" href="email_compose.php">Compose</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
	    <? include_once "_parts/email_left_navigation.php"; ?>
	</div>

	<div class="span9">
        <div class="well well-covide">
            <div class="well well-small well-covide">
                <span class="title">Compose message</span>
            </div>
			<div class="btn-toolbar">
				<button class="btn">Save</button>
				<div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						More
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu text-left">
						<li><a href=#>Change From email</a></li>
						<li><a href=#>Add star</a></li>
						<li><a href=#>Print</a></li>
						<li><a href=#>Change mode</a></li>
						<li class="divider"></li>
						<li><a href=#>Discard draft</a></li>
					</ul>
				</div>
				<button class="btn btn-warning">Send email</button>
			</div>

            
			<div class="well well-small well-covide-g">

            </div>

            
        </div>
	</div>
</div>