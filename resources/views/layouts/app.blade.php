<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--end::Primary Meta Tags-->

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <!--end::Fonts-->


    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE) via Vite -->
    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!--end::Required Plugin(AdminLTE)-->

</head>
<!--end::Head-->

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg sidebar-mini sidebar-collapse bg-body-tertiary">

<!--begin::App Wrapper-->
<div class="app-wrapper" id="app">
    <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                        <i class="bi bi-list"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-md-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-md-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <!--end::Start Navbar Links-->

            <!--begin::End Navbar Links-->
            <ul class="navbar-nav ms-auto">

                <!--end::Navbar Search-->
                <!--begin::Messages Dropdown Menu-->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">
                        <i class="bi bi-chat-text"></i>
                        <span class="navbar-badge badge text-bg-danger">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <a href="#" class="dropdown-item">
                            <!--begin::Message-->
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="https://placehold.co/100x100" alt="User Avatar" class="img-size-50 rounded-circle me-3">
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">

                                        Brad Diesel

                                        <span class="float-end fs-7 text-danger">
                                                <i class="bi bi-star-fill"></i>
                                            </span>
                                    </h3>
                                    <p class="fs-7">Call me whenever you can...</p>
                                    <p class="fs-7 text-secondary">
                                        <i class="bi bi-clock-fill me-1"></i>
                                        4 Hours Ago

                                    </p>
                                </div>
                            </div>
                            <!--end::Message-->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!--begin::Message-->
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="https://placehold.co/100x100" alt="User Avatar" class="img-size-50 rounded-circle me-3">
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">

                                        John Pierce

                                        <span class="float-end fs-7 text-secondary">
                                                <i class="bi bi-star-fill"></i>
                                            </span>
                                    </h3>
                                    <p class="fs-7">I got your message bro</p>
                                    <p class="fs-7 text-secondary">
                                        <i class="bi bi-clock-fill me-1"></i>
                                        4 Hours Ago

                                    </p>
                                </div>
                            </div>
                            <!--end::Message-->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!--begin::Message-->
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="https://placehold.co/100x100" alt="User Avatar" class="img-size-50 rounded-circle me-3">
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">

                                        Nora Silvester

                                        <span class="float-end fs-7 text-warning">
                                                <i class="bi bi-star-fill"></i>
                                            </span>
                                    </h3>
                                    <p class="fs-7">The subject goes here</p>
                                    <p class="fs-7 text-secondary">
                                        <i class="bi bi-clock-fill me-1"></i>
                                        4 Hours Ago

                                    </p>
                                </div>
                            </div>
                            <!--end::Message-->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!--end::Messages Dropdown Menu-->

                <!--begin::Notifications Dropdown Menu-->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">
                        <i class="bi bi-bell-fill"></i>
                        <span class="navbar-badge badge text-bg-warning">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="bi bi-envelope me-2"></i>
                            4 new messages

                            <span class="float-end text-secondary fs-7">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="bi bi-people-fill me-2"></i>
                            8 friend requests

                            <span class="float-end text-secondary fs-7">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="bi bi-file-earmark-fill me-2"></i>
                            3 new reports

                            <span class="float-end text-secondary fs-7">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">
                            See All Notifications
                        </a>
                    </div>
                </li>
                <!--end::Notifications Dropdown Menu-->

                <!--begin::Fullscreen Toggle-->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                        <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                        <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i>
                    </a>
                </li>
                <!--end::Fullscreen Toggle-->

                <!--begin::User Menu Dropdown-->
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="https://placehold.co/100x100" class="user-image rounded-circle shadow" alt="User Image">
                        <span class="d-none d-md-inline">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <!--begin::User Image-->
                        <li class="user-header text-bg-primary">
                            <img src="https://placehold.co/100x100" class="rounded-circle shadow" alt="User Image">
                            <p>

                                Alexander Pierce - Web Developer

                                <small>Member since Nov. 2023</small>
                            </p>
                        </li>
                        <!--end::User Image-->

                        <!--begin::Menu Body-->
                        <li class="user-body">
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!--end::Row-->
                        </li>
                        <!--end::Menu Body-->

                        <!--begin::Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                        </li>
                        <!--end::Menu Footer-->
                    </ul>
                </li>
                <!--end::User Menu Dropdown-->
            </ul>
            <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->

    </nav>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
            <!--begin::Brand Link-->
            <a class='brand-link' href='/dist/pages/'>
                <!--begin::Brand Image-->
                <img src="https://placehold.co/100x100" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
                <!--end::Brand Image-->
                <!--begin::Brand Text-->
                <span class="brand-text fw-light">{{ config('app.name', 'Laravel') }}</span>
                <!--end::Brand Text-->
            </a>
            <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <!--begin::Sidebar Menu-->
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-speedometer"></i>
                            <p>

                                Dashboard

                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/index2'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/index3'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-box-seam-fill"></i>
                            <p>

                                Widgets

                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/widgets/small-box'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Small Box</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/widgets/info-box'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>info Box</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/widgets/cards'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Cards</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon bi bi-clipboard-fill"></i>
                            <p>

                                Layout Options

                                <span class="nav-badge badge text-bg-secondary me-3">6</span>
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/layout/unfixed-sidebar'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Default Sidebar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/layout/fixed-sidebar'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/layout/fixed-complete'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Fixed Complete</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/layout/sidebar-mini'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Sidebar Mini</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link active' href='/dist/pages/layout/collapsed-sidebar'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>
                                        Sidebar Mini
                                        <small>+ Collapsed</small>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/layout/logo-switch'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>
                                        Sidebar Mini
                                        <small>+ Logo Switch</small>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/layout/layout-rtl'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Layout RTL</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-tree-fill"></i>
                            <p>

                                UI Elements

                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/ui/general'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/ui/timeline'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Timeline</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-pencil-square"></i>
                            <p>

                                Forms

                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/forms/general'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-table"></i>
                            <p>

                                Tables

                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/tables/simple'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">EXAMPLES</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-box-arrow-in-right"></i>
                            <p>

                                Auth

                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                    <p>

                                        Version 1

                                        <i class="nav-arrow bi bi-chevron-right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class='nav-link' href='/dist/pages/examples/login'>
                                            <i class="nav-icon bi bi-circle"></i>
                                            <p>Login</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href='/dist/pages/examples/register'>
                                            <i class="nav-icon bi bi-circle"></i>
                                            <p>Register</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                    <p>

                                        Version 2

                                        <i class="nav-arrow bi bi-chevron-right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class='nav-link' href='/dist/pages/examples/login-v2'>
                                            <i class="nav-icon bi bi-circle"></i>
                                            <p>Login</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href='/dist/pages/examples/register-v2'>
                                            <i class="nav-icon bi bi-circle"></i>
                                            <p>Register</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='/dist/pages/examples/lockscreen'>
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
                <!--end::Sidebar Menu-->
            </nav>
        </div>
        <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Collapsed Sidebar</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Collapsed Sidebar
                            </li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>

            Copyright &copy; 2014-2024&nbsp;

            <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>
            .

        </strong>

        All rights reserved.
        <!--end::Copyright-->
    </footer>
    <!--end::Footer-->
</div>
<!--end::App Wrapper-->


<!--begin::Script-->

<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
<!--end::Third Party Plugin(OverlayScrollbars)-->

<!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)-->


<!--end::Script-->
@livewireScripts
</body>
<!--end::Body-->

</html>
