<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link text-center">
        <span class="brand-text font-weight-light">GPE Edheg - Abidjan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 text-center">
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item mb-3">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tableau de bord
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('cours') }}"
                        class="nav-link {{ request()->routeIs('cours', 'cours.create', 'cours.edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Présentations des cours
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('back.events') }}"
                        class="nav-link {{ request()->routeIs('back.events', 'back.events.create', 'events.create', 'events.edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Les évènements
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('back.profs') }}"
                        class="nav-link {{ request()->routeIs('back.profs', 'back.profs.create', 'profs.edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Les professeurs
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('back.testimonials') }}"
                        class="nav-link {{ request()->routeIs('back.testimonials', 'back.testimonials.create', 'testimonials.edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>
                            Témoignages
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('back.faqs') }}"
                        class="nav-link {{ request()->routeIs('back.faqs', 'back.faqs.create', 'faqs.edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Foires aux questions
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
