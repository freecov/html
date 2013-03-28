<div class="navbar navbar-covide navbar-inverse">
    <div class="navbar-inner no-padding">
        <ul class="nav">
            <li class="<?=$activeMenuItem == 'dashboard' ? 'active' : ''; ?>">
                <a href="dashboard.php">
                    <i class="icon-home"></i>
                    Dashboard
                </a>
            </li>
            <li class="divider-vertical"></li>
            <li class="<?=$activeMenuItem == 'address' ? 'active' : ''; ?>">
                <a href="address.php">
                    <i class="icon-book"></i>
                    Address
                    <span class="badge badge-shadow badge-warning">4</span>
                </a>
            </li>
            <li class="divider-vertical"></li>
            <li class="<?=$activeMenuItem == 'calendar' ? 'active' : ''; ?>">
                <a href="calendar.php">
                    <i class="icon-calendar"></i>
                    Calendar
                </a>
            </li>
            <li class="divider-vertical"></li>
            <li class="<?=$activeMenuItem == 'notes' ? 'active' : ''; ?>">
                <a href="notes.php">
                    <i class="icon-pencil"></i>
                    Notes
                </a>
            </li>
            <li class="divider-vertical"></li>
            <li class="<?=$activeMenuItem == 'todo' ? 'active' : ''; ?>">
                <a href="todo.php">
                    <i class="icon-check"></i>
                    To do's
                </a>
            </li>
            <li class="divider-vertical"></li>
            <li class="<?=$activeMenuItem == 'email' ? 'active' : ''; ?>">
                <a href="email.php">
                    <i class="icon-envelope-alt"></i>
                    Email
                    <span class="badge badge-shadow badge-important">4 / 9</span>
                </a>
            </li>
            <li class="divider-vertical"></li>
            <li class="<?=$activeMenuItem == 'files' ? 'active' : ''; ?>">
                <a href="#">
                    <i class="icon-folder-open"></i>
                    File Managment
                </a>
            </li>
            <li class="divider-vertical"></li>
        </ul>
        <ul class="nav visible-desktop">
            <li class="<?=$activeMenuItem == 'projects' ? 'active' : ''; ?>">
                <a href="projects.php"><i class="icon-list"></i> Projects</a>
            </li>
            <li class="divider-vertical"></li>
            <li class="<?=$activeMenuItem == 'sales' ? 'active' : ''; ?>">
                <a href="sales.php"><i class="icon-bar-chart"></i> Sales</a>
            </li>
            <li class="divider-vertical"></li>
            <li class="<?=$activeMenuItem == 'customer' ? 'active' : ''; ?>">
                <a href="customer_care.php"><i class="icon-bolt"></i> Customer Care</a>
            </li>
            <li class="divider-vertical"></li>
            <li class="<?=$activeMenuItem == 'campaign' ? 'active' : ''; ?>">
                <a href="#"><i class="icon-list-alt"></i> Campaign</a>
            </li>
            <li class="divider-vertical"></li>
            <li class="<?=$activeMenuItem == 'socials' ? 'active' : ''; ?>">
                <a href="#"><i class="icon-twitter"></i> Social</a>
            </li>
            <li class="divider-vertical"></li>
        </ul>

        <ul class="nav pull-right hidden-desktop">
            <li class="dropup">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="More modules">
                    <i class="icon-reorder"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="projects.php"><i class="icon-list"></i> Projects</a></li>
                    <li><a href="sales.php"><i class="icon-bar-chart"></i> Sales</a></li>
                    <li><a href="customer_care.php"><i class="icon-bolt"></i> Customer Care</a></li>
                    <li><a href="#"><i class="icon-list-alt"></i> Campaign</a></li>
                    <li><a href="#"><i class="icon-twitter"></i> Social</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
