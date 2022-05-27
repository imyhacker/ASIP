<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <div class="main-content">
        <section class="section">
        <x-dcore.card />

        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Hai Selamat Datang</h4>
                </div>
                <div class="card-body">
                  @if(Gate::check('isGuru'))
                    <h3 class="d-flex justify-content-center">
                      Selamat Datang di Aplikasi Sistem Informasi Presensi
                    </h3>
                  <div class="row mt-4">
                    <div class="col-md-4 mt-3">
                    <a href="" class="btn btn-primary btn-block">Data Siswa</a>
                    </div>
                    <div class="col-md-4 mt-3">
                    <a href="" class="btn btn-primary btn-block">Data Siswa</a>
                    </div>
                    <div class="col-md-4 mt-3">
                    <a href="" class="btn btn-primary btn-block">Data Siswa</a>
                    </div>
                    <div class="col-md-6 mt-3">
                    <a href="" class="btn btn-primary btn-block">Data Seluruh Kehadiran Siswa</a>

                    </div>
                    <div class="col-md-6 mt-3">
                    <a href="" class="btn btn-primary btn-block">Siswa Siswa</a>

                    </div>
                  </div>
                   
                  @else
                    <h3 class="d-flex justify-content-center">
                      Selamat Datang di Aplikasi Sistem Informasi Presensi
                    </h3>
                  @endif
                </div>
              </div>
            </div>
            
          </div>
        <!-- END OF CENTER CONTENT -->


        </section>
      </div>
      <x-dcore.footer />
    </div>
  </div>
<x-dcore.script />