<!-- Sidebar -->
<ul class="sidebar navbar-nav">
        @if(auth()->user()->isAdmin())
            <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <!--<li class="nav-item {{ (request()->is('pendaftar')) ? 'active' : '' }}">-->
            <!--    <a class="nav-link" href="{{ url('pendaftar') }}">-->
            <!--        <i class="fa fa-book" aria-hidden="true"></i>-->
            <!--        <span>Registration Data</span>-->
            <!--    </a>-->
            <!--</li>-->
            <li class="nav-item {{ (request()->is('peserta-seminar')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('peserta-seminar') }}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Cek peserta seminar</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('peserta-bisnis')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('peserta-bisnis') }}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Cek peserta bussiness competition</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('peserta-workshop-batch1')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('peserta-workshop-batch1') }}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Cek peserta workshop batch 1</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('peserta-workshop-batch2')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('peserta-workshop-batch2') }}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Cek peserta workshop batch 2</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('prop')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('prop') }}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Bussiness File</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('berita')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/berita') }}">
                    <i class="fa fa-newspaper" aria-hidden="true"></i>
                    <span>Post a news</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('tiket')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/tiket') }}">
                    <i class="fa fa-newspaper" aria-hidden="true"></i>
                    <span>Tiket Peserta</span>
                </a>
            </li>
        @else
        <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
            </a>
        </li>
        @endif
        @if(auth()->user()->isSeminar())
            
            <li class="nav-item {{ (request()->is('tiket-seminar')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/tiket-seminar') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tiket seminar</span>
                </a>
            </li>
            @endif
        @if(auth()->user()->isWorkshop_1())
            <li class="nav-item {{ (request()->is('tiket-workshop-batch-1')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/tiket-workshop-batch-1') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tiket Workshop (Batch I)</span>
                </a>
            </li>
            @endif
        @if(auth()->user()->isWorkshop_2())
            <li class="nav-item {{ (request()->is('tiket-workshop-batch-2')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/tiket-workshop-batch-2') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tiket Workshop (Batch II)</span>
                </a>
            </li>
            @endif
        @if(auth()->user()->isCompetition())
            <li class="nav-item {{ (request()->is('tiket-competition')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/tiket-competition') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tiket Competition</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('proposal')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('proposal') }}">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Upload Bussiness File</span>
                </a>
            </li>
        @endif

        </ul>
