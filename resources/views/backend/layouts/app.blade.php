<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from wpthemebooster.com/demo/themeforest/html/kleon/index-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 06:31:11 GMT -->
<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Personal Portfolio Admin Dashboard">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link href="{{ asset('public/back/assets/img/favicon.png') }}" rel="shortcut icon" type="image/png">
        <link href="{{ asset('public/back/assets/img/apple-touch-icon.html') }}" rel="apple-touch-icon">
        <link href="{{ asset('public/back/assets/img/apple-touch-icon-72x72.html') }}" rel="apple-touch-icon" sizes="72x72">
        <link href="{{ asset('public/back/assets/img/apple-touch-icon-114x114.html') }}" rel="apple-touch-icon" sizes="114x114">
        <link href="{{ asset('public/back/assets/img/apple-touch-icon-144x144.html') }}" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>Personal Portfolio | Admin</title>
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="{{ asset('public/back/assets/css/main.css') }}" id="stylesheet">
        <!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">

        {{-- Sweetalert if error exist --}}
        @if (session()->has('error'))
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
            })
            </script>
        @endif

        {{-- Sweetalert if success exist --}}
        @if (session()->has('success'))
            <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
            })
            </script>
        @endif

        <!-- Styles -->
        <!-- <style>
            /*Form fields*/
            .dataTables_wrapper select,
            .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
            }

            .dataTables_wrapper select {
            padding-right: 1.5rem;
            }

            /*Row Hover*/
            table.dataTable.hover tbody tr:hover,
            table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
            }

            /*Pagination Buttons*/
            .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
            }

            /*Pagination Buttons - Current selected */
            .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #008652 !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
            }

            /*Pagination Buttons - Hover */
            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #008652 !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
            }

            /*Add padding to bottom border */
            table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
            }

            /*Change colour of responsive icon*/
            table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
            table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #008652 !important;
            /*bg-indigo-500*/
            }

            table.dataTable tr th.select-checkbox.selected::after {
            content: "✔";
            margin-top: -11px;
            margin-left: -4px;
            text-align: center;
            text-shadow: rgb(176, 190, 217) 1px 1px, rgb(176, 190, 217) -1px -1px, rgb(176, 190, 217) 1px -1px, rgb(176, 190, 217) -1px 1px;
            }
        </style> -->
    </head>


    <body class="bg-light has-right-panel">
        
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-inner">
                <div class="spinner"></div>
                <div class="logo"><img src="{{ asset('public/back/assets/img/logo-icon.svg') }}" alt="img"></div>
            </div>
        </div>

        <!-- Default Nav -->
        <header class="header kleon-default-nav">				
            <div class="d-none d-xl-block">
                <div class="header-inner d-flex align-items-center justify-content-around justify-content-xl-between flex-wrap flex-xl-nowrap gap-3 gap-xl-5">
                    <div class="header-left-part d-flex align-items-center flex-grow-1 w-100">
                        <div class="header-search w-100">
                            <form class="search-form" action="https://wpthemebooster.com/demo/themeforest/html/kleon/search.php">
                                <input type="text" name="search" class="keyword form-control w-100" placeholder="Search">
                                <button type="submit" class="btn"><img src="{{ asset('public/back/assets/img/svg/search.svg') }}" alt=""></button>
                            </form>
                        </div>
                    </div>

                    <div class="header-right-part d-flex align-items-center flex-shrink-0">
                        <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                            <li class="nav-item nav-color-switch d-flex align-items-center gap-3">
                                <div class="sun"><img src="{{ asset('public/back/assets/img/sun.svg') }}" alt="img"></div>
                                <div class="switch">
                                    <input type="checkbox" id="colorSwitch" value="false" name="defaultMode">
                                    <div class="shutter">
                                        <span class="lbl-off"></span>
                                        <span class="lbl-on"></span>
                                        <div class="slider bg-primary"></div>
                                    </div>
                                </div>
                                <div class="moon"><img src="{{ asset('public/back/assets/img/moon.svg') }}" alt="img"></div>
                            </li>

                            <li class="nav-item nav-flag">
                                <select class="kleon-select-single nav-toggler-content">
                                    <option selected value="en">Eng(US)</option>
                                    <option value="fr">French</option>
                                    <option value="de">German</option>
                                    <option value="sp">Spanish</option>
                                </select>
                            </li>
                            
                            <li class="nav-item nav-notification dropdown">
                                <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('public/back/assets/img/svg/bell.svg') }}" alt="bell">
                                    <div class="badge rounded-circle">12</div>
                                </a>
                                <div class="dropdown-widget dropdown-menu p-0">
                                    <div class="dropdown-wrapper pd-50">
                                        <div class="dropdown-wrapper--title">
                                            <h4 class="d-flex align-items-center justify-content-between">Notifications <a href="#">View All</a></h4>
                                        </div>
                                        <ul class="notification-board list-unstyled">
                                            <li class="author-online has-new-message d-flex gap-3">
                                                <div class="media bg-primary text-white">
                                                    <i class="bi bi-lightning"></i>
                                                </div>
                                                <div class="user-message">
                                                    <h6 class="message"><a href="#">Jackie Kun</a> mentioned you at <a href="#">Kleon Projects</a></h6>
                                                    <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                                </div>
                                            </li>
                                            <li class="author-online has-new-message d-flex gap-3">
                                                <div class="media bg-secondary text-white">
                                                    <i class="bi bi-lightning"></i>
                                                </div>
                                                <div class="user-message">
                                                    <h6 class="message"><a href="#">Olivia Johanna</a> has created new task at <a href="#">Kleon Projects</a></h6>
                                                    <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                                </div>
                                            </li>
                                            <li class="author-online has-new-message d-flex gap-3">
                                                <div class="media media-outline-red text-red">
                                                    <i class="bi bi-clock-fill"></i>
                                                </div>
                                                <div class="user-message">
                                                    <h6 class="message">[REMINDER] Due date of <a href="#">Highspeed Studios Projects</a> te task will be coming</h6>
                                                    <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6 class="all-notifications"> <a href="#" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All Notifications</a> </h6>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item nav-settings">
                                <a href="#" class="nav-toggler">
                                    <img src="{{ asset('public/back/assets/img/svg/settings.svg') }}" alt="img">
                                </a>
                            </li>

                            <li class="nav-item nav-author">
                                <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('public/back/assets/img/nav_author.jpg') }}" alt="img" width="54" class="rounded-2">
                                    <div class="nav-toggler-content">
                                        <h6 class="mb-0">Franklin Jr.</h6>
                                        <div class="ff-heading fs-14 fw-normal text-gray">Super Admin</div>
                                    </div>
                                </a>
                                <div class="dropdown-widget dropdown-menu p-0 admin-card">
                                    <div class="dropdown-wrapper">
                                        <div class="card mb-0">
                                            <div class="card-header p-3 text-center">
                                                <img src="{{ asset('public/back/assets/img/nav_author.jpg') }}" alt="img" width="80" class="rounded-circle avatar">
                                                <div class="mt-2">
                                                    <h6 class="mb-0 lh-18">Franklin Jr.</h6>
                                                    <div class="fs-14 fw-normal text-gray">Super Admin</div>
                                                </div>
                                            </div>
                                            <div class="card-body p-3">
                                                <ul class="list-unstyled p-0 m-0">
                                                    <li>
                                                        <a href="{{ asset('public/back/profile.html') }}" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-person me-2"></i> Profile</a>
                                                    </li>
                                                    <li >
                                                        <a href="{{ asset('public/back/email.html') }}" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-envelope me-2 "></i> Inbox</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-gear me-2"></i> Setting & Privacy</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="card-footer p-3">
                                                <a href="{{ asset('public/back/login.html') }}" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="small-header d-flex align-items-center justify-content-between d-xl-none">
                <div class="logo">
                    <a href="{{ asset('public/back/index-2.html') }}" class="d-flex align-items-center gap-3 flex-shrink-0">
                        <img src="{{ asset('public/back/assets/img/logo-icon.svg') }}" alt="logo">
                        <div class="position-relative flex-shrink-0">
                            <img src="{{ asset('public/back/assets/img/logo-text.svg') }}" alt="" class="logo-text">
                            <img src="{{ asset('public/back/assets/img/logo-text-white.svg') }}" alt="" class="logo-text-white">
                        </div>
                    </a>
                </div>
                <div>
                    <button type="button" class="kleon-header-expand-toggle"><span class="fs-24"><i class="bi bi-three-dots-vertical"></i></button>
                    <button type="button" class="kleon-mobile-menu-opener"><span class="close"><i class="bi bi-arrow-left"></i></span> <span class="open"><i class="bi bi-list"></i></span></button>
                </div>
            </div>

            <div class="header-mobile-option">
                <div class="header-inner">
                    <div class="d-flex align-items-center justify-content-end flex-shrink-0">
                        <ul class="nav-elements d-flex align-items-center list-unstyled m-0 p-0">
                            <li class="nav-item nav-search">
                                <button type="button" class="btn p-0 m-0 border-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="bi bi-search"></i>
                                </button>
                            </li>
                            <li class="nav-item nav-notification dropdown">
                                <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-bell-fill"></i>
                                    <div class="badge rounded-circle">12</div>
                                </a>
                                <div class="dropdown-widget dropdown-menu p-0">
                                    <div class="dropdown-wrapper pd-50">
                                        <div class="dropdown-wrapper--title">
                                            <h4 class="d-flex align-items-center justify-content-between">Notifications <a href="#">View All</a></h4>
                                        </div>
                                        <ul class="notification-board list-unstyled">
                                            <li class="author-online has-new-message d-flex gap-3">
                                                <div class="media bg-primary text-white">
                                                    <i class="bi bi-lightning"></i>
                                                </div>
                                                <div class="user-message">
                                                    <h6 class="message"><a href="#">Jackie Kun</a> mentioned you at <a href="#">Kleon Projects</a></h6>
                                                    <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                                </div>
                                            </li>
                                            <li class="author-online has-new-message d-flex gap-3">
                                                <div class="media bg-secondary text-white">
                                                    <i class="bi bi-lightning"></i>
                                                </div>
                                                <div class="user-message">
                                                    <h6 class="message"><a href="#">Olivia Johanna</a> has created new task at <a href="#">Kleon Projects</a></h6>
                                                    <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                                </div>
                                            </li>
                                            <li class="author-online has-new-message d-flex gap-3">
                                                <div class="media media-outline-red text-red">
                                                    <i class="bi bi-clock-fill"></i>
                                                </div>
                                                <div class="user-message">
                                                    <h6 class="message">[REMINDER] Due date of <a href="#">Highspeed Studios Projects</a> te task will be coming</h6>
                                                    <p class="message-footer d-flex align-items-center justify-content-between"> <span class="fs-14 text-gray fw-normal">2m ago</span> <span>Mark as read</span></p>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6 class="all-notifications"> <a href="#" class="btn bg-muted text-primary w-100 fw-bold mt-3 ff-heading px-0">View All Notifications</a> </h6>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item nav-settings">
                                <a href="#" class="nav-toggler">
                                    <i class="bi bi-gear-fill"></i>
                                </a>
                            </li>

                            <li class="nav-item nav-author px-3">
                                <a href="#" class="nav-toggler" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('public/back/assets/img/nav_author.jpg') }}" alt="img" width="40" class="rounded-2">
                                    <div class="nav-toggler-content">
                                        <h6 class="mb-0">Franklin Jr.</h6>
                                        <div class="ff-heading fs-14 fw-normal text-gray">Super Admin</div>
                                    </div>
                                </a>
                                <div class="dropdown-widget dropdown-menu p-0 admin-card">
                                    <div class="dropdown-wrapper">
                                        <div class="card mb-0">
                                            <div class="card-header p-3 text-center">
                                                <img src="{{ asset('public/back/assets/img/nav_author.jpg') }}" alt="img" width="60" class="rounded-circle avatar">
                                                <div class="mt-2">
                                                    <h6 class="mb-0 lh-18">Franklin Jr.</h6>
                                                    <div class="fs-14 fw-normal text-gray">Super Admin</div>
                                                </div>
                                            </div>
                                            <div class="card-body p-3">
                                                <ul class="list-unstyled p-0 m-0">
                                                    <li>
                                                        <a href="{{ asset('public/back/profile.html') }}" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-person me-2"></i> Profile</a>
                                                    </li>
                                                    <li >
                                                        <a href="{{ asset('public/back/email.html') }}" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-envelope me-2 "></i> Inbox</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="fs-14 fw-normal text-dark d-block p-1"><i class="bi bi-gear me-2"></i> Setting & Privacy</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="card-footer p-3">
                                                <a href="{{ asset('public/back/login.html') }}" class="btn btn-outline-gray bg-transparent w-100 py-1 rounded-1 text-dark fs-14 fw-medium"><i class="bi bi-box-arrow-right"></i> Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Horizontal Nav -->
        @include('backend.includes._hornav')
        
        <!-- Combo Nav -->
        @include('backend.includes._combonav')

        <!-- Vertical Nav -->
        @include('backend.includes._vernav')
        
        <!-- Theme Customizer Panel -->
        @include('backend.includes._customizer')

        <!-- Header Modal Search -->
        <div class="modal fade header-search-modal" id="searchModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="search-form" action="https://wpthemebooster.com/demo/themeforest/html/kleon/search.php">
                            <input type="text" name="search" class="keyword form-control w-100" placeholder="Search">
                            <button type="submit" class="btn"><img src="{{ asset('public/back/assets/img/svg/search.svg') }}" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Wrapper-->
        <main class="main-wrapper">
            <div class="container-fluid">
                <div class="row">
                    
                    @yield('content')
    
                    @include('backend.includes._sidebar')
                </div>
            </div>
        </main>

        

        <!-- Core JS -->
        <script src="{{ asset('public/back/assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('public/back/assets/js/bootstrap.bundle.min.js') }}"></script>

        <!-- jQuery UI Kit -->
        <script src="{{ asset('public/back/plugins/jquery_ui/jquery-ui.1.12.1.min.js') }}"></script>
        
        <!-- ApexChart -->
        <script src="{{ asset('public/back/plugins/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ asset('public/back/plugins/apexchart/apexchart-inits/apexcharts-project.js') }}"></script>
        
        <!-- Peity  -->
        <script src="{{ asset('public/back/plugins/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('public/back/plugins/peity/piety-init.js') }}"></script>

        <!-- Select 2 -->
        <script src="{{ asset('public/back/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Datatables -->
        <script src="{{ asset('public/back/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/back/plugins/datatables/js/datatables.init.js') }}"></script>
        
        

        <!-- Date Picker -->
        <script src="{{ asset('public/back/plugins/flatpickr/flatpickr.min.js') }}"></script>

        <!-- Dropzone -->
        <script src="{{ asset('public/back/plugins/dropzone/dropzone.min.js') }}"></script>
        <script src="{{ asset('public/back/plugins/dropzone/dropzone_custom.js') }}"></script>
        
        <!-- TinyMCE -->
        <script src="{{ asset('public/back/plugins/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('public/back/plugins/prism/prism.js') }}"></script>
        <script src="{{ asset('public/back/plugins/jquery-repeater/jquery.repeater.js') }}"></script>

        <!-- jQuery Validation -->
        <script src="{{ asset('public/back/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        
        
        <!-- Sweet Alert -->
        <script src="{{ asset('public/back/plugins/sweetalert/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('public/back/plugins/sweetalert/sweetalert2-init.js') }}"></script>
        <script src="{{ asset('public/back/plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>
        
        <!-- Snippets JS -->
        <script src="{{ asset('public/back/assets/js/snippets.js') }}"></script>
        
        <!-- Theme Custom JS -->
        <script src="{{ asset('public/back/assets/js/theme.js') }}"></script>
        
        @stack('js')
    </body>

<!-- Mirrored from wpthemebooster.com/demo/themeforest/html/kleon/index-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 06:31:12 GMT -->
</html>