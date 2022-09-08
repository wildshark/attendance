<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="?main=dashboard&token=<?=$_GET['token']?>">
            <i class="ti-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?main=course&ui=listtoken=<?=$_GET['token']?>">
            <i class="ti-settings menu-icon"></i>
            <span class="menu-title">course</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?main=student&ui=list&token=<?=$_GET['token']?>">
            <i class="ti-settings menu-icon"></i>
            <span class="menu-title">Student</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?main=attendance&ui=list&token=<?=$_GET['token']?>">
            <i class="ti-settings menu-icon"></i>
            <span class="menu-title">Attendance Sheet</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?main=return&token=<?=$_GET['token']?>">
            <i class="ti-settings menu-icon"></i>
            <span class="menu-title">Return</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?main=transfer&token=<?=$_GET['token']?>">
            <i class="ti-settings menu-icon"></i>
            <span class="menu-title">Transfer</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?main=transfer&token=<?=$_GET['token']?>">
            <i class="ti-settings menu-icon"></i>
            <span class="menu-title">Exit</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="ti-palette menu-icon"></i>
            <span class="menu-title">UI Elements</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false"
            aria-controls="ui-advanced">
            <i class="ti-view-list menu-icon"></i>
            <span class="menu-title">Advanced UI</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-advanced">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
            aria-controls="form-elements">
            <i class="ti-clipboard menu-icon"></i>
            <span class="menu-title">Form elements</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic
                        Elements</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
            <i class="ti-eraser menu-icon"></i>
            <span class="menu-title">Editors</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="editors">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text
                        editors</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code
                        editors</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="ti-bar-chart-alt menu-icon"></i>
            <span class="menu-title">Charts</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google
                        charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline
                        js</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="ti-layout menu-icon"></i>
            <span class="menu-title">Tables</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic
                        table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data
                        table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/ui-features/popups.html">
            <i class="ti-export menu-icon"></i>
            <span class="menu-title">Popups</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/ui-features/notifications.html">
            <i class="ti-bell menu-icon"></i>
            <span class="menu-title">Notifications</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
            <i class="ti-face-smile menu-icon"></i>
            <span class="menu-title">Icons</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag
                        icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font
                        Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify
                        icons</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
            <i class="ti-map menu-icon"></i>
            <span class="menu-title">Maps</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="maps">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector
                        Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google
                        Map</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="ti-layers-alt menu-icon"></i>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2
                    </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register
                    </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register
                        2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html">
                        Lockscreen </a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
            <i class="ti-help-alt menu-icon"></i>
            <span class="menu-title">Error pages</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="error">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
            aria-controls="general-pages">
            <i class="ti-layers menu-icon"></i>
            <span class="menu-title">General Pages</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="general-pages">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank
                        Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile
                    </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid
                    </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline
                    </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html">
                        Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio
                    </a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false"
            aria-controls="e-commerce">
            <i class="ti-shopping-cart menu-icon"></i>
            <span class="menu-title">E-commerce</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="e-commerce">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice
                    </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html">
                        Pricing Table </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/apps/email.html">
            <i class="ti-email menu-icon"></i>
            <span class="menu-title">E-mail</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/apps/calendar.html">
            <i class="ti-calendar menu-icon"></i>
            <span class="menu-title">Calendar</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/apps/todo.html">
            <i class="ti-check-box menu-icon"></i>
            <span class="menu-title">Todo List</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/apps/gallery.html">
            <i class="ti-gallery menu-icon"></i>
            <span class="menu-title">Gallery</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/documentation/documentation.html">
            <i class="ti-write menu-icon"></i>
            <span class="menu-title">Documentation</span>
        </a>
    </li>
</ul>