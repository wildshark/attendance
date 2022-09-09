<ul class="nav page-navigation">
    <li class="nav-item">
        <a class="nav-link" href="?main=dashboard&token=<?=$_GET['token']?>">
            <i class="ti-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="ti-user menu-icon"></i>
            <span class="menu-title">Student</span>
            <i class="menu-arrow"></i></a>
        <div class="submenu">
            <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=add&token=<?=$_GET['token']?>">New Student</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=list&token=<?=$_GET['token']?>">All Student</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=duplicate&token=<?=$_GET['token']?>">Duplicate</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=list&q=level&str=100&token=<?=$_GET['token']?>">Level 100</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=list&q=level&str=200&token=<?=$_GET['token']?>">Level 200</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=list&q=level&str=300&token=<?=$_GET['token']?>">Level 300</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=list&q=level&str=400&token=<?=$_GET['token']?>">Level 400</a></li>

                
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="ti-bookmark-alt menu-icon"></i>
            <span class="menu-title">Course(s)</span>
            <i class="menu-arrow"></i></a>
        <div class="submenu">
            <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href="?main=course&ui=list&token=<?=$_GET['token']?>">All Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=course&ui=list&q=100&token=<?=$_GET['token']?>">Level 100</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=course&ui=list&q=200&token=<?=$_GET['token']?>">Level 200</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=course&ui=list&q=300&token=<?=$_GET['token']?>">Level 300</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=course&ui=list&q=400&token=<?=$_GET['token']?>">Level 400</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="ti-clipboard menu-icon"></i>
            <span class="menu-title">Attendance</span>
            <i class="menu-arrow"></i></a>
        <div class="submenu">
            <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href="?main=attendance&ui=list&token=<?=$_GET['token']?>">All Sheet</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=attendance&ui=add&q=100&token=<?=$_GET['token']?>">New Sheet</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?main=messenger&ui=list&token=<?=$_GET['token']?>">
            <i class="ti-comments menu-icon"></i>
            <span class="menu-title">Messenger</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="ti-clipboard menu-icon"></i>
            <span class="menu-title">Report</span>
            <i class="menu-arrow"></i></a>
        <div class="submenu">
            <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href="#">Basic Elements</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Advanced Elements</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Validation</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Wizard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Text Editor</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Code Editor</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a href="pages/documentation/documentation.html" class="nav-link">
            <i class="ti-receipt menu-icon"></i>
            <span class="menu-title">Documentation</span></a>
    </li>
</ul>