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
                  <h4>Informasi Data Absensi</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"><a href="{{route('edit_data_pres_lihat', $data->id)}}" class="btn btn-outline-success btn-block"><i class="fas fa-edit"></i> Edit</a></div>
                        <div class="col-md-6"><a href="{{route('hapus_pres', $data->id)}}" class="btn btn-outline-danger btn-block"><i class="fas fa-trash"></i> Hapus</a></div>
                    </div>
                   <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>{{$data->kelas}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td>
                            <td>:</td>
                            <td>{{$data->created_at->format('l, d M Y')}}</td>
                        </tr>
                        <tr>
                            <td>Jam Masuk</td>
                            <td>:</td>
                            <td>{{$data->created_at->format('H:i:s')}}</td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td>:</td>
                            <td>
                                <img src="{{asset('fotoabsensi/'.$data->foto)}}" class="img-fluid" width="80" height="80" style="border-radius: 50px;" alt="">
                            </td>
                        </tr>
                       
                   </table>
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