<!-- Sidebar -->
<ul class="sidebar navbar-nav">
        @if(auth()->user()->isAdmin())
            <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('pendaftar')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('pendaftar') }}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Registration Data</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('prop')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('prop') }}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Bussiness Proposal</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('berita')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/berita') }}">
                    <i class="fa fa-newspaper" aria-hidden="true"></i>
                    <span>Post a news</span>
                </a>
            </li>
        @elseif(auth()->user()->isSeminar())
            <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
        @elseif(auth()->user()->isWorkshop_1())
            <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
        @elseif(auth()->user()->isWorkshop_2())
            <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
        @else(auth()->user()->isCompetition())
            <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('proposal')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('proposal') }}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Upload Bussiness Proposal</span>
                </a>
            </li>
        @endif

        </ul>
