<div class="navbar navbar-covide navbar-inverse">
    <div class="navbar-inner no-padding">
        <ul class="nav">
            <li class="<?=$activeMenuItem == 'dashboard' ? 'active' : ''; ?>">
                <a href="index.php">
                    <i class="icon-home"></i>
                    Dashboard
                </a>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown hover-menu <?=$activeMenuItem == 'address' ? 'active' : ''; ?>">
                <a class="dropdown-toggle" href="address.php">
                    <i class="icon-book"></i>
                    Address
                    <span class="badge badge-shadow badge-warning">4</span>
                <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-header">Folders</li>
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Shared</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Compose</li>
                    <li><a href="#">Quick E-mail</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown hover-menu <?=$activeMenuItem == 'calendar' ? 'active' : ''; ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-calendar"></i>
                    Calendar
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-header">Folders</li>
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Shared</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Compose</li>
                    <li><a href="#">Quick E-mail</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown hover-menu <?=$activeMenuItem == 'notes' ? 'active' : ''; ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-pencil"></i>
                    Notes
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-header">Folders</li>
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Shared</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Compose</li>
                    <li><a href="#">Quick E-mail</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown hover-menu <?=$activeMenuItem == 'todo' ? 'active' : ''; ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-check"></i>
                    To do's
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-header">Folders</li>
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Shared</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Compose</li>
                    <li><a href="#">Quick E-mail</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown hover-menu <?=$activeMenuItem == 'email' ? 'active' : ''; ?>">
                <a class="dropdown-toggle" href="email.php">
                    <i class="icon-envelope-alt"></i>
                    Email
                    <span class="badge badge-shadow badge-important">4 / 9</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-header">Folders</li>
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Shared</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Compose</li>
                    <li><a href="#">Quick E-mail</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown hover-menu <?=$activeMenuItem == 'files' ? 'active' : ''; ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-folder-open"></i>
                    File Managment
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-header">Folders</li>
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Shared</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Compose</li>
                    <li><a href="#">Quick E-mail</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
        </ul>
        <ul class="nav visible-desktop">
            <li class="dropdown hover-menu <?=$activeMenuItem == 'projects' ? 'active' : ''; ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-list"></i>
                    Projects
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-header">Folders</li>
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Shared</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Compose</li>
                    <li><a href="#">Quick E-mail</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown hover-menu <?=$activeMenuItem == 'sales' ? 'active' : ''; ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-bar-chart"></i>
                    Sales
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-header">Folders</li>
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Shared</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Compose</li>
                    <li><a href="#">Quick E-mail</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown hover-menu <?=$activeMenuItem == 'customer' ? 'active' : ''; ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-bolt"></i>
                    Customer Care
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-header">Folders</li>
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Shared</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Compose</li>
                    <li><a href="#">Quick E-mail</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown hover-menu <?=$activeMenuItem == 'campaign' ? 'active' : ''; ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-list-alt"></i>
                    Campaign
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-header">Folders</li>
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Shared</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Compose</li>
                    <li><a href="#">Quick E-mail</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown hover-menu <?=$activeMenuItem == 'social' ? 'active' : ''; ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-twitter"></i>
                    Social
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-header">Folders</li>
                    <li><a href="#">Private</a></li>
                    <li><a href="#">Shared</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Compose</li>
                    <li><a href="#">Quick E-mail</a></li>
                    <li><a href="#">E-mail</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </li>
            <li class="divider-vertical"></li>
        </ul>
        <ul class="nav pull-right hidden-desktop">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" title="More modules" href="#">
                    <i class="icon-reorder"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-list"></i>
                            Projects
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">Folders</li>
                            <li><a href="#">Private</a></li>
                            <li><a href="#">Shared</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Compose</li>
                            <li><a href="#">Quick E-mail</a></li>
                            <li><a href="#">E-mail</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-bar-chart"></i>
                            Sales
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-header">Folders</li>
                            <li><a href="#">Private</a></li>
                            <li><a href="#">Shared</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Compose</li>
                            <li><a href="#">Quick E-mail</a></li>
                            <li><a href="#">E-mail</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-bolt"></i>
                            Customer Care
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-header">Folders</li>
                            <li><a href="#">Private</a></li>
                            <li><a href="#">Shared</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Compose</li>
                            <li><a href="#">Quick E-mail</a></li>
                            <li><a href="#">E-mail</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-list-alt"></i>
                            Campaign
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-header">Folders</li>
                            <li><a href="#">Private</a></li>
                            <li><a href="#">Shared</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Compose</li>
                            <li><a href="#">Quick E-mail</a></li>
                            <li><a href="#">E-mail</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-twitter"></i>
                            Social
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-header">Folders</li>
                            <li><a href="#">Private</a></li>
                            <li><a href="#">Shared</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Compose</li>
                            <li><a href="#">Quick E-mail</a></li>
                            <li><a href="#">E-mail</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
