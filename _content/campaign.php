<div class="row-fluid">
    <h2 class="span8 title-page">Campaign</h2>
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
                <li><a href="#"><i class="icon-angle-right"></i> Active campaign</a></li>
                <li><a href="#"><i class="icon-angle-right"></i> Archive campaign</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a class="current" href="campaign.php">Campaign</a>
	
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
		<? $activeADD = 'btn-warning'; ?>
	   	<? include_once "_parts/campaign_left_navigation.php"; ?>
	</div>

	<div class="span9">
		<? include_once "_parts/search-form.php"; ?>

        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Campaign</span>
            </div>

            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="15%">
                    <col width="15%">
                    <col width="20%">
                    <col width="30%">
                    <col width="10%">
                    <col width="10%">
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Classifications</th>
                        <th>Type</th>
                        <th>Count</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Does customers</td>
                        <td>17-03-2013 22:24</td>
                        <td>Cras justo massa, mattis ac tempor</td>
                        <td><i class="icon-exchange text-success"></i> Jeans1, Shirt1, Van Bommel type 1<br><i class="icon-exchange text-error"></i> Jeans2</td>
                        <td>voip</td>
                        <td>0</td>
                        <td>
							<div class="btn-group">
								<a href="#" class="btn btn-small"><i class="icon-phone"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-folder-open"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-refresh"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-edit"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-search"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-plus-sign"></i></a>
							</div>
						</td>
                    </tr>
                    <tr>
                        <td>Maecenas </td>
                        <td>18-03-2013 16:14</td>
                        <td>Quisque nec leo nisi</td>
                        <td><i class="icon-exchange text-success"></i> Van Bommel type 1<br><i class="icon-exchange text-error"></i> Jeans2</td>
                        <td>export</td>
                        <td>0</td>
                        <td>
							<div class="btn-group">
								<a href="#" class="btn btn-small"><i class="icon-folder-open"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-edit"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-plus-sign"></i></a>
							</div>
						</td>
                    </tr>
					<tr>
                        <td>Maecenas</td>
                        <td>21-03-2013 10:00</td>
                        <td>Etiam a orci sodales lorem vulputate auctor</td>
                        <td><i class="icon-exchange text-success"></i> Jeans1, Shirt1, Van Bommel type 1<br><i class="icon-exchange text-error"></i> Jeans2</td>
                        <td>mail</td>
                        <td>0</td>
                        <td>
							<div class="btn-group">
								<a href="#" class="btn btn-small"><i class="icon-envelope-alt"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-search"></i></a>
								<a href="#" class="btn btn-small"><i class="icon-edit"></i></a>
							</div>
						</td>
                    </tr>
					
                    
                </tbody>
            </table>

            <div class="pagination pagination-right no-margin">
				<select class="span1" title="Items per page">
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