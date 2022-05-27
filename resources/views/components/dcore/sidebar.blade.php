<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">ASIP</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AP</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class=active><a class="nav-link" href="index.html">Beranda</a></li>
              </ul>
            </li>
         
            <li class="menu-header">ASIP</li>

            @if(Gate::check('isGuru'))
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Data</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-lin beep beep-sidebar" href="https://demo.getstisla.com/components-article.html">Data Siswa</a></li>                
                <li><a class="nav-link beep beep-sidebar" href="https://demo.getstisla.com/components-avatar.html">Data Guru</a></li>
                <li><a class="nav-link beep beep-sidebar" href="https://demo.getstisla.com/components-statistic.html">Data Kelas</a></li>    
            </ul>
            </li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Attendance</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="https://demo.getstisla.com/forms-advanced-form.html">Seluruh Kehadiran Siswa</a></li>
                <li><a class="nav-link" href="https://demo.getstisla.com/forms-editor.html">Siswa Hadir</a></li>
              </ul>
            </li>
           @else
           <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Attendance</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="https://demo.getstisla.com/forms-advanced-form.html">Data Absensiku</a></li>
                <li><a class="nav-link" href="https://demo.getstisla.com/forms-editor.html">Seluruh Dataku</a></li>
              </ul>
            </li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Profil</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="https://demo.getstisla.com/forms-advanced-form.html">Profilku</a></li>
              </ul>
            </li>
           @endif
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        
        </aside>
      </div>
