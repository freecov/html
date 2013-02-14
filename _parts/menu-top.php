<div class="row-fluid">
    <div class="span12">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner no-padding">
                <ul class="nav">
                    <li class="<?=$activeMenuItem == 'dashboard' ? 'active' : ''; ?>">
                        <a href="index.html">
                            <i class="icon-home"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="dropdown <?=$activeMenuItem == 'address' ? 'active' : ''; ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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

                    <li class="dropdown <?=$activeMenuItem == 'calendar' ? 'active' : ''; ?>">
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

                    <li class="dropdown <?=$activeMenuItem == 'notes' ? 'active' : ''; ?>">
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
                    <li class="dropdown <?=$activeMenuItem == 'todo' ? 'active' : ''; ?>">
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
                    <li class="dropdown <?=$activeMenuItem == 'email' ? 'active' : ''; ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                    <li class="dropdown <?=$activeMenuItem == 'files' ? 'active' : ''; ?>">
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
                </ul>
                <ul class="nav visible-desktop">
                    <li class="dropdown <?=$activeMenuItem == 'projects' ? 'active' : ''; ?>">
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
                    <li class="dropdown <?=$activeMenuItem == 'sales' ? 'active' : ''; ?>">
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
                    <li class="dropdown <?=$activeMenuItem == 'customer' ? 'active' : ''; ?>">
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

                    <li class="dropdown <?=$activeMenuItem == 'campaign' ? 'active' : ''; ?>">
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

                    <li class="dropdown <?=$activeMenuItem == 'social' ? 'active' : ''; ?>">
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
                </ul>
                <ul class="nav pull-right hidden-desktop">
                    <li class="dropdown">
                        <a rel="tooltip" class="dropdown-toggle" data-toggle="dropdown" title="More modules" href="#">
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
    </div>
</div>