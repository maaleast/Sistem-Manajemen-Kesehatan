<aside class="main-sidebar" style="background: linear-gradient(180deg, #111827 0%, #1a2338 100%); color: #fff; box-shadow: 4px 0 15px rgba(0, 0, 0, 0.1);">
    <!-- Brand Logo -->
    <div class="brand-link text-center py-4" style="font-size: 1.1rem; font-weight: 600; border-bottom: 1px solid rgba(255, 255, 255, 0.1); background: rgba(0, 0, 0, 0.1); letter-spacing: 0.5px;">
        {{ Auth::user()->role == 'dokter' ? 'Dashboard Dokter' : 'Dashboard Pasien' }}
    </div>

    <!-- Sidebar user panel -->
    <div class="user-panel d-flex align-items-center py-3 px-3 border-bottom" style="border-color: rgba(255, 255, 255, 0.1); background: rgba(0, 0, 0, 0.05);">
        <div class="image me-3">
            <img src="{{ Auth::user()->role == 'dokter' 
                        ? 'https://previews.123rf.com/images/jemastock/jemastock1611/jemastock161103711/68995767-doctor-cartoon-icon-medical-and-health-care-theme-isolated-design-vector-illustration.jpg' 
                        : 'https://png.pngtree.com/png-clipart/20230805/original/pngtree-medical-volunteer-icon-patient-sick-employee-vector-picture-image_9758815.png' }}" 
                 class="img-circle elevation-2" alt="Foto Pengguna" style="width: 40px; height: 40px; border: 2px solid rgba(255, 255, 255, 0.2); object-fit: cover;">
        </div>
        <div class="info">
            <span class="d-block text-white" style="font-size: 0.95rem; font-weight: 500;">
                {{ Auth::user()->name ?? 'Nama Pengguna' }}
            </span>
            <span class="d-block text-muted" style="font-size: 0.75rem; margin-top: 2px;">
                {{ ucfirst(Auth::user()->role) }}
            </span>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-3 px-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
            @if(Auth::user()->role == 'dokter')
                <li class="nav-item mb-1">
                    <a href="{{ url('dokter/dashboard') }}" class="nav-link {{ request()->is('dokter/dashboard') ? 'active' : '' }}" style="border-radius: 6px; transition: all 0.3s;">
                        <i class="nav-icon fas fa-home" style="color: {{ request()->is('dokter/dashboard') ? '#fff' : '#9CA3AF' }};"></i>
                        <p class="ms-2">Dashboard</p>
                        @if(request()->is('dokter/dashboard'))
                            <span class="right"><i class="fas fa-circle" style="font-size: 6px; color: #3B82F6;"></i></span>
                        @endif
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ url('dokter/periksa') }}" class="nav-link {{ request()->is('dokter/periksa*') ? 'active' : '' }}" style="border-radius: 6px; transition: all 0.3s;">
                        <i class="nav-icon fas fa-stethoscope" style="color: {{ request()->is('dokter/periksa*') ? '#fff' : '#9CA3AF' }};"></i>
                        <p class="ms-2">Periksa</p>
                        @if(request()->is('dokter/periksa*'))
                            <span class="right"><i class="fas fa-circle" style="font-size: 6px; color: #3B82F6;"></i></span>
                        @endif
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ url('dokter/obat') }}" class="nav-link {{ request()->is('dokter/obat*') ? 'active' : '' }}" style="border-radius: 6px; transition: all 0.3s;">
                        <i class="nav-icon fas fa-pills" style="color: {{ request()->is('dokter/obat*') ? '#fff' : '#9CA3AF' }};"></i>
                        <p class="ms-2">Obat</p>
                        @if(request()->is('dokter/obat*'))
                            <span class="right"><i class="fas fa-circle" style="font-size: 6px; color: #3B82F6;"></i></span>
                        @endif
                    </a>
                </li>
            @elseif(Auth::user()->role == 'pasien')
                <li class="nav-item mb-1">
                    <a href="{{ url('pasien/dashboard') }}" class="nav-link {{ request()->is('pasien/dashboard') ? 'active' : '' }}" style="border-radius: 6px; transition: all 0.3s;">
                        <i class="nav-icon fas fa-home" style="color: {{ request()->is('pasien/dashboard') ? '#fff' : '#9CA3AF' }};"></i>
                        <p class="ms-2">Dashboard</p>
                        @if(request()->is('pasien/dashboard'))
                            <span class="right"><i class="fas fa-circle" style="font-size: 6px; color: #3B82F6;"></i></span>
                        @endif
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ url('pasien/periksa') }}" class="nav-link {{ request()->is('pasien/periksa*') ? 'active' : '' }}" style="border-radius: 6px; transition: all 0.3s;">
                        <i class="nav-icon fas fa-stethoscope" style="color: {{ request()->is('pasien/periksa*') ? '#fff' : '#9CA3AF' }};"></i>
                        <p class="ms-2">Periksa</p>
                        @if(request()->is('pasien/periksa*'))
                            <span class="right"><i class="fas fa-circle" style="font-size: 6px; color: #3B82F6;"></i></span>
                        @endif
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ url('pasien/riwayat') }}" class="nav-link {{ request()->is('pasien/riwayat*') ? 'active' : '' }}" style="border-radius: 6px; transition: all 0.3s;">
                        <i class="nav-icon fas fa-history" style="color: {{ request()->is('pasien/riwayat*') ? '#fff' : '#9CA3AF' }};"></i>
                        <p class="ms-2">Riwayat</p>
                        @if(request()->is('pasien/riwayat*'))
                            <span class="right"><i class="fas fa-circle" style="font-size: 6px; color: #3B82F6;"></i></span>
                        @endif
                    </a>
                </li>
            @endif

            <li class="nav-item mt-4 mb-2" style="border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 10px;">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="border-radius: 6px; transition: all 0.3s;">
                    <i class="nav-icon fas fa-sign-out-alt" style="color: #EF4444;"></i>
                    <p class="ms-2">Keluar</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    
    <!-- Sidebar footer -->
    <div class="sidebar-footer text-center py-2" style="font-size: 0.7rem; color: rgba(255, 255, 255, 0.4); border-top: 1px solid rgba(255, 255, 255, 0.1);">
        © {{ date('Y') }} Klinik Sirkel Akmal
    </div>
</aside>