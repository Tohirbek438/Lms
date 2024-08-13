<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('dist') }}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">LMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img width="100px" src="{{ asset('dist') }}/img/avatar.png" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin.show') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <p>
                            Bosh sahifa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Sayt bo'limlari
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('header.index') }}"
                                class="nav-link {{ request()->is('header') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bosh qismi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about.index') }}"
                                class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Site haqida qismi</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('project.index') }}"
                                class="nav-link {{ request()->is('project') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Loyiha qismi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('prefer.index') }}"
                                class="nav-link {{ request()->is('prefer') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Online Dars afzalliklari</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('media.index') }}"
                                class="nav-link {{ request()->is('media') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>MediaPortal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rival.index') }}"
                                class="nav-link {{ request()->is('rival') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Raqobatchilardan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('protect.index') }}"
                                class="nav-link {{ request()->is('protect') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Himoya</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('lesson.index') }}"
                                class="nav-link {{ request()->is('lesson') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Online dars</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('service.index') }}"
                        class="nav-link {{ request()->is('service') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Xizmatlar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('site.index') }}" class="nav-link {{ request()->is('site') ? 'active' : '' }}">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Bizning loyihalar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact.index') }}"
                        class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Biz bilan bog'lanish</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact-user') }}"
                        class="nav-link {{ request()->is('contact-user') ? 'active' : '' }}">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Bog'lanishlar</p>
                    </a>
                </li>
                <li class="nav-item my-3">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button style="border: 0px;margin:0px auto;" class="nav-link col-md-10">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<div class="content-wrapper">
    <div class="content-header">
    </div>
