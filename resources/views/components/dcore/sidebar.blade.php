<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('/home')}}">ASIP</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('/home')}}">AP</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class=active><a class="nav-link" href="{{url('/home')}}">Beranda</a></li>
              </ul>
            </li>
         
            <li class="menu-header">ASIP</li>

            @if(Gate::check('isGuru'))
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Data</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-lin beep beep-sidebar" href="{{route('data_siswa')}}">Data Siswa</a></li>                
                <li><a class="nav-link beep beep-sidebar" href="{{route('data_guru')}}">Data Guru</a></li>    
            </ul>
            </li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Attendance</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('data_presensi')}}">Kehadiran Per Hari</a></li>
                <li><a class="nav-link" href="{{route('data_pres_admin')}}">Siswa Hadir</a></li>
              </ul>
            </li>
           @else
           <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Attendance</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('absensi')}}">Data Absensiku</a></li>
                <li><a class="nav-link" href="{{route('data_pres')}}">Seluruh Dataku</a></li>
              </ul>
            </li>
            
           @endif
          </ul>    
        </aside>
      </div>
