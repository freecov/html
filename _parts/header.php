<header class="covide-head">
    <div class="row-fluid">
        <div class="span12">
            <div class="header">
                <div class="row-fluid">
                    <div class="span2 logo">
                        <a href="dashboard.html"><img src="img/covide.png" width="201" height="69"></a>
                    </div>
                    <div class="span4 search">
                        <form class="form">
                            <div class="input-append">
                                <input rel="tooltip" title="Autocomplete search field" type="text"
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
                                <button class="btn"><i class="icon-user"></i> Konstantin</button>
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">User settings</a></li>
                                    <li><a href="#">Online users</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">

                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-plus"></i>
                                    Add new
                                    <span class="caret"></span>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#">Email</a></li>
                                    <li><a href="#">Todo</a></li>
                                    <li><a href="#">Notes</a></li>
                                    <li><a href="#">Address</a></li>
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">File</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="clock">
                            <div id="Date"></div>
                            <ul>
                                <li id="hours"></li>
                                <li id="point">:</li>
                                <li id="min"></li>
                                <li id="point">:</li>
                                <li id="sec"></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? include_once "menu-top.php";?>
</header>