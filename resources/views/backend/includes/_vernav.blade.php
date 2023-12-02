<div class="kleon-vertical-nav">
    <!-- Logo  -->
    <div class="logo d-flex align-items-center justify-content-between">
        <a href="{{ asset('public/back/index-2.html') }}" class="d-flex align-items-center gap-3 flex-shrink-0">
            <img src="{{ asset('public/back/assets/img/logo-icon.svg') }}" alt="logo">
            <div class="position-relative flex-shrink-0">
                <img src="{{ asset('public/back/assets/img/logo-text.svg') }}" alt="" class="logo-text">
                <img src="{{ asset('public/back/assets/img/logo-text-white.svg') }}" alt="" class="logo-text-white">
            </div>
        </a>
        <button type="button" class="kleon-vertical-nav-toggle"><i class="bi bi-list"></i></button>
    </div>

    <div class="kleon-navmenu">
        <h6 class="hidden-header text-gray text-uppercase ls-1 ms-4 mb-4">Main Menu</h6>
        <ul class="main-menu">
            
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Home</span></li>
            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer fs-18"></i></span> <span class="nav-text">Dashboards</span></a> 
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/index-2.html') }}">Invoice Management</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/index-hr.html') }}">HR Management</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/index-job-hiring.html') }}">Job Hiring Management</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/index-project.html') }}">Project Management v1</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/index-project-2.html') }}">Project Management v2</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/index-general.html') }}">General Dashboard</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Sass</span></li>
            <!-- HR Management -->
            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-people fs-18"></i></span> <span class="nav-text">HR Management</span></a> 
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/employees.html') }}"> Employees <span class="menuIndicator bg-soft-secondary rounded-3 py-0 px-3">New</span></a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/recruitment.html') }}"> Recruitment</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/jobs.html') }}"> Jobs <span class="menuIndicator bg-info rounded-circle text-white">17</span></a></li>
                    <li class="menu-item menu-item-has-children"><a href="#"> Candidates</a> 
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ asset('public/back/candidates.html') }}"> Candidate List</a></li>
                            <li class="menu-item"><a href="{{ asset('public/back/candidate.html') }}"> Candidate</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item"><a href="{{ asset('public/back/attendances.html') }}"> Attendances</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/leaves.html') }}"> Leaves</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/documents.html') }}"> Documents</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>

            <!-- Job Hiring -->
            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-briefcase fs-18"></i></span> <span class="nav-text">Job Hiring</span></a> 
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/jobs-hiring.html') }}"> Jobs <span class="menuIndicator bg-info rounded-circle text-white">17</span></a></li>
                    <li class="menu-item menu-item-has-children"><a href="#"> Candidates</a> 
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ asset('public/back/candidates-grid-hiring.html') }}"> Candidate Grid</a></li>
                            <li class="menu-item"><a href="{{ asset('public/back/candidates-list-hiring.html') }}"> Candidate List</a></li>
                            <li class="menu-item"><a href="{{ asset('public/back/candidates-qualified-hiring.html') }}"> Qualified Candidates</a></li>
                            <li class="menu-item"><a href="{{ asset('public/back/candidate-hiring.html') }}"> Candidate Profile</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item"><a href="{{ asset('public/back/statistics-hiring.html') }}"> Statistics</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/company-hiring.html') }}"> Company Profile</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/documents-hiring.html') }}"> Documents</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>

            <!-- Project Management -->
            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-kanban fs-18"></i></span> <span class="nav-text">Project Management</span></a> 
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/contacts.html') }}"> Contacts</a></li>
                    <li class="menu-item menu-item-has-children"><a href="#"> Projects</a> 
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ asset('public/back/projects.html') }}"> All Projects</a></li>
                            <li class="menu-item"><a href="{{ asset('public/back/project-details.html') }}"> Project Detail</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item"><a href="{{ asset('public/back/files.html') }}"> Files</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/profile.html') }}"> Profile</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>

            <!-- General Dashboard -->
            <li class="menu-item menu-item-has-children"><a href="#"> <span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer2 fs-18"></i></span> <span class="nav-text">General</span></a> 
                <ul class="sub-menu">
                    <li class="menu-item menu-item-has-children"><a href="#"> Contacts</a> 
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ asset('public/back/contacts-2.html') }}"> Contact List</a></li>
                            <li class="menu-item"><a href="{{ asset('public/back/contact-new.html') }}"> Add Contact</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    
                    <li class="menu-item"><a href="{{ asset('public/back/profile-2.html') }}"> Profile</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/preferences.html') }}"> Preferences</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>

            <!-- Apps -->
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Apps</span></li>                    
            <li class="menu-item"><a href="{{ asset('public/back/calendar.html') }}"><span class="nav-icon flex-shrink-0"><i class="bi bi-calendar-day fs-18"></i></span> <span class="nav-text">Calendar</span></a></li>
            
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-envelope fs-18"></i></span> <span class="nav-text">Email</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/email.html') }}">Inbox</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/email-compose.html') }}">Email Compose</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/email-details.html') }}">Email Preview</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-chat fs-18"></i></span> <span class="nav-text">Chat</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/inbox.html') }}">Inbox</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/chat.html') }}">Chat Preview</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/chat-2.html') }}">Chat 2 Preview</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-receipt fs-18"></i></span> <span class="nav-text">Invoices</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/invoices.html') }}">Invoice List</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/invoice.html') }}">Invoice Details</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/invoice-new.html') }}">Create Invoice</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-kanban fs-18"></i></span> <span class="nav-text">Task</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/task.html') }}">Task List</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/task-2.html') }}">Task 2</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/task-jkanban.html') }}">Kanban</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>

            <!-- Content -->
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Content</span></li>
            <li class="menu-item"><a href="{{ asset('public/back/typography.html') }}"><span class="nav-icon flex-shrink-0"><i class="bi bi-fonts fs-18"></i></span> <span class="nav-text">Typography</span></a></li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-table fs-18"></i></span> <span class="nav-text">Tables</span></a>
                <ul class="sub-menu">
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-text">Bootstrap Table</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ asset('public/back/tables-bootstrap-basic.html') }}">Basic Table</a></li>
                            <li class="menu-item"><a href="{{ asset('public/back/tables-bootstrap.html') }}">Customized Table</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-text">Flex Table</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ asset('public/back/tables-flex-basic.html') }}">Basic Flex Table</a></li>
                            <li class="menu-item"><a href="{{ asset('public/back/tables-flex-customized.html') }}">Customized Flex Table</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item"><a href="{{ asset('public/back/tables-datatables.html') }}">Data Tables</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-gift fs-18"></i></span> <span class="nav-text">Widgets</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/widget-apps.html') }}">Widget Apps</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/widget-charts.html') }}">Widget Charts</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/widget-cards.html') }}">Widget Cards</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/widget-listing.html') }}">Widget Listing</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            
            
            <!-- Forms -->
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Forms</span></li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-textarea-t fs-18"></i></span> <span class="nav-text">Form Elements</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/form-basic.html') }}">Basic Forms</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/form-inputs.html') }}">Forms Inputs</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/form-input-groups.html') }}">Forms Inputs Group</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/form-horizontal.html') }}">Forms Horizontal</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/form-vertical.html') }}">Forms Vertical</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/form-wizard.html') }}">Forms Wizard</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-check-square fs-18"></i></span> <span class="nav-text">Form Validation</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/form-validation-bootstrap.html') }}">Bootstrap Validation</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/form-validation-custom.html') }}">Custom Validation</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            

            <!-- UI Components -->
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>UI Components</span></li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-bricks fs-18"></i></span> <span class="nav-text">UI Elements</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/accordion.html') }}">Accordion</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/alerts.html') }}">Alerts</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/avatar.html') }}">Avatar</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/badge.html') }}">Badge</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/breadcrumb.html') }}">Breadcrumb</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/collapse.html') }}">Collapse</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/dropdowns.html') }}">Dropdowns</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/list-group.html') }}">List Group</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/modals.html') }}">Modal</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/offcanvas.html') }}">Offcanvas</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/tabs.html') }}">Tabs</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/pagination.html') }}">Pagination</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/placeholders.html') }}">Placeholders</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/popovers.html') }}">Popovers</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/progressbar.html') }}">Progressbar</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/spinners.html') }}">Spinners</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/toasts.html') }}">Toasts</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/tooltips.html') }}">Tooltips</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-card-image fs-18"></i></span> <span class="nav-text">Cards</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/cards-basic.html') }}">Bootstrap Basic</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/cards.html') }}">Customized Cards</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-send fs-18"></i></span> <span class="nav-text">Buttons</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/buttons.html') }}">Default Buttons</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/video-buttons.html') }}">Video Buttons</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-plugin fs-18"></i></span> <span class="nav-text">Plugins</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/form-dropzone.html') }}">Dropzone</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/form-repeater.html') }}">Repeater</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/form-select2.html') }}">Select 2</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/sweetalert.html') }}">Sweet Alert</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/toastr.html') }}">Toastr</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>

            <!-- Authentication -->
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Authentication</span></li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-info-circle fs-18"></i></span> <span class="nav-text">Error</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/403.html') }}">403 Error</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/404.html') }}">404 Error</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/500.html') }}">500 Error</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-box-arrow-in-right fs-18"></i></span> <span class="nav-text">Login</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/login.html') }}">Boxed Login</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/login-2.html') }}">Side Login</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-person-plus fs-18"></i></span> <span class="nav-text">Registration</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/register.html') }}">Boxed Registration</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/register-2.html') }}">Side Registration</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-key fs-18"></i></span> <span class="nav-text">Password</span></a>
                <ul class="sub-menu">
                    <li class="menu-item menu-item-has-children"><a href="#">Reset Passward</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ asset('public/back/reset-password.html') }}">Boxed Reset Passward</a></li>
                            <li class="menu-item"><a href="{{ asset('public/back/reset-password-2.html') }}">Side Reset Passward</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Forgot Passward</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ asset('public/back/forgot-password.html') }}">Boxed Forgot Passward</a></li>
                            <li class="menu-item"><a href="{{ asset('public/back/forgot-password-2.html') }}">Side Forgot Passward</a></li>
                        </ul>
                        <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
                    </li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-qr-code-scan fs-18"></i></span> <span class="nav-text">Two Step Varification</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/two-step-varification.html') }}">Boxed Varification</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/two-step-varification-2.html') }}">Side Varification</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>

            <!-- Charts -->
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Charts</span></li>
            <li class="menu-item menu-item-has-children"><a href="#"><span class="nav-icon flex-shrink-0"><i class="bi bi-pie-chart fs-18"></i></span> <span class="nav-text">Apex Chart</span></a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="{{ asset('public/back/apexchart-line.html') }}">Line Chart</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/apexchart-bar.html') }}">Bar Chart</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/apexchart-column.html') }}">Column Chart</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/apexchart-area.html') }}">Area Chart</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/apexchart-pie.html') }}">Pie Chart</a></li>
                    <li class="menu-item"><a href="{{ asset('public/back/apexchart-radial.html') }}">Radial Chart</a></li>
                </ul>
                <span class='submenu-opener'><i class='bi bi-chevron-right'></i></span>
            </li>
            
            
        </ul>
    </div>

    <div class="card border-0 text-white mr-top-70 boost-card">
        <div class="card-body">
            <div class="icon fs-20 mb-2"><i class="bi bi-speedometer2"></i></div>
            <h5 class="fs-18 text-white">Boost your work</h5>
            <p class="fs-14 mb-4">Upgrade to premium here</p>
            <a href="#" class="btn ff-heading fw-bold fs-16 bg-white text-primary rounded-3 border-0">Upgrade Now <i class="bi bi-caret-right-fill"></i></a>
        </div>
    </div>

    <div class="card border-0 rounded-0 mt-6">
        <div class="card-body p-0">
            <h6 class="text-gray lh-20 mb-0">Kleon Admin Dashboard</h6>
            <h6 class="text-gray fs-14 fw-medium">Made with <i class="bi bi-heart-fill text-red"></i> by <a href="#">WPThemeBooster</a></h6>
        </div>
    </div>
</div>