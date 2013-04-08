<div class="row-fluid">
    <h2 class="span8 title-page">File Managment</h2>
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
                <li><a href="#"><i class="icon-angle-right"></i> ...</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Breadcrumb-->
<div class="breadcrumb-covide">
    <a href="index.php"><i class="icon-home"></i> Home</a>
    <a class="current" href="file_managment.php">File Managment</a>
</div>

<!--Address Content-->
<div class="row-fluid">
	<div class="span3">
	   	<? include_once "_parts/file_managment_left_navigation.php"; ?>
	</div>

	<div class="span9">
		<? include_once "_parts/search-form.php"; ?>

        <div class="well well-covide">
            <div class="well-title">
                <span class="title">Folders</span> <span class="label label-success">You have write permissions</span>
                <span class="alphabet pull-right">
                    <a href="#"><b>[All]</b></a>
                    <a href="#">A</a>
                    <a href="#">B</a>
                    <a href="c">C</a>
                    <a href="d">D</a>
                    <a href="e">E</a>
                    <a href="f">F</a>
                    <a href="g">G</a>
                    <a href="h">H</a>
                    <a href="i">I</a>
                    <a href="j">J</a>
                    <a href="k">K</a>
                    <a href="l">L</a>
                    <a href="m">M</a>
                    <a href="n">N</a>
                    <a href="o">O</a>
                    <a href="p">P</a>
                    <a href="q">Q</a>
                    <a href="r">R</a>
                    <a href="s">S</a>
                    <a href="t">T</a>
                    <a href="u">U</a>
                    <a href="v">V</a>
                    <a href="w">W</a>
                    <a href="x">X</a>
                    <a href="y">Y</a>
                    <a href="z">Z</a>
                </span>
            </div>
			
			<div class="well well-small well-covide-g">
				<button class="btn btn-small" type="button"><i class="icon-upload"></i> Up one folder</button>
				<button class="btn btn-small" type="button"><i class="icon-credit-card"></i> Add to contact card</button>
				<a class="btn btn-small btn-warning pull-right" data-toggle="modal" href="_modals/add_folder_modal.php" data-target="#addfolder_fmModal" ><i class="icon-folder-open-alt"></i> Add new folder</a>
            </div>
			 
			<!-- Start folder Modal -->
			<div id="addfolder_fmModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addfolder_fmModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
					<h4 id="addfolder_fmModalLabel"><i class="icon-folder-open-alt"></i> Add folder</h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning">Save</button>
				</div>
			</div>
			<!-- End folder Modal -->
			 
			<table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="25%">
                    <col width="10%">
                    <col width="50%">
                    <col width="15%">
                </colgroup>
                <thead>
                    <tr>
                        <th>Folders</th>
                        <th>Files / Folders</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#"><i class="silkicon-folder"></i></a> <a href="#">...</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="silkicon-folder"></i></a> <a href="#">Terrazur</a></td>
                        <td>14 / 2</td>
                        <td>Mauris vitae augue a odio sollicitudin porttitor nec eu odio</td>
                        <td>
							<div class="btn-group pull-right">
								<button class="btn btn-small"><i class="icon-edit"></i></button>
								<button class="btn btn-small"><i class="icon-cut"></i></button>
								<button class="btn btn-small"><i class="icon-lock"></i></button>
								<button class="btn btn-small btn-danger"><i class="icon-trash"></i></button>
							</div>
						</td>
                    </tr>
                    <tr>
                        <td><a href="address_relation_card.php"><i class="silkicon-folder"></i></a> <a href="address_relation_card.php">Etiam</a></td>
                        <td>5 / 1</td>
                        <td>Cras accumsan ultricies dictum. </td>
                        <td>
							<div class="btn-group pull-right">
								<button class="btn btn-small"><i class="icon-edit"></i></button>
								<button class="btn btn-small"><i class="icon-cut"></i></button>
								<button class="btn btn-small"><i class="icon-lock"></i></button>
								<button class="btn btn-small btn-danger"><i class="icon-trash"></i></button>
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
		<div class="well well-covide">
			<div class="well-title">
				<span class="title">Files</span> <span class="label label-success">You have write permissions</span>
			</div>
			
            <div class="well well-small well-covide-g">
                <div class="btn-group">
                    <a class="btn  btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                        Selection actions <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Download selected files as zip archive</a></li>
                        <li><a href="#">Download selected files</a></li>
                        <li><a href="#">Delete selected files</a></li>
                        <li><a href="#">Move selected files</a></li>
                        <li><a href="#">Copy selected files to Google</a></li>
                    </ul>
                </div>
				
				<a  class="btn  btn-small btn-warning pull-right" data-toggle="modal" href="_modals/add_files_modal.php" data-target="#addfiles_fmModal" ><i class="icon-file"></i> Add new files</a>
            </div>

			<!-- Start files Modal -->
			<div id="addfiles_fmModal" class="modal add-relation-modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addfiles_fmModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign"></i></button>
					<h4 id="addfiles_fmModalLabel"><i class="icon-file"></i> Add files</h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-warning">Save</button>
				</div>
			</div>
			<!-- End files Modal -->
			
			
			
            <table class="table table-condensed table-striped table-hover">
                <colgroup>
                    <col width="2%">
                    <col width="20%">
                    <col width="25%">
                    <col width="10%">
                    <col width="13%">
                    <col width="15%">
                    <col width="15%">
                </colgroup>
                <thead>
                    <tr>
                        <th>
							<div class="btn-group">
								<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="icon-check"></i> <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">All</a></li>
									<li><a href="#">Inverse</a></li>
									<li><a href="#">None</a></li>
								</ul>
							</div>

						</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Size</th>
                        <th>Date</th>
                        <th>user</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><a href="#"><i class="silkicon-page_white_word"></i></a> <a href="#">odio.doc</a></td>
                        <td>Donec a venenatis orcis</td>
                        <td>135 KB</td>
                        <td>26.02.2013</td>
                        <td>Borneveld</td>
                        <td>
							<div class="btn-group pull-right">
								<button class="btn btn-small"><i class="icon-eye-open"></i></button>
								<button class="btn btn-small"><i class="icon-download-alt"></i></button>
								<button class="btn btn-small"><i class="icon-edit"></i></button>
								<button class="btn btn-small btn-danger"><i class="icon-trash"></i></button>
							</div>
						
						</td>
                    </tr>
					<tr>
                        <td><input type="checkbox"></td>
                        <td><a href="#"><i class="silkicon-page_white_picture"></i></a> <a href="#">vulputate.png</a></td>
                        <td></td>
                        <td>342 KB</td>
                        <td>20.02.2013</td>
                        <td>Borneveld</td>
                        <td>
							<div class="btn-group pull-right">
								<button class="btn btn-small"><i class="icon-eye-open"></i></button>
								<button class="btn btn-small"><i class="icon-download-alt"></i></button>
								<button class="btn btn-small"><i class="icon-edit"></i></button>
								<button class="btn btn-small btn-danger"><i class="icon-trash"></i></button>
							</div>
						
						</td>
                    </tr>
					<tr>
                        <td><input type="checkbox"></td>
                        <td><a href="#"><i class="silkicon-page_white_picture"></i></a> <a href="#">Pretium.jpg</a></td>
                        <td>Duis condimentum venenatis</td>
                        <td>317 KB</td>
                        <td>20.02.2013</td>
                        <td>Borneveld</td>
                        <td>
							<div class="btn-group pull-right">
								<button class="btn btn-small"><i class="icon-eye-open"></i></button>
								<button class="btn btn-small"><i class="icon-download-alt"></i></button>
								<button class="btn btn-small"><i class="icon-edit"></i></button>
								<button class="btn btn-small btn-danger"><i class="icon-trash"></i></button>
							</div>
						
						</td>
                    </tr>
					<tr>
                        <td><input type="checkbox"></td>
                        <td><a href="#"><i class="silkicon-page_white_excel"></i></a> <a href="#">Fermentum.xls</a></td>
                        <td></td>
                        <td>550 KB</td>
                        <td>16.03.2013</td>
                        <td>Aliquam</td>
                        <td>
							<div class="btn-group pull-right">
								<button class="btn btn-small"><i class="icon-eye-open"></i></button>
								<button class="btn btn-small"><i class="icon-download-alt"></i></button>
								<button class="btn btn-small"><i class="icon-edit"></i></button>
								<button class="btn btn-small btn-danger"><i class="icon-trash"></i></button>
							</div>
						
						</td>
                    </tr>
					<tr>
                        <td><input type="checkbox"></td>
                        <td><a href="#"><i class="silkicon-page_white_text"></i></a> <a href="#">consectetur.txt</a></td>
                        <td>Vestibulum quis libero augue</td>
                        <td>12 KB</td>
                        <td>21.02.2013</td>
                        <td>Borneveld</td>
                        <td>
							<div class="btn-group pull-right">
								<button class="btn btn-small"><i class="icon-eye-open"></i></button>
								<button class="btn btn-small"><i class="icon-download-alt"></i></button>
								<button class="btn btn-small"><i class="icon-edit"></i></button>
								<button class="btn btn-small btn-danger"><i class="icon-trash"></i></button>
							</div>
						
						</td>
                    </tr>
					<tr>
                        <td><input type="checkbox"></td>
                        <td><a href="#"><i class="silkicon-page_white_zip"></i></a> <a href="#">turpis.zip</a></td>
                        <td>Class aptent taciti sociosqu </td>
                        <td>42 KB</td>
                        <td>01.04.2013</td>
                        <td>pretium</td>
                        <td>
							<div class="btn-group pull-right">
								<button class="btn btn-small"><i class="icon-eye-open"></i></button>
								<button class="btn btn-small"><i class="icon-download-alt"></i></button>
								<button class="btn btn-small"><i class="icon-edit"></i></button>
								<button class="btn btn-small btn-danger"><i class="icon-trash"></i></button>
							</div>
						
						</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
	</div>
</div>