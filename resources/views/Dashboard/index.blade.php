<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <div class="main-content">
        <section class="section">
         

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