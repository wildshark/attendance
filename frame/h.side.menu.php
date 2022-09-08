<ul class="nav page-navigation">
    <li class="nav-item">
        <a class="nav-link" href="?main=dashhboard&token=<?=$_GET['token']?>">
            <i class="ti-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="ti-clipboard menu-icon"></i>
            <span class="menu-title">Student</span>
            <i class="menu-arrow"></i></a>
        <div class="submenu">
            <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=list&token=<?=$_GET['token']?>">All Student</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=list&q=100&token=<?=$_GET['token']?>">Level 100</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=list&q=200&token=<?=$_GET['token']?>">Level 200</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=list&q=300&token=<?=$_GET['token']?>">Level 300</a></li>
                <li class="nav-item"><a class="nav-link" href="?main=student&ui=list&q=400&token=<?=$_GET['token']?>">Level 400</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="ti-clipboard menu-icon"></i>
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
        <a class="nav-link" href="?main=attendance&ui=list&token=<?=$_GET['token']?>">
            <i class="ti-settings menu-icon"></i>
            <span class="menu-title">Attendance Sheet</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="ti-clipboard menu-icon"></i>
            <span class="menu-title">Forms</span>
            <i class="menu-arrow"></i></a>
        <div class="submenu">
            <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text Editor</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code Editor</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a href="pages/documentation/documentation.html" class="nav-link">
            <i class="ti-receipt menu-icon"></i>
            <span class="menu-title">Documentation</span></a>
    </li>
</ul>