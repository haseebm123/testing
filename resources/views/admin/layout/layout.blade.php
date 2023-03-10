<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard </title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/tether.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/extensions/shepherd-theme-default.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/katex.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/editors/quill/monokai-sublime.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/quill.bubble.css') }}">

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-user.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/card-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/tour/tour.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/toastr.min.css') }}" />

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->
    @yield('header-script')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

{{-- <body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout"> --}}
<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

     @php
        $date = Date('Y')
    @endphp
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">



                    </div>
                    <ul class="nav navbar-nav float-right">


                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span
                                        class="user-name text-bold-600">{{ auth()->user()->first_name }}
                                        {{ auth()->user()->last_name }}</span><span
                                        class="user-status">Available</span>
                                </div>
                                <span>
                                    @php $profile = auth()->user()->profile??null; @endphp
                                    @if ($profile == null)
                                        <img class="round"
                                            src="{{ asset('app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                            alt="avatar" height="40" width="40">
                                    @else
                                    <img class="round" src='{{ asset("documents/profile/$profile") }}' alt="users avatar"
                                          height="40" width="40">
                                    @endif
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('profile') }}"><i
                                        class="feather icon-user"></i>
                                    Profile</a>
                                {{-- <a class="dropdown-item" href="page-user-profile.html">
                                    <i class="feather icon-user"></i> Edit Profile</a>
                                <a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My
                                    Inbox</a>
                                <a class="dropdown-item" href="app-todo.html"><i
                                        class="feather icon-check-square"></i> Task</a><a class="dropdown-item"
                                    href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="feather icon-power"></i>
                                    Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span
                        class="mr-75 feather icon-alert-octagon"></span><span>No
                        results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                {{-- <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dashboard') }}">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0"></h2>
                    </a></li> --}}
                <li class="nav-item nav-toggle d-none"><a class="nav-link modern-nav-toggle pr-0"
                        data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                {{-- <ul class="menu-content">
                    <li class="@if (Route::currentRouteName() == 'dashboard') active @endif"><a
                            href="{{ route('dashboard') }}"><i class="feather icon-home"></i><span
                                class="menu-item" data-i18n="Analytics">Dashboard</span></a>
                    </li>

                </ul> --}}
                <li class="nav-item @if (Route::currentRouteName() == 'dashboard') active @endif"><a
                        href="{{ route('dashboard') }}"><i class="feather icon-clipboard"></i><span
                            class="menu-title" data-i18n="Dashboard">Dashboard</span>
                        {{-- <span
                            class="badge badge badge-warning badge-pill float-right mr-2">2</span> --}}
                    </a>
                </li>

                <li class="nav-item @if (Route::currentRouteName() == 'users.index' || Route::currentRouteName() == 'users.edit'  || Route::currentRouteName() == 'users.show') active @endif"><a href="{{ route('users.index') }}"><i
                            class="feather icon-user"></i><span class="menu-item" data-i18n="List">User</span></a>
                </li>

                <li class="nav-item @if (Route::currentRouteName() == 'home_section.index' || Route::currentRouteName() == 'home_section.edit'  || Route::currentRouteName() == 'home_section.show') active @endif"><a
                        href="{{ route('home_section.index') }}"><i class="feather icon-home"></i><span
                            class="menu-item" data-i18n="List">Home Section</span></a>
                </li>

                <li class="nav-item @if (Route::currentRouteName() == 'about.index' || Route::currentRouteName() == 'about.edit'  || Route::currentRouteName() == 'about.show') active @endif"><a href="{{ route('about.index') }}"><i
                            class="feather icon-octagon"></i><span class="menu-item" data-i18n="List">About
                            Section</span></a>
                </li>
                <li class="nav-item @if (Route::currentRouteName() == 'blog.index' || Route::currentRouteName() == 'blog.edit'  || Route::currentRouteName() == 'blog.show') active @endif"><a href="{{ route('blog.index') }}"><i
                            class="fa fa-pencil-square-o"></i><span class="menu-item" data-i18n="List">Blog
                            Section</span></a>
                </li>

                <li class="nav-item @if (Route::currentRouteName() == 'human.index' || Route::currentRouteName() == 'human.edit'  || Route::currentRouteName() == 'human.show') active @endif"><a href="{{ route('human.index') }}"><i
                            class="fa fa-users "></i><span class="menu-item" data-i18n="List">Human
                            Section</span></a>
                </li>
                <li class="nav-item @if (Route::currentRouteName() == 'professor.index' || Route::currentRouteName() == 'professor.edit'  || Route::currentRouteName() == 'professor.show') active @endif"><a
                        href="{{ route('professor.index') }}"><i class="fa fa-book"></i><span
                            class="menu-item" data-i18n="List">Professor Section</span></a>
                </li>

                <li class="nav-item @if (Route::currentRouteName() == 'section2.index' || Route::currentRouteName() == 'section2.edit'  || Route::currentRouteName() == 'section2.show') active @endif"><a
                        href="{{ route('section2.index') }}"><i class="fa fa-clone"></i><span
                            class="menu-item" data-i18n="List">Section</span></a>
                </li>

                <li class="nav-item @if (Route::currentRouteName() == 'writer.index' || Route::currentRouteName() == 'writer.edit'  || Route::currentRouteName() == 'writer.show') active @endif"><a href="{{ route('writer.index') }}"><i
                            class="fa fa-pencil "></i><span class="menu-item" data-i18n="List">Writer
                            Section</span></a>
                </li>


                <li class="nav-item @if (Route::currentRouteName() == 'footer.index' || Route::currentRouteName() == 'footer.edit'  || Route::currentRouteName() == 'footer.show') active @endif"><a href="{{ route('footer.index') }}"><i
                            class="feather icon-octagon"></i><span class="menu-item" data-i18n="List">Footer
                            Section</span></a>
                </li>




            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->


                @yield('body-section')
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span
                class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; {{ $date }}<a
                    class="text-bold-800 grey darken-2" href="#!" target="_blank">{{ $footer->name??null }},</a>All rights
                Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i
                    class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/tether.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/shepherd.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    {{-- <script src="{{ asset('app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/quill.min.js') }}"></script> --}}
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/app-user.js') }}"></script>
    {{-- <script src="{{ asset('app-assets/js/scripts/editors/editor-quill.js') }}"></script> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.css') }}">
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/extensions/toastr.js') }}"></script>
    <script src="{{ asset('app-assets/js/waitMe.js') }}"></script>
    {{-- <script src="{{ asset('app-assets/js/toastr.min.js') }}"></script> --}}

    <script>
        var type = "{{ Session::get('type') }}";
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;

        }
    </script>

    <script>
        $(document).ready(function() {
            // $('.buttons-print').addClass('d-none');
            // $('.buttons-copy').addClass('d-none');
            // $('.buttons-print').addClass('d-none');

             $('#DataTables_Table_0_wrapper').children('.dt-buttons').addClass('d-none');

        });
        $(document).ready(function() {
            $('.editor').each(function(e) {
                CKEDITOR.replace(this.id, {
                    allowedContent: true,
                    toolbar: 'Full',
                    enterMode: CKEDITOR.ENTER_BR,
                    shiftEnterMode: CKEDITOR.ENTER_P,
                });
            });
        });
    </script>
    <!-- END: Page JS-->
    @yield('footer-section')


    @yield('footer-script')

</body>
<!-- END: Body-->

</html>
