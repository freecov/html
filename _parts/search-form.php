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
                        <option>Address</option>
                        <option>City</option>
                        <option>Zip Code</option>
                    </select>
                    <input type="text" class="span7" placeholder="Type address">
					<button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button>
                </li>
                <li class="form-inline controls-row">
                    <select class="span3">
                        <option>City</option>
                        <option>Address</option>
                        <option>Zip Code</option>
                    </select>
                    <select class="span7">
                        <option>Borneveld</option>
                        <option>Rotterdam</option>
                        <option>Amsterdam</option>
                    </select>
                    <button type="button" class="close close-extra-field" ><i class="icon-remove-sign"></i></button>
                </li>
                <li class="odd form-inline controls-row">
                    <select class="span3">
                        <option>Zip Code</option>
                        <option>City</option>
                        <option>Address</option>
                    </select>
                    <input type="text" class="span7" placeholder="Type zip code">
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
        </div>
        <div>
            <a class="search-link" href="#"><i class="icon-plus"></i> Add condition</a>
            <a href="#"><i class="icon-reply"></i> Reset conditions</a>
            <button type="submit" class="btn pull-right"><i class="icon-search"></i> Search</button>
        </div>
    </form>
</div>