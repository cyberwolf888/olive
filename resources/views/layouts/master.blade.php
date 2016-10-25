<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from steelcoders.com/alpha/v1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Oct 2016 15:52:42 GMT -->
<head>

    <!-- Title -->
    <title>Alpha | Responsive Admin Dashboard Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ url('assets/master') }}/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ url('assets/master') }}/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
    <link href="{{ url('assets/master') }}/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ url('assets/master') }}/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ url('assets/master') }}/css/custom.css" rel="stylesheet" type="text/css"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="loader-bg"></div>
<div class="loader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-teal lighten-1">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<div class="mn-content fixed-sidebar">
    <header class="mn-header navbar-fixed">
        <nav class="cyan darken-1">
            <div class="nav-wrapper row">
                <section class="material-design-hamburger navigation-toggle">
                    <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                        <span class="material-design-hamburger__layer"></span>
                    </a>
                </section>
                <div class="header-title col s3 m3">
                    <span class="chapter-title">Olive</span>
                </div>
                <form class="left search col s6 hide-on-small-and-down">
                    <div class="input-field">
                        <input id="search" type="search" placeholder="Search" autocomplete="off">
                        <label for="search"><i class="material-icons search-icon">search</i></label>
                    </div>
                    <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                </form>
                <ul class="right col s9 m3 nav-right-menu">

                    <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>
                    <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                </ul>

                <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                    <li class="notificatoins-dropdown-container">
                        <ul>
                            <li class="notification-drop-title">Today</li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                        <div class="notification-text"><p><b>Alan Grey</b> uploaded new theme</p><span>7 min ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle deep-purple"><i class="material-icons">cached</i></div>
                                        <div class="notification-text"><p><b>Tom</b> updated status</p><span>14 min ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle red"><i class="material-icons">delete</i></div>
                                        <div class="notification-text"><p><b>Amily Lee</b> deleted account</p><span>28 min ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle cyan"><i class="material-icons">person_add</i></div>
                                        <div class="notification-text"><p><b>Tom Simpson</b> registered</p><span>2 hrs ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle green"><i class="material-icons">file_upload</i></div>
                                        <div class="notification-text"><p>Finished uploading files</p><span>4 hrs ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-drop-title">Yestarday</li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle green"><i class="material-icons">security</i></div>
                                        <div class="notification-text"><p>Security issues fixed</p><span>16 hrs ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle indigo"><i class="material-icons">file_download</i></div>
                                        <div class="notification-text"><p>Finished downloading files</p><span>22 hrs ago</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <div class="notification">
                                        <div class="notification-icon circle cyan"><i class="material-icons">code</i></div>
                                        <div class="notification-text"><p>Code changes were saved</p><span>1 day ago</span></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>



    <aside id="slide-out" class="side-nav white fixed">
        <div class="side-nav-wrapper">
            <div class="sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="{{ url('assets/master') }}/images/profile-image.png" class="circle" alt="">
                </div>
                <div class="sidebar-profile-info">
                    <a href="javascript:void(0);" class="account-settings-link">
                        <p>David Doe</p>
                        <span>david@gmail.com<i class="material-icons right">arrow_drop_down</i></span>
                    </a>
                </div>
            </div>
            <div class="sidebar-account-settings">
                <ul>
                    <li class="no-padding">
                        <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Inbox</a>
                    </li>
                    <li class="no-padding">
                        <a class="waves-effect waves-grey"><i class="material-icons">star_border</i>Starred<span class="new badge">18</span></a>
                    </li>
                    <li class="no-padding">
                        <a class="waves-effect waves-grey"><i class="material-icons">done</i>Sent Mail</a>
                    </li>
                    <li class="no-padding">
                        <a class="waves-effect waves-grey"><i class="material-icons">history</i>History<span class="new grey lighten-1 badge">3 new</span></a>
                    </li>
                    <li class="divider"></li>
                    <li class="no-padding">
                        <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                    </li>
                </ul>
            </div>
            <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                <li class="no-padding active"><a class="waves-effect waves-grey active" href="index-2.html"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Apps<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li><a href="search.html">Search</a></li>
                            <li><a href="todo.html">Todo</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">code</i>Components<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="ui-accordions.html">Accordion</a></li>
                            <li><a href="ui-badges.html">Badges</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-chips.html">Chips</a></li>
                            <li><a href="ui-color.html">Color</a></li>
                            <li><a href="ui-collections.html">Collections</a></li>
                            <li><a href="ui-dropdown.html">Dropdown</a></li>
                            <li><a href="ui-dialogs.html">Dialogs</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-helpers.html">Helpers</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-media.html">Media</a></li>
                            <li><a href="ui-icons.html">Icons</a></li>
                            <li><a href="ui-parallax.html">Parallax</a></li>
                            <li><a href="ui-preloader.html">Preloader</a></li>
                            <li><a href="ui-shadow.html">Shadow</a></li>
                            <li><a href="ui-tabs.html">Tabs</a></li>
                            <li><a href="ui-waves.html">Waves</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">star_border</i>Plugins<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="miscellaneous-sweetalert.html">Sweet Alert</a>
                            <li><a href="miscellaneous-code-editor.html">Code Editor</a>
                            <li><a href="miscellaneous-nestable.html">Nestable List</a>
                            <li><a href="miscellaneous-masonry.html">Masonry</a>
                            <li><a href="miscellaneous-idle-timer.html">Idle Timer</a>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">desktop_windows</i>Layouts<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="layout-blank.html">Blank Page</a></li>
                            <li><a href="layout-boxed.html">Boxed Layout</a></li>
                            <li><a href="layout-hidden-sidebar.html">Hidden Sidebar</a></li>
                            <li><a href="layout-right-sidebar.html">Right Sidebar</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">mode_edit</i>Forms<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-upload.html">File Upload</a></li>
                            <li><a href="form-image-crop.html">Image Crop</a></li>
                            <li><a href="form-image-zoom.html">Image Zoom</a></li>
                            <li><a href="form-input-mask.html">Input Mask</a></li>
                            <li><a href="form-select2.html">Select2</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">grid_on</i>Tables<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="table-static.html">Static Tables</a></li>
                            <li><a href="table-responsive.html">Responsive Tables</a></li>
                            <li><a href="table-comparison.html">Comparison Table</a></li>
                            <li><a href="table-data.html">Data Tables</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding"><a class="waves-effect waves-grey" href="charts.html"><i class="material-icons">trending_up</i>Charts</a></li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">my_location</i>Maps<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </div>
                </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">tag_faces</i>Extra Pages<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="500.html">500 Page</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="sign-in.html">Sign In</a></li>
                            <li><a href="sign-up.html">Sign Up</a></li>
                            <li><a href="lock-screen.html">Lock Screen</a></li>
                            <li><a href="pattern-lock-screen.html">Pattern Lock Screen</a></li>
                            <li><a href="forgot.html">Forgot Password</a></li>
                            <li><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="footer">
                <p class="copyright">Steelcoders ©</p>
                <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
            </div>
        </div>
    </aside>
    <main class="mn-inner inner-active-sidebar">
        <div class="middle-content">

            @yield('content')

        </div>
    </main>
</div>
<div class="left-sidebar-hover"></div>


<!-- Javascripts -->
<script src="{{ url('assets/master') }}/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/materialize/js/materialize.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/jquery-blockui/jquery.blockui.js"></script>
@stack('plugin_scripts')
<script src="{{ url('assets/master') }}/js/alpha.min.js"></script>
@stack('scripts')

</body>
</html>