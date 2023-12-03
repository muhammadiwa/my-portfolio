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
            <li class="menu-item @if(Request::segment(2) == 'dashboard') active @endif"><a href="{{ route('admin.dashboard.index') }}"> <span class="nav-icon flex-shrink-0"><i class="bi bi-speedometer fs-18"></i></span> <span class="nav-text">Dashboards</span></a> 
                
            </li>

            <!-- Content -->
            <li class="menu-section-title text-gray ff-heading fs-16 fw-bold text-uppercase mt-4 mb-2"><span>Content</span></li>
            <li class="menu-item @if(Request::segment(2) == 'home') active @endif"><a href="{{ route('admin.home.index') }}"><span class="nav-icon flex-shrink-0"><i class="bi bi-house-door"></i></span> <span class="nav-text">Home</span></a></li>
            <li class="menu-item @if(Request::segment(2) == 'about') active @endif"><a href="{{ route('admin.about.index') }}"><span class="nav-icon flex-shrink-0"><i class="bi bi-info-circle"></i></span> <span class="nav-text">About</span></a></li>
            <li class="menu-item @if(Request::segment(2) == 'skills') active @endif"><a href="{{ route('admin.skills.index') }}"><span class="nav-icon flex-shrink-0"><i class="bi bi-gear"></i></span> <span class="nav-text">Skills</span></a></li>
            <li class="menu-item @if(Request::segment(2) == 'services') active @endif"><a href="{{ route('admin.services.index') }}"><span class="nav-icon flex-shrink-0"><i class="bi bi-briefcase"></i></span> <span class="nav-text">Services</span></a></li>
            <li class="menu-item @if(Request::segment(2) == 'portfolio') active @endif"><a href="{{ route('admin.portfolio.index') }}"><span class="nav-icon flex-shrink-0"><i class="bi bi-folder"></i></span> <span class="nav-text">Portfolio</span></a></li>
            <li class="menu-item @if(Request::segment(2) == 'contact') active @endif"><a href="{{ route('admin.contact.index') }}"><span class="nav-icon flex-shrink-0"><i class="bi bi-envelope"></i></span> <span class="nav-text">Contact</span></a></li>
            
        </ul>
    </div>

    <div class="card border-0 rounded-0 mt-6">
        <div class="card-body p-0">
            <h6 class="text-gray lh-20 mb-0">Admin Dashboard</h6>
            <h6 class="text-gray fs-14 fw-medium">Made with <i class="bi bi-heart-fill text-red"></i> by <a href="#">Mohammad Iwa</a></h6>
        </div>
    </div>
</div>