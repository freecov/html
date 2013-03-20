<div class="well well-covide search-widget">
    <div class="well-title">
        <span class="title">Filter by </span>
        <div class="btn-group pull-right" data-toggle="buttons-radio">
            <button class="btn btn-small" type="button" data-extra="show"><i class="icon-caret-down"></i></button>
            <button class="btn btn-small active" type="button" data-extra="hide"><i class="icon-caret-up"></i></button>
        </div>
    </div>

    <form class="search-form">
        <input type="text" class="main-search" placeholder="Search">

        <div class="extra-wrap">
            <hr>
            <ul class="list-striped">
                <li class="odd form-inline controls-row">
                    <select class="span3">
                        <option>Project</option>
                        <option>Contact</option>
                        <option>Zip Code</option>
                    </select>
                    <input type="text" class="span7" placeholder="Type address">
					<button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button>
                </li>
                <li class="form-inline controls-row">
                    <select class="span3">
                        <option>Contact</option>
                        <option>Address</option>
                        <option>Project</option>
                    </select>
					<ul class="list-striped linked-ul inline">
							<li class="odd form-inline controls-row">Klant-Apps <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
							<li class="form-inline controls-row">Klant-CRM <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button></li>
					</ul>
                    <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button>
                </li>
                <li class="odd form-inline controls-row">
                    <select class="span3">
                        <option>Period</option>
                        <option>Contact</option>
                        <option>Project</option>
                    </select>
                    <input type="text" class="span2" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="From"><input type="text" class="span2" data-toggle="datepicker" data-date-format="dd-mm-yyyy" placeholder="Till">
					
                    <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button>
                </li>
                <li class="form-inline controls-row">
                    <label class="radio inline">
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        all conditions
                    </label>
                    <label class="radio inline">
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        at least one condition
                    </label>
                </li>
            </ul>
            <hr>
            <br>
        </div>
        <div>
            <a class="search-link" href="#"><i class="icon-plus"></i> Add condition</a>
            <a href="#"><i class="icon-reply"></i> Reset conditions</a>
            <button type="submit" class="btn pull-right"><i class="icon-search"></i> Search</button>
        </div>
    </form>
</div>