<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <div class="d-flex align-items-center">
                        <a href="/" class="d-flex align-items-center justify-content-start">
                            <img src="/assets/vendors/mazer/images/logo/logo.svg" alt="Logo" class="img-fluid w-50">
                            <span class="font-bold fs-5">Nou Taka Blog</span>
                        </a>
                    </div>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                
                <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="/dashboard" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sidebar-item  {{ Request::is('dashboard/post*') ? 'active' : '' }}">
                    <a href="/dashboard/post" class='sidebar-link'>
                        <i class="bi bi-sticky-fill"></i>
                        <span>My Post</span>
                    </a>
                </li> 
                @can('isAdmin')
                    <li class="sidebar-title">Administrator</li>
                    
                    <li class="sidebar-item {{ Request::is('dashboard/category*') ? 'active' : '' }}">
                        <a href="/dashboard/category" class='sidebar-link'>
                            <i class="bi bi-tags-fill"></i>
                            <span>Category</span>
                        </a>
                    </li>
                @endcan
                
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>